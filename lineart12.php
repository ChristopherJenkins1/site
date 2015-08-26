<?php
   $pageTitle = 'Linear 12';
   $page = 'Linear 12';
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
  <h1 class="animated fadeInLeft"> T12 </h1>
</div>

<div class="indproduct animated fadeInUp">
  <ul id="portfolio" class="clearfix">
     <a href="images/Product Searcher/flourescent/linear/t12b.png" title="T12">
<img src ="images/Product Searcher/flourescent/linear/t12p.png" alt="product picture"/></a>
</ul>
</div>

<table class="chart animated fadeInRight">
  <tr>
    <th class="tg-0ord">Product Code:</th>
    <th class="tg-0ord">Description:</th>
    <th class="tg-0ord">Brand:</th>
    <th class="tg-0ord">Colours Available:</th>
  </tr>
  <tr>
    <td class="tg-0ord">0060-020</td>
    <td class="tg-0ord">2FT - 20w - T12 - White</td>
    <td class="tg-0ord">Britesource</td>
    <td class="tg-0ord">535</td>
  </tr>
  <tr>
    <td class="tg-0ord">0060-020</td>
    <td class="tg-0ord">4FT - 40w - T12 - White</td>
    <td class="tg-0ord">Britesource</td>
    <td class="tg-0ord">535</td>
  </tr>
  <tr>
    <td class="tg-0ord">0060-020</td>
    <td class="tg-0ord">5FT - 65w - T12 - White</td>
    <td class="tg-0ord">Britesource</td>
    <td class="tg-0ord">535</td>
  </tr>
  <tr>
    <td class="tg-0ord">0060-020</td>
    <td class="tg-0ord">6FT - 75w - T12 - White</td>
    <td class="tg-0ord">Britesource</td>
    <td class="tg-0ord">535</td>
  </tr>
  <tr>
    <td class="tg-0ord">0060-020</td>
    <td class="tg-0ord">8FT - 100w - T12 - White</td>
    <td class="tg-0ord">Britesource</td>
    <td class="tg-0ord">535</td>
  </tr>
</table>

<div class="mobchart animated fadeInUp">
<img src ="images/Product Searcher/flourescent/linear/t12mobchart.png" alt="chart"/>
</div>

<div class="lampsuggestion animated flipInX">
<a href="#two"><img src="images/buttons/BDSuggestion.png" alt="button"/></a>
 </div>
    
<div class="ballastsuggestion3">
<a href="#top"><img src="images/buttons/LUSuggestion.png" alt="button"/></a>
 </div>

<div class="webbannerjux">
  <h1 class="wow animated fadeInLeft"id="two">T12 Ballast</h1>
</div>

<div class="productsearcher51 wow animated fadeInUp">
<a href="helvarla.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/switchstart/la.png" alt="helvar la"/></a>
</div>

<div class="productsearcher512 wow animated fadeInUp">
<a href="helvarld.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/Control Gear/switchstart/ld.png" alt="helvar ld"/></a>
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