<?php
   $pageTitle = 'Other Lampholders';
   $page = 'Other Lampholders';
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
  <h1 class="animated fadeInLeft">Other<br />Lampholders</h1>
  <p class="animated fadeInLeft"> We stock a wide variety of lighting spares including<br />lamps, control gears, batteries and LED.</p>
</div>


<div class="productsearcher3 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/e40.png" alt="E40"/></a>
</div>

<div class="productsearcher3 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/e27.png" alt="E27"/></a>
</div>

<div class="productsearcher33 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/g4.png" alt="G4"/></a>
</div>

<div class="productsearcher331 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/gu10.png" alt="GU10"/></a>
</div>

<div class="productsearcher332 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/g12.png" alt="G12"/></a>
</div>

<div class="productsearcher332 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/rx75.png" alt="RX75"/></a>
</div>

<div class="productsearcher332 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/2d4.png" alt="2D 4Pin"/></a>
</div>

<div class="productsearcher332 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/2d2.png" alt="2D 2Pin"/></a>
</div>

<div class="productsearcher332 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/e40con.png" alt="E40 Con"/></a>
</div>

<div class="productsearcher332 animated fadeInUp">
<a href="#"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Lampholder/other/e27con.png" alt="E27 Con"/></a>
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