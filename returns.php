<?php
   $pageTitle = 'Northgate Returns';
   $page = 'Northgate Returns';
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
  <h1 class="animated fadeInLeft">Returns To Northgate<br /> Lighting </h1>
</div>



<div class="textbox animated fadeInRight">
<p><strong>Our Returns Policy</strong> </p>

<p>Northgate will...</p>

<p><strong>1.0</strong> Where products supplied are proven faulty, issue 100% credit note.
All goods will be tested on return and the customer advised.
Should the products be found to be subsequently working. The debit note will be rejected.
The goods will then be made available for return to the customer.</p>

<p><strong>2.0</strong> Where goods were supplied incorrectly to the customer's order specification, will issue 100% credit.</p>

<p><strong>3.0</strong> Where goods are supplied correctly to a customer order, Northgate will not accept a return unless:</p>

<p><strong>3.1</strong> For items that are 'Normally Stocked' by Northgate Lighting Ltd <br /> 
i) Apply a £9.50 handling charge to recover costs of packing, dispatching, then receiving and re-stocking.<br />
ii) The cost of returning the goods is the responsibility of the customer.</p>

<p><strong>3.2</strong> For items that are not 'Normally Stocked' by Northgate Lighting Ltd.<br />
i) Any return is at our discretion and may not be accepted.<br />
ii) A return/handling fee from our supplier may apply.<br />
iii) In the event our supplier will refuses to take these products, Northgate Lighting will also refuse.</p>

<p><strong>3.3</strong> For special ordered or manufactured goods, a none returnable order form must be completed before the order is processed. These items will not be accepted back unless faulty.</p>

<p><strong>3.4</strong> Northgate Lighting Ltd., will not accept correctly supplied goods back over 12 weeks from original invoice date.</p>

</div>

<div class="joinbutton animated flipInX">
<a href="#two"><img src="images/buttons/SRButton.png" alt="button"/></a>
 </div>

<div class="returnlink animated fadeInUp" id="two">
<a href="http://returns.northgatelighting.com/" onclick="target='blank'"><img class="button hvr-grow-shadow" src ="images/buttons/return.png" alt="return link"/></a>
</div>

<div class="webbannerhome2">
  <img src="images/blueting2.png" alt="webbanner"/>
</div>


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