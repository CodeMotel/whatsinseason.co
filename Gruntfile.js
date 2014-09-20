/*!
 * Gruntfile
 * http://see8ch.com
 * @author Chris Holder
 */

'use strict';


/**
 * Grunt module
 */
module.exports = function (grunt) {

  /**
   * Dynamically load npm tasks
   */
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  /**
   * Grunt config
   */
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    /**
     * Set project info
     */
    project: {
      src: 'src',
      app: 'app',
      assets: '<%= project.app %>/assets',
      css: [
        '<%= project.src %>/sass/style.scss'
      ],
      js: [
        '<%= project.src %>/js/_plugins/*.js',
        '<%= project.src %>/js/*.js'
      ]
    },

    /**
     * Project banner
     * Dynamically appended to CSS/JS files
     * Inherits text from package.json
     */
    tag: {
      banner: '/*!\n' +
              ' * <%= pkg.name %>\n' +
              ' * <%= pkg.title %>\n' +
              ' * <%= pkg.url %>\n' +
              ' * @author <%= pkg.author %>\n' +
              ' * @version <%= pkg.version %>\n' +
              ' * Copyright <%= pkg.copyright %>\n' +
              ' */\n'
    },


    /**
     * JSHint
     * https://github.com/gruntjs/grunt-contrib-jshint
     * Manage the options inside .jshintrc file
     */
    jshint: {
      files: ['src/js/*.js'],
      options: {
        // jshintrc: '.jshintrc'
      }
    },

    /**
     * Concatenate JavaScript files
     * https://github.com/gruntjs/grunt-contrib-concat
     * Imports all .js files and appends project banner
     */
    concat: {
      dev: {
        files: {
          '<%= project.assets %>/js/scripts.min.js': '<%= project.js %>'
        }
      },
      options: {
        stripBanners: true,
        nonull: true,
        banner: '<%= tag.banner %>'
      }
    },

    /**
     * Uglify (minify) JavaScript files
     * https://github.com/gruntjs/grunt-contrib-uglify
     * Compresses and minifies all JavaScript files into one
     */
    uglify: {
      options: {
        banner: "<%= tag.banner %>"
      },
      dist: {
        files: {
          '<%= project.assets %>/js/scripts.min.js': '<%= project.js %>'
        }
      }
    },

    /**
     * Compile Sass/SCSS files
     * https://github.com/gruntjs/grunt-contrib-sass
     * Compiles all Sass/SCSS files and appends project banner
     */
    sass: {
      dev: {
        options: {
          style: 'expanded',
          banner: '<%= tag.banner %>'
        },
        files: {
          '<%= project.assets %>/css/style.min.css': '<%= project.css %>'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          banner: '<%= tag.banner %>'
        },
        files: {
          '<%= project.assets %>/css/style.min.css': '<%= project.css %>'
        }
      }
    },

    /**
     * Autoprefixer
     * https://github.com/nDmitry/grunt-autoprefixer
     */
    autoprefixer: {
        options: {},
        global: {
            options: {
                // Target-specific options go here.
                // browser-specific info: https://github.com/ai/autoprefixer#browsers
                // DEFAULT: browsers: ['> 1%', 'last 2 versions', 'ff 17', 'opera 12.1']
                browsers: ['> 1%', 'last 2 versions', 'ff 17', 'opera 12.1', 'ie 8', 'ie 9']
            },
            src: '<%= project.assets %>/css/style.min.css'
        },
    },

    /**
     * Grunt failure notifications
     * https://github.com/dylang/grunt-notify
     */
    notify_hooks: {
      options: {
        enabled: true,
        max_jshint_notifications: 5, // maximum number of notifications from jshint output
        title: "<%= pkg.name %>" // defaults to the name in package.json, or will use project directory's name
      }
    },


    /**
     * Runs tasks against changed watched files
     * https://github.com/gruntjs/grunt-contrib-watch
     * Watching development files and run concat/compile tasks
     * Livereload the browser once complete
     */
    watch: {
      concat: {
        files: '<%= project.src %>/js/{,*/}*.js',
        tasks: ['concat:dev', 'jshint']
      },
      sass: {
        files: '<%= project.src %>/sass/{,*/}*.{scss,sass}',
        tasks: ['sass:dev', 'autoprefixer']
      },
      livereload: {
        options: {
          livereload: true,
          spawn: false,
        },
        files: [
          '<%= project.app %>/{,*/}*.html',
          '<%= project.app %>/{,*/}*.php',
          '<%= project.assets %>/css/*.css',
          '<%= project.assets %>/js/{,*/}*.js',
          '<%= project.assets %>/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    }
  });

  /**
   * Default task
   * Run `grunt` on the command line
   */
  grunt.registerTask('default', [
    'sass:dev',
    'jshint',
    'concat:dev',
    'watch'
  ]);

  /**
   * Build task
   * Run `grunt build` on the command line
   * Then compress all JS/CSS files
   */
  grunt.registerTask('build', [
    'sass:dist',
    'jshint',
    'uglify'
  ]);

};
