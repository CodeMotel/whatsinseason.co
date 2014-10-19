        <!--******** Footer Toggles ********-->
        <footer>

        <!-- About Section -->
          <div id="about-module" class="footer-toggles">
            <a id="about-button" class="button"><span class="genericon genericon-info"></span><span class="genericon genericon-close"></span> about</a>
            <div id="about-hidden" class="hidden">
                <ul>
                  <p class="headline">about the site</p>
                  <li>we built this site so that people can find as much fresh food as possible and to help make healthy living an easier option</li>
                  <li class="border divider"></li>
                  <li><?php include('includes/food/cabbage.php'); ?>Cabbage designed by Jose Eduardo Ayala from the Noun Project</li>
                  <li><?php include('includes/food/lettuce.php'); ?>Lettuce designed by Artur Shageyev from the Noun Project</li>
                  <li><?php include('includes/food/green-beans.php'); ?>Beans designed by Doug Cavendish from the Noun Project</li>
                  <li><?php include('includes/food/cucumbers.php'); ?>Cucumber designed by Yinon Ezra from the Noun Project</li>
                  <li><?php include('includes/food/herbs.php'); ?>Basil designed by Julia Soderberg from the Noun Project</li>
                  <li><?php include('includes/food/asparagus.php'); ?>Asparagus designed by Richard Zeid from the Noun Project</li>
                  <li class="border">Tools: <a href="http://fittextjs.com/">FitText.JS</a>, <a href="http://genericons.com/">Genericons</a>, <a href="http://gruntjs.com/">Grunt.JS</a>, <a href="http://unsplash.com/">Unsplash</a>, <a href="https://www.google.com/fonts">Google Fonts</a>
                  <li class="border">Site by <a href="http://see8ch.com">Chris Holder</a> + <a href="http://michaellaness.com">Michaella Dirkes</a></li>
                  <li>share <a target="_blank" href="https://twitter.com/home?status=What's%20in%20Season,%20CO?%20Find%20out%20what's%20fresh%20today%20in%20Denver%20http://whatsinseason.co%20@whatsinseasonco"><span class="genericon genericon-twitter"></span></a> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://whatsinseason.co"><span class="genericon genericon-facebook"></span></a> <a target="_blank" href="https://plus.google.com/share?url=whatsinseason.co"><span class="genericon genericon-googleplus"></span></a></li>
                  <li class="border">© Copyright 2014 // All Rights Reserved</li>
                </ul>
            </div>
          </div>

          <!-- Icon -->
          <div id="footer-icon"><a href="#top-link"><?php include('includes/header-icon.php'); ?></a></div>

          <!-- Add Your City Section -->
          <div id="city-module" class="footer-toggles">
            <a id="city-button"class="button"><span class="genericon genericon-comment"></span><span class="genericon genericon-close"></span> add your market</a>
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
        <script src='js/food.js'></script>



        <!-- Browser Update Message -->
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
