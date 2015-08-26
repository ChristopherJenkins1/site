<?php
   $pageTitle = 'The Team';
   $page = 'The Team';
   include 'elements/header.php';

   ?>

    <meta name="description" content="Northgate Leeds wholesale offical distributor team"/> 
    <meta name="keywords" content="northgate, leeds, wholesale, team, sales, buisness development"/>

<body>

  <?php 
  include 'elements/nav.php';

  ?>


     <div class="webbannerpara">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft"> Meet The Team</h1>
  <p class="animated fadeInLeft">See below our Management, Business Development Team and our sales<br /> team who you will speak to on a day to day basis. </p>
</div>

<div class="team animated fadeInUp">
<img src ="images/The Team/ade.png" alt="ade"/>
</div>

<div class="team animated fadeInUp">
<img src ="images/The Team/julia.png" alt="julia"/>
</div>

<div class="team animated fadeInUp">
<img src ="images/The Team/amy.png" alt="amy"/>
</div>

<div class="team01 animated fadeInUp">
<img src ="images/The Team/richard.png" alt="richard"/>
</div>

<div class="businessbutton animated flipInX">
<a href="#two"><img src="images/buttons/BButton.png" alt="button"/></a>
 </div>
    
<div class="managementbutton">
<a href="#top"><img src="images/buttons/MButton.png" alt="button"/></a>
 </div>

<div class="webbannerteam1">
  <h1 class="wow animated fadeInLeft"id="two">Business<br />Development</h1>
 </div>


 <div class= "team2 wow animated fadeInUp">
  <img src ="images/The Team/john.png" alt="john"/>
  </div>
  <div class= "team2 wow animated fadeInUp">
  <img src ="images/The Team/lee.png" alt="lee"/>
  </div>
  <div class= "team2 wow animated fadeInUp">
  <img src ="images/The Team/luke.png" alt="luke"/>
  </div>
   <div class= "team21 wow animated fadeInUp">
  <img src ="images/The Team/chris.png" alt="chris"/>
  </div>

<div class="salesbutton">
<a href="#three"><img src="images/buttons/SButton.png" alt="button"/></a>
 </div>

<div class="businessupbutton">
<a href="#two"><img src="images/buttons/BDButton.png" alt="button"/></a>
 </div>


<div class="webbannerteam2">
  <h1 class="wow animated fadeInLeft"id="three">The Sales<br />Team</h1>
</div>
 
 
 <div class= "team3 wow animated fadeInUp">
  <img src ="images/The Team/james.png" alt="james"/>
  </div>
  <div class= "team3 wow animated fadeInUp">
  <img src ="images/The Team/danny.png" alt="danny"/>
  </div>
  <div class= "team3 wow animated fadeInUp">
  <img src ="images/The Team/lisa.png" alt="lisa"/>
  </div>
  <div class= "team4 wow animated fadeInUp">
  <img src ="images/The Team/paul.png" alt="paul"/>
  </div>
   <div class= "team4 wow animated fadeInUp">
  <img src ="images/The Team/jess.png" alt="jess"/>
  </div>
   <div class= "team4 wow animated fadeInUp">
  <img src ="images/The Team/kristian.png" alt="kristian"/>
  </div>
   <div class= "team4 wow animated fadeInUp">
  <img src ="images/The Team/chelsea.png" alt="chelsea"/>
  </div>
  <div class= "team4 wow animated fadeInUp">
  <img src ="images/The Team/ed.png" alt="ed"/>
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