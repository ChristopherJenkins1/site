<?php
   $pageTitle = 'Philips PL-C/T ';
   $page = 'Philips PL-C/T';
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
  <h1 class="animated fadeInLeft"> Philips <br />PL-C/T </h1>
</div>

<div class="indproduct animated fadeInUp">
  <ul id="portfolio" class="clearfix">
     <a href="images/Product Searcher/Control Gear/hfnd/compact/pl-c/philipsb.png" title="Philips PL-C/T">
<img src ="images/Product Searcher/Control Gear/hfnd/compact/pl-c/philipsp.png" alt="product picture"/></a>
</ul>
</div>

<table class="chart animated fadeInRight">
  <tr>
    <th class="tg-0ord">Product Code:</th>
    <th class="tg-0ord">Description:</th>
    <th class="tg-0ord">Brand:</th>
    <th class="tg-0ord">Runs:</th>
  </tr>
  <tr>
    <td class="tg-0ord">HFCN - 118P</td>
    <td class="tg-0ord">1x18w - HF-P - HFND</td>
    <td class="tg-0ord">Philips</td>
    <td class="tg-0ord">1x18w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HFCN - 218P</td>
    <td class="tg-0ord">2x18w - HF-P - HFND</td>
    <td class="tg-0ord">Philips</td>
    <td class="tg-0ord">2x18w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HFMN - 122 - 42P</td>
    <td class="tg-0ord">1x22w / 42 W - HF-P - HFND</td>
    <td class="tg-0ord">Philips</td>
    <td class="tg-0ord">1x26w / 1x32w / 1x42w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HFMN - 222 - 42P</td>
    <td class="tg-0ord">2x22w / 42 W - HF-P - HFND</td>
    <td class="tg-0ord">Philips</td>
    <td class="tg-0ord">2x26w / 2x32w / 2x42w</td>
  </tr>
</table>

<div class="mobchart animated fadeInUp">
<img src ="images/Product Searcher/Control Gear/hfnd/compact/pl-c/philipsmobchart.png" alt="chart"/>
</div>

<div class="lampsuggestion animated flipInX">
<a href="#two"><img src="images/buttons/LSuggestion.png" alt="button"/></a>
 </div>
    
<div class="ballastsuggestion">
<a href="#top"><img src="images/buttons/BSuggestion.png" alt="button"/></a>
 </div>

<div class="webbannerjux7">
  <h1 class="wow animated fadeInLeft"id="two">PL-C/T &<br />PLS </h1>
</div>

<div class="productsearcher81 animated wow fadeInUp">
<a href="plcdoubleturn.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/flourescent/compact/plc.png" alt="plc"/></a>
</div>

<div class="productsearcher81 animated wow fadeInUp">
<a href="plttripleturn.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/flourescent/compact/plt.png" alt="plt"/></a>
</div>

<div class="productsearcher812 animated wow fadeInUp">
<a href="pls.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/flourescent/compact/pls.png" alt="pls"/></a>
</div>

<div class="fadeinz">
  <img id="f3" src="images/advert/ad1.png" alt="ad1"/>
    <img id="f2" src="images/advert/ad2.png" alt="ad2"/>
    <img id="f1" src="images/advert/ad3.png" alt="ad3"/>
</div>
 
<div class="moreinfo6 wow animated flipInX">
<a a href="datasheets/philipsplc.pdf" target="_blank"><img class="button hvr-grow-shadow" src ="images/buttons/moreinfo.png" alt="more info button"/></a>
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