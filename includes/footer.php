        <!--******** Footer Toggles ********-->
        <footer>

        <!-- About Section -->
          <div id="about-module" class="footer-toggles">
            <a id="about-button" class="button"><span class="genericon genericon-info"></span><span class="genericon genericon-close"></span> about</a>
            <div id="about-hidden" class="hidden">
                <ul>
                  <p class="headline">about the site</p>
                  <li>We built this site to help you find as much fresh food as you can and to help make healthy living an easier option.</li>
                  <li class="border divider"></li>
                  <li><?php include('includes/food/cabbage.php'); ?>Cabbage designed by Jose Eduardo Ayala from the Noun Project</li>
                  <li><?php include('includes/food/lettuce.php'); ?>Lettuce designed by Artur Shageyev from the Noun Project</li>
                  <li><?php include('includes/food/green-beans.php'); ?>Beans designed by Doug Cavendish from the Noun Project</li>
                  <li><?php include('includes/food/cucumbers.php'); ?>Cucumber designed by Yinon Ezra from the Noun Project</li>
                  <li><?php include('includes/food/herbs.php'); ?>Basil designed by Julia Soderberg from the Noun Project</li>
                  <li><?php include('includes/food/asparagus.php'); ?>Asparagus designed by Richard Zeid from the Noun Project</li>
                  <li class="border">Tools: <a href="http://fittextjs.com/">FitText.JS</a>, <a href="http://genericons.com/">Genericons</a>, <a href="http://gruntjs.com/">Grunt.JS</a>, <a href="http://unsplash.com/">Unsplash</a>, <a href="https://www.google.com/fonts">Google Fonts</a>
                  <li class="border">Site by <a href="http://see8ch.com">Chris Holder</a> + <a href="http://michaellaness.com">Michaella Dirkes</a></li>
                  <li>© Copyright 2014 // All Rights Reserved</li>
                </ul>
            </div>
          </div>

          <!-- Icon -->
          <div id="footer-icon"><a class="go-top"><?php include('includes/header-icon.php'); ?></a></div>

          <!-- Add Your City Section -->
          <div id="city-module" class="footer-toggles">
            <a id="city-button"class="button"><span class="genericon genericon-comment"></span><span class="genericon genericon-close"></span> add your city</a>
            <div id="city-hidden" class="hidden">
              <form method="post" action="submit.php">
                <p class="headline">Interested in adding your city or market?</p>
                <p>Please fill out the form below.</p>
                <p id="antispam"><input name="url" type="text" /></p>
                <input name="name" type="text" placeholder="name"/>
                <input name="email" type="text" placeholder="email"/>
                <input name="city" type="text" placeholder="city"/>
                <textarea name="message" placeholder="message"></textarea>
                <input type="submit" value="send"/>
              </form>
            </div>
          </div>

        </footer>

        <!--******** Background Image ********-->
        <div id="bkgd-img"></div>



         <!-- JavaScript  -->
        <script src="//code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/production.min.js"></script>


        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Browser Update Mess -->
        <script type="text/javascript">
          var $buoop = {};
          $buoop.ol = window.onload;
          window.onload=function(){
           try {if ($buoop.ol) $buoop.ol();}catch (e) {}
           var e = document.createElement("script");
           e.setAttribute("type", "text/javascript");
           e.setAttribute("src", "//browser-update.org/update.js");
           document.body.appendChild(e);
          }
        </script>

        <!-- Google Analytics -->
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-40198502-5']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>

</body>
</html>