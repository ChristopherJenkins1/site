<?php
   $pageTitle = 'Emergency Philips Module';
   $page = 'Emergency Philips Module';
   include 'elements/header.php';

   ?>

   <meta name="description" content="Emergency existalite module"/> 
    <meta name="keywords" content="northgate lighting, leeds, wholesale, existalite, emergency module, nicd, nimh, phl inverter"/>

<body>

  <?php 
  include 'elements/nav.php';

  ?>

     <div class="webbanner">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft"> Module<br /> Philips </h1>
  <p class="animated fadeInLeft">Emergency LED conversion module.</p>
</div>

<div class="indproduct animated fadeInUp">
  <ul id="portfolio" class="clearfix">
     <a href="images/Product Searcher/Emergency/modules/philipsb.png" title="Module Philips">
    <img src ="images/Product Searcher/Emergency/modules/philipsp.png" alt="product"/> </a> 
</ul>
</div>

<table class="chart animated fadeInRight">
  <tr>
    <th class="tg-0ord">Product Code:</th>
    <th class="tg-0ord">Description:</th>
    <th class="tg-0ord">Battery:</th>
    <th class="tg-0ord">Brand:</th>
  </tr>
  <tr>
    <td class="tg-0ord">EMM-PHL-EL3</td>
    <td class="tg-0ord">Emergency Module - ZT.3E/A</td>
    <td class="tg-0ord">3 Cell</td>
    <td class="tg-0ord">Philips</td>
  </tr>
</table>

<div class="mobchart animated fadeInUp">
<img src ="images/Product Searcher/Emergency/modules/philipsmobchart.png" alt="chart"/>
</div>

<div class="lampsuggestion animated flipInX">
<a href="#two"><img src="images/buttons/BatSuggestion.png" alt="button"/></a>
 </div>
    
<div class="ballastsuggestion">
<a href="#top"><img src="images/buttons/ModButton.png" alt="button"/></a>
 </div>

<div class="webbannerjux">
  <h1 class="wow animated fadeInLeft"id="two">Battery</h1>
</div>

<div class="productsearcher81 animated fadeInUp">
<a href="nicd.php"><img class="wow animated fadeInRight button hvr-grow-shadow" src ="images/Product Searcher/Emergency/batteries/nicd.png" alt="NiCD"/></a>
</div>

<div class="productsearcher81 animated fadeInUp">
<a href="nimh.php"><img class="wow animated fadeInRight button hvr-grow-shadow" src ="images/Product Searcher/Emergency/batteries/nimh.png" alt="NiMH"/></a>
</div>

<div class="moreinfo5 wow animated flipInX">
<a a href="datasheets/emergencyphilips.pdf" target="_blank"><img class="button hvr-grow-shadow" src ="images/buttons/moreinfo.png" alt="more info button"/></a>
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