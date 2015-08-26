<?php
   $pageTitle = 'Osram - Led Drivers - 24v - 350ma - 500ma - 700ma';
   $page = 'Osram - Led Drivers - 24v - 350ma - 500ma - 700ma';
   include 'elements/header.php';

   ?>

    <meta name="description" content="Osram - 24v - 350ma - 500ma - 700ma"/> 
    <meta name="keywords" content="northgate lighting, leeds, wholesale, Osram, power, 12v, 24v, 340ma, 500ma, 700ma "/>

<body>
  
  <?php 
  include 'elements/nav.php';

  ?>

    <div class="webbannerpara">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft">Led Drivers</h1>
  <p class="animated fadeInLeft">We are official distributors of GE Lightech, Osram and harvard but <br />also stock many other brands. </p>
</div>


<div class="productsearcher3 animated fadeInUp">
<a href="24v.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/LedDriver/24v.png" alt="24v"/></a>
</div>

<div class="productsearcher3 animated fadeInUp">
<a href="350ma.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/LedDriver/350ma.png" alt="350ma"/></a>
</div>

<div class="productsearcher33 animated fadeInUp">
<a href="500ma.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/LedDriver/500ma.png" alt="500ma"/></a>
</div>

<div class="productsearcher331 animated fadeInUp">
<a href="700ma.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/LedDriver/700ma.png" alt="700ma"/></a>
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