﻿<?php
   $pageTitle = 'T5 Ballast';
   $page = 'T5 Ballast';
   include 'elements/header.php';

   ?>

 <meta name="description" content=""/> 
<meta name="keywords" content=""/>   

<body>

  <?php 
  include 'elements/nav.php';

  ?>


    <div class="webbanner">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft">T5 Ballast</h1>
</div>


<div class="productsearcher3 animated fadeInUp">
<a href="osramt5.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/t5/osram.png" alt="osram"/></a>
</div>

<div class="productsearcher3 animated fadeInUp">
<a href="philipst5.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/t5/philips.png" alt="philips"/></a>
</div>

<div class="productsearcher3 animated fadeInUp">
<a href="helvart5.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/t5/helvar.png" alt="helvar"/></a>
</div>

<div class="productsearcher322 animated fadeInUp">
<a href="tridonict5.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfnd/compact/t5/tridonic.png" alt="tridonic"/></a>
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