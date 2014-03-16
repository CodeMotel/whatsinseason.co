<?php include('includes/head.php'); ?>

<!-- Begin Content -->
<header>
   <div class="header-wrapper">
      <div id="site-logo">What's in Season?</div>
      <a href="http://www.coloradofreshmarkets.com/markets.html"><div id="header-link" >Find Markets ></div></a>
  </div>
 </header>

<!-- Date -->
<div id="current-date">
   <div id="date-header">Farm Fresh Today</div>
  <script type="text/javascript">
      function makeArray() {
      for (i = 0; i<makeArray.arguments.length; i++)
      this[i + 1] = makeArray.arguments[i];
      }
      var months = new makeArray('January','February','March','April','May',
      'June','July','August','September','October','November','December');
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(months[month] + " " + day + ", " + year);
   </script>
</div>


<div id="crop-wrap" class="wrapper">
   <!--<div id="crop-header">Today's Crops</div>-->
   <ul id="crop-list">
     <li class="apples"><?php include('includes/food/apples.php'); ?><span>apples</span></li>
     <li class="apricots"><?php include('includes/food/apricots.php'); ?><span>apricots</span></li>
     <li class="asparagus"><?php include('includes/food/asparagus.php'); ?><span>asparagus</span></li>
     <li class="beets"><?php include('includes/food/beets.php'); ?><span>beets</span></li>
     <li class="bell-peppers"><?php include('includes/food/bell-peppers.php'); ?><span>bell peppers</span></li>
     <li class="broccoli"><?php include('includes/food/broccoli.php'); ?><span>broccoli</span></li>
     <li class="cabbage"><?php include('includes/food/cabbage.php'); ?><span>cabbage</span></li>
     <li class="cantaloupe"><?php include('includes/food/cantaloupe.php'); ?><span>cantaloupe</span></li>
     <li class="carrots"><?php include('includes/food/carrots.php'); ?><span>carrots</span></li>
     <li class="cauliflower"><?php include('includes/food/cauliflower.php'); ?><span>cauliflower</span></li>
     <li class="celery"><?php include('includes/food/celery.php'); ?><span>celery</span></li>
     <li class="cherries"><?php include('includes/food/cherries.php'); ?><span>cherries</span></li>
     <li class="chile-peppers"><?php include('includes/food/chile-peppers.php'); ?><span>chile peppers</span></li>
     <li class="cucumbers"><?php include('includes/food/cucumbers.php'); ?><span>cucumbers</span></li>
     <li class="eggplant"><?php include('includes/food/eggplant.php'); ?><span>eggplant</span></li>
     <li class="grapes"><?php include('includes/food/grapes.php'); ?><span>grapes</span></li>
     <li class="green-beans"><?php include('includes/food/green-beans.php'); ?><span>green beans</span></li>
     <li class="herbs"><?php include('includes/food/herbs.php'); ?><span>herbs</span></li>
     <li class="honeydew"><?php include('includes/food/honeydew.php'); ?><span>honeydew</span></li>
     <li class="lettuce"><?php include('includes/food/lettuce.php'); ?><span>lettuce</span></li>
     <li class="onions"><?php include('includes/food/onions.php'); ?><span>onions</span></li>
     <li class="peaches"><?php include('includes/food/peaches.php'); ?><span>peaches</span></li>
     <li class="pears"><?php include('includes/food/pears.php'); ?><span>pears</span></li>
     <li class="pinto-beans"><?php include('includes/food/pinto-beans.php'); ?><span>pinto beans</span></li>
     <li class="plums"><?php include('includes/food/plums.php'); ?><span>plums</span></li>
     <li class="popcorn"><?php include('includes/food/popcorn.php'); ?><span>popcorn</span></li>
     <li class="potatoes"><?php include('includes/food/potatoes.php'); ?><span>potatoes</span></li>
     <li class="pumpkins"><?php include('includes/food/pumpkins.php'); ?><span>pumpkins</span></li>
     <li class="raspberries"><?php include('includes/food/raspberries.php'); ?><span>raspberries</span></li>
     <li class="rhubarb"><?php include('includes/food/rhubarb.php'); ?><span>rhubarb</span></li>
     <li class="squash"><?php include('includes/food/squash.php'); ?><span>squash</span></li>
     <li class="strawberries"><?php include('includes/food/strawberries.php'); ?><span>strawberries</span></li>
     <li class="sweet-corn"><?php include('includes/food/sweet-corn.php'); ?><span>sweet-corn</span></li>
     <li class="tomatoes"><?php include('includes/food/tomatoes.php'); ?><span>tomatoes</span></li>
     <li class="watermelon"><?php include('includes/food/watermelon.php'); ?><span>watermelon</span></li>
   </ul>
</div>

<footer>
  <div>Find a Market<br /><a href="http://www.coloradofreshmarkets.com/markets.html">View Map ></a></div>
  <div>About</div>
  <div>Add Your City</div>
</footer>

<div id="bkgd-img"></div>

<?php include('includes/footer.php'); ?>
