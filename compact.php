<?php
   $pageTitle = 'Compact Fluorescent';
   $page = 'compact fluorescent';
   include 'elements/header.php';

   ?>

    <meta name="description" content="Northgate lighting - compact fluorescent - high frequency non dimmable - control gear"/> 
    <meta name="keywords" content="northgate lighting, leeds, wholesale, compact fluorescent, pll, plc, 2d "/>

<body>
 
  <?php 
  include 'elements/nav.php';

  ?>

     <div class="webbanner">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft"> Compact Fluorescent<br />Ballast</h1>
</div>

<div class="productsearcher6 animated fadeInUp">
<a href="pll.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/pll.png" alt="pll"/></a>
</div>

<div class="productsearcher6 animated fadeInUp">
<a href="2d.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/2d.png" alt="2d"/></a>
</div>

<div class="productsearcher61 animated fadeInUp">
<a href="plc.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/plc.png" alt="plc"/></a>
</div>

<div class="fadeinz">
  <img id="f3" src="images/advert/ad1.png" alt="ad1"/>
    <img id="f2" src="images/advert/ad2.png" alt="ad2"/>
    <img id="f1" src="images/advert/ad3.png" alt="ad3"/>
</div>

  <?php 
  include 'elements/footer.php';

  ?>

</body>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="Non-origianl work/js/jquery.dlmenu.js"></script>
    <script type="text/javascript">
      $(function() {
        $( '#dl-menu' ).dlmenu();
      });
    </script>

<script type="text/javascript">
    $(function(){
    $('.fadeinz img:gt(0)').hide();
    setInterval(function(){
      $('.fadeinz :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadeinz');}, 
      3000);
});
     </script>

     <script type="text/javascript">
    $(function(){
    $('.fadeinz2 img:gt(0)').hide();
    setInterval(function(){
      $('.fadeinz2 :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadeinz2');}, 
      3000);
});
     </script>
     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

     <script src="Non-origianl work/js/classie.js"></script>
    <script src="Non-origianl work/js/uisearch.js"></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>

<?php?>