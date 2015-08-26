<?php
   $pageTitle = 'Emergency Modules';
   $page = 'Emergency Modules';
   include 'elements/header.php';

   ?>

    <meta name="description" content="Emergency modules - existalite - liteplan - philips"/> 
    <meta name="keywords" content="northgate lighting, leeds, wholesale, existalite, emergency module, LED indicator, ballast, liteplan, philips, converter"/>

<body>

  <?php 
  include 'elements/nav.php';

  ?>

    <div class="webbanner">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft">Emergency<br />Modules </h1>
  <p class="animated fadeInLeft">Emergency modules are there to run next to a ballast which is already installed. A module paired<br /> with a battery and an LED indicator is all you would need to turn a standard light fitting into emergency. </p>
</div>


<div class="productsearcher6 animated fadeInUp">
<a href="emergliteplan.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Emergency/modules/liteplan.png" alt="liteplan"/></a>
</div>

<div class="productsearcher6 animated fadeInUp">
<a href="emergexistalite.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Emergency/modules/existalite.png" alt="existalite"/></a>
</div>

<div class="productsearcher61 animated fadeInUp">
<a href="emergphilips.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Emergency/modules/philips.png" alt="philips"/></a>
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