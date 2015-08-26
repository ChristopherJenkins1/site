<?php
   $pageTitle = 'Home';
   $page = 'home';
   include 'elements/header.php';

   ?>

<meta name="description" content="Northgate lighting Leeds wholesale offical distributor of osram and harvard"/> 
<meta name="keywords" content="northgate, lighting, leeds, wholesale, osram, harvard, led, lamp, ballast, fluoerescent, hid, control gear, lampholder"/>

<body>

  <?php 
  include 'elements/nav.php';

  ?>


    <div class="webbannerbigp">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft">Welcome To The Leading Supplier Of<br />Lighting To The Electrical Wholesale Industry.</h1>
  <p class="animated fadeInLeft">Call us: 08448 879000<br /><br />Fax us: &nbsp;08448 879003<br /><br />Email: &nbsp;&nbsp;sales@northgatelighting.com</p>
</div>



<div class="productsearcherhome animated rotateInDownLeft">
<a href="productsearcher.php"><img class="button hvr-grow-shadow" src ="images/home/ps.png" alt="product searcher"/></a>
</div>

<div class="productsearcherhome animated rotateInDownLeft">
<a href="returns.php"><img class="button hvr-grow-shadow" src ="images/home/returns.png" alt="returns"/></a>
</div>

<div class="productsearcherhome2 animated rotateInDownRight">
<a href="about.php"><img class="button hvr-grow-shadow" src ="images/home/about.png" alt="about"/></a>
</div>

<div class="productsearcherhome3 animated rotateInDownRight">
<a href="team.php"><img class="button hvr-grow-shadow" src ="images/home/team.png" alt="team"/></a>
</div>

<div class="fadeinz2">
  <img src="images/brands/brand2.png"  alt="Venture" width="300" height="220" class="alignnone size-full wp-image-172" />
  <img src="images/brands/brand8.png" alt="Tridonic / Brightsource" width="300" height="220" class="alignnone size-full wp-image-179" />
  <img src="images/brands/brand6.png" alt="Megaman / Helvar" width="300" height="220" class="alignnone size-large wp-image-178" />
  <img src="images/brands/brand4.png" alt="Mackwell / Existalite" width="300" height="220" class="alignnone size-large wp-image-176" />
  <img src="images/brands/brand3.png" alt="Sylvania / Philips / Orbik" width="300" height="220" class="alignnone size-large wp-image-175" />
  <img src="images/brands/brand7.png" alt="Yuasa / Bell / GE" width="300" height="220" class="alignnone size-large wp-image-174" />
</div>

<div class="twitterwidget">
<a class="twitter-timeline" href="https://twitter.com/NorthgateLeeds" data-widget-id="630731920184344576">Tweets by @NorthgateLeeds</a>
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