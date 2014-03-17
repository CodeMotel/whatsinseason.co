        <!--******** Footer Toggles ********-->
        <footer>

          <div id="about-module" class="footer-toggles">
            <a id="about-button" class="button"><span class="genericon genericon-info"></span><span class="genericon genericon-close"></span> About</a>
            <div id="about-hidden" class="hidden">
                <ul>
                  <p>site credits</p>
                  <li><?php include('includes/food/cabbage.php'); ?>Cabbage designed by Jose Eduardo Ayala from the Noun Project</li>
                  <li><?php include('includes/food/lettuce.php'); ?>Cabbage designed by Artur Shageyev from the Noun Project</li>
                  <li><?php include('includes/food/green-beans.php'); ?>Beans designed by Doug Cavendish from the Noun Project</li>
                  <li><?php include('includes/food/cucumbers.php'); ?>Cucumber designed by Yinon Ezra from the Noun Project</li>
                  <li><?php include('includes/food/herbs.php'); ?>Basil designed by Julia Soderberg from the Noun Project</li>
                  <li><?php include('includes/food/asparagus.php'); ?>Asparagus designed by Richard Zeid from the Noun Project</li>
                  <li class="border">Tools: <a href="">FitText.JS</a>, <a href="">Genericons</a>, <a href="">Grunt.JS</a>, <a href="">Unsplash</a>, <a href="">Google Fonts</a>
                  <li class="border">Site by <a href="http://see8ch.com">Chris Holder</a><!-- + <a href="">Michaella Dirkes</a>--></li>
                </ul>
            </div>
          </div>
        <div id="footer-icon"><a class="go-top"><?php include('includes/header-icon.php'); ?></a></div>
          <div id="city-module" class="footer-toggles">
            <a id="city-button"class="button"><span class="genericon genericon-comment"></span><span class="genericon genericon-close"></span> Add Your City</a>
            <div id="city-hidden" class="hidden">
              <form>
                <p>Interested in having your city featured on the site? Please fill out the form below</p>
                <input type="text" placeholder="Name"/>
                <input type="text" placeholder="Email"/>
                <input type="text" placeholder="City"/>
                <textarea placeholder="Message"></textarea>
                <input type="submit" value="Send Request"/>
              </form>
            </div>
          </div>
        </footer>

        <!--******** Background Image ********-->
        <div id="bkgd-img"></div>



         <!-- JavaScript  -->
        <script src="//code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/production.min.js"></script>
        <!--<script src="js/food.js"></script>-->


        <!-- Modernizr -->
<!--        <script src="js/modernizr.js"></script> -->


        <!-- Google Analytics -->
        <!--<script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-40198502-5']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>-->

</body>
</html>