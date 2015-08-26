<?php
   $pageTitle = 'Venture Son MH';
   $page = 'Venture Son MH';
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
  <h1 class="animated fadeInLeft"> Venture <br />Son MH</h1>
</div>

<div class="indproduct animated fadeInUp">
  <ul id="portfolio" class="clearfix">
     <a href="images/Product Searcher/Control Gear/sonmh/ventureb.png" title="Venture Son MH">
<img src ="images/Product Searcher/Control Gear/sonmh/venturep.png" alt="product picture"/></a>
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
    <td class="tg-0ord">HIDS - 0070H</td>
    <td class="tg-0ord">70w Son / MH</td>
    <td class="tg-0ord">Venture (HSA07223221)</td>
    <td class="tg-0ord">1x70w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HIDS - 0010H</td>
    <td class="tg-0ord">100w Son / MH</td>
    <td class="tg-0ord">Venture (HSA10223221)</td>
    <td class="tg-0ord">1x100w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HIDS - 0150H</td>
    <td class="tg-0ord">150w Son / MH</td>
    <td class="tg-0ord">Venture (HSA15223221)</td>
    <td class="tg-0ord">1x150w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HIDS - 0250H</td>
    <td class="tg-0ord">250w Son / MH</td>
    <td class="tg-0ord">Venture (HSA25223221)</td>
    <td class="tg-0ord">1x250w</td>
  </tr>
  <tr>
    <td class="tg-0ord">HIDS - 0400H</td>
    <td class="tg-0ord">400w Son / MH</td>
    <td class="tg-0ord">Venture (HSA40223221)</td>
    <td class="tg-0ord">1x400w</td>
  </tr>
</table>

<div class="mobchart animated fadeInUp">
<img src ="images/Product Searcher/Control Gear/sonmh/venturemobchart.png" alt="chart"/>
</div>

<div class="lampsuggestion animated flipInX">
<a href="#two"><img src="images/buttons/LSuggestion.png" alt="button"/></a>
 </div>
    
<div class="ballastsuggestion">
<a href="#top"><img src="images/buttons/BSuggestion.png" alt="button"/></a>
 </div>

<div class="webbannerjux">
  <h1 class="wow animated fadeInLeft"id="two">Suggestion Here</h1>
</div>


<div class="webbannerbottom">
  <img src="images/blueting2.png" alt="webbanner"/>
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