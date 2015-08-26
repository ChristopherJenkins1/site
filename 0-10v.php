<?php
   $pageTitle = '0-10V - Control Gear - High Frequency Dimmable - Ballast ';
   $page = '0-10V';
   include 'elements/header.php';

   ?>

    <meta name="description" content="Northgate 0-10v high frequency dimmable control gear"/> 
    <meta name="keywords" content="northgate lighting, leeds, wholesale, 0-10v, high frequency non dimmable, control gear, ballast, helvar t5, philips t8, tridonic compact fluoerescent, tridonic, philips, helvar"/>

<body>

<?php 
  include 'elements/nav.php';

  ?>


     <div class="webbanner">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft"> 0 -10V </h1>
</div>

<div class="productsearcher6 animated fadeInUp">
<a href="helvar0-10t5.htm"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfd/t5.png" alt="t5"/></a>
</div>

<div class="productsearcher6 animated fadeInUp">
<a href="philips0-10t8.htm"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfd/t8.png" alt="t8"/></a>
</div>

<div class="productsearcher612 animated fadeInUp">
<a href="tridonic0-10cfl.htm"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/hfd/cfl.png" alt="cfl"/></a>
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

     <script src="Non-origianl work/js/classie.js"></script>
    <script src="Non-origianl work/js/uisearch.js"></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>


<?php?>