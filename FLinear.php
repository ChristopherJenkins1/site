<?php
   $pageTitle = 'Linear Flourescent';
   $page = 'Linear Flourescent';
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
  <h1 class="animated fadeInLeft">Fluorescent<br />Tubes</h1>
  <p class="animated fadeInLeft">We stock a wide range of T8/T5 tubes and even stock T12. We have commanded some great <br />prices meaning we are one of the best priced distributors out there. </p>
</div>

<div class="productsearcher7 animated fadeInUp">
<a href="lineart5.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/flourescent/t5.png" alt="t5"/></a>
</div>

<div class="productsearcher7 animated fadeInUp">
<a href="lineart8.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/flourescent/t8.png" alt="t8"/></a>
</div>

<div class="productsearcher7 animated fadeInUp">
<a href="lineart12.php"><img class="button hvr-grow-shadow" src ="images/Product Searcher/flourescent/t12.png" alt="t12"/></a>
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