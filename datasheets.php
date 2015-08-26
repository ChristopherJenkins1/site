<?php
   $pageTitle = 'Northgate lighting - Datasheets - pdf ';
   $page = 'northgate lighting - datasheets - pdf';
   include 'elements/header.php';

   ?>

    <meta name="description" content="Northgate lighting datasheets"/> 
    <meta name="keywords" content="northgate lighting, leeds, wholesale, datasheet, pdf"/>

<body>

  <?php 
  include 'elements/nav.php';

  ?>

 <div class="webbannerpara">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft">Datasheets </h1>
  <p class="animated fadeInLeft">See below all our datasheets, If needed these can be personalised for your branch.<br />(Click pdf image to view and download files.)</p>
</div>



<div class="textbox animated fadeInRight" id="two">
<p> LED Corn Lamp: </p> <a href="datasheets/cornlamp.pdf" target="_blank"><img src="images/pdf.png" alt="cornlightpdf" /></a><br /><br />

<p> LED Downlight:</p><a href="datasheets/downlight.pdf" target="_blank"><img src="images/pdf.png" alt="downlightpdf" /></a><br /><br />

<p> LED Highbay: </p><a href="datasheets/highbay.pdf" target="_blank"><img src="images/pdf.png" alt="highbaypdf" /></a><br /><br />

<p> LED Panel light: </p><a href="datasheets/panellight.pdf" target="_blank"><img src="images/pdf.png" alt="panellightpdf" /></a><br /><br />

<p> LED Round panel light:</p><a href="datasheets/roundpanellight.pdf" target="_blank"><img src="images/pdf.png" alt="roundpanellightpdf" /></a><br /><br />

<p> LED Rectangle panel light:</p><a href="datasheets/rectanglepanel.pdf" target="_blank"><img src="images/pdf.png" alt="rectanglepanellightpdf" /></a><br /><br />

<p> Warranty Certificate:</p><a href="datasheets/warranty.pdf" target="_blank"><img src="images/pdf.png" alt="warrantypdf" /></a><br /><br />

<p>  </p>

</div>

<div class="joinbutton animated flipInX">
<a href="#two"><img src="images/buttons/databutton.png" alt="button"/></a>
 </div>


<div class="upbutton">
<a href="#top"><img src="images/buttons/topbutton.png" alt="button"/></a>
 </div>


<div class="webbannerhome4">
  <img src="images/blueting2.png" alt="webbanner"/>
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