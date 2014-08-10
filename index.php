<?php include('includes/head.php'); ?>

<body id="home">

<?php include('includes/nav.php'); ?>

<!--******** Date ********-->
<div id="current-date">
   <div id="date-header">Fresh Today in Colorado</div>
  <script type="text/javascript">
      function makeArray() {
      for (i = 0; i<makeArray.arguments.length; i++)
      this[i + 1] = makeArray.arguments[i];
      }
      var months = new makeArray('january','february','march','april','may',
      'june','july','august','september','october','november','december');
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(months[month] + " " + day + ", " + year);
   </script>
</div>

<!--******** Crop List ********-->
<div id="crop-wrap" class="wrapper">
   <div id="closed-msg">
      <p>Sorry, the markets are closed. We will update in May!</p>
      <p class="sub">here's a look at what will be available next season.</p>
    </div>
    <div id="open-msg">
      <p>Currently available at your Local Farmer's Market</p>
      <p class="sub">Don't see what you're looking for?  View the <a href="http://www.coloradofreshmarkets.com/crop_calendar.html">crop calendar <span class="genericon genericon-video"></span></a></p>
    </div>

   <ul id="crop-list">
     <li id="apples" class="apples"><?php include('includes/food/apples.php'); ?><span>apples</span></li>
     <li id="apricots" class="apricots"><?php include('includes/food/apricots.php'); ?><span>apricots</span></li>
     <li id="asparagus" class="asparagus"><?php include('includes/food/asparagus.php'); ?><span>asparagus</span></li>
     <li id="beets" class="beets"><?php include('includes/food/beets.php'); ?><span>beets</span></li>
     <li id="bell-peppers" class="bell-peppers"><?php include('includes/food/bell-peppers.php'); ?><span>bell peppers</span></li>
     <li id="broccoli" class="broccoli"><?php include('includes/food/broccoli.php'); ?><span>broccoli</span></li>
     <li id="cabbage" class="cabbage"><?php include('includes/food/cabbage.php'); ?><span>cabbage</span></li>
     <li id="cantaloupe" class="cantaloupe"><?php include('includes/food/cantaloupe.php'); ?><span>cantaloupe</span></li>
     <li id="carrots" class="carrots"><?php include('includes/food/carrots.php'); ?><span>carrots</span></li>
     <li id="cauliflower" class="cauliflower"><?php include('includes/food/cauliflower.php'); ?><span>cauliflower</span></li>
     <li id="celery" class="celery"><?php include('includes/food/celery.php'); ?><span>celery</span></li>
     <li id="cherries" class="cherries"><?php include('includes/food/cherries.php'); ?><span>cherries</span></li>
     <li id="chile-peppers" class="chile-peppers"><?php include('includes/food/chile-peppers.php'); ?><span>chile peppers</span></li>
     <li id="cucumbers" class="cucumbers"><?php include('includes/food/cucumbers.php'); ?><span>cucumbers</span></li>
     <li id="eggplant" class="eggplant"><?php include('includes/food/eggplant.php'); ?><span>eggplant</span></li>
     <li id="grapes" class="grapes"><?php include('includes/food/grapes.php'); ?><span>grapes</span></li>
     <li id="green-beans" class="green-beans"><?php include('includes/food/green-beans.php'); ?><span>green beans</span></li>
     <li id="herbs" class="herbs"><?php include('includes/food/herbs.php'); ?><span>herbs</span></li>
     <li id="honeydew" class="honeydew"><?php include('includes/food/honeydew.php'); ?><span>honeydew</span></li>
     <li id="lettuce" class="lettuce"><?php include('includes/food/lettuce.php'); ?><span>lettuce</span></li>
     <li id="onions" class="onions"><?php include('includes/food/onions.php'); ?><span>onions</span></li>
     <li id="peaches" class="peaches"><?php include('includes/food/peaches.php'); ?><span>peaches</span></li>
     <li id="pears" class="pears"><?php include('includes/food/pears.php'); ?><span>pears</span></li>
     <li id="pinto-beans" class="pinto-beans"><?php include('includes/food/pinto-beans.php'); ?><span>pinto beans</span></li>
     <li id="plums" class="plums"><?php include('includes/food/plums.php'); ?><span>plums</span></li>
     <li id="popcorn" class="popcorn"><?php include('includes/food/popcorn.php'); ?><span>popcorn</span></li>
     <li id="potatoes" class="potatoes"><?php include('includes/food/potatoes.php'); ?><span>potatoes</span></li>
     <li id="pumpkins" class="pumpkins"><?php include('includes/food/pumpkins.php'); ?><span>pumpkins</span></li>
     <li id="raspberries" class="raspberries"><?php include('includes/food/raspberries.php'); ?><span>raspberries</span></li>
     <li id="rhubarb" class="rhubarb"><?php include('includes/food/rhubarb.php'); ?><span>rhubarb</span></li>
     <li id="squash" class="squash"><?php include('includes/food/squash.php'); ?><span>squash</span></li>
     <li id="strawberries" class="strawberries"><?php include('includes/food/strawberries.php'); ?><span>strawberries</span></li>
     <li id="sweet-corn" class="sweet-corn"><?php include('includes/food/sweet-corn.php'); ?><span>sweet-corn</span></li>
     <li id="tomatoes" class="tomatoes"><?php include('includes/food/tomatoes.php'); ?><span>tomatoes</span></li>
     <li id="watermelon" class="watermelon"><?php include('includes/food/watermelon.php'); ?><span>watermelon</span></li>
   </ul>

</div>

<div id="find-a-market">
  <p>Find a Market</p>
  <a id="map-toggle">View Map <span class="genericon genericon-location"></span></a>
</div>

<?php include('includes/map.php'); ?>

<?php include('includes/footer.php'); ?>
