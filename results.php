<?php
   $pageTitle = 'Results Page';
   $page = 'results page';
   include 'elements/header.php';

   ?>

<body>
	<?php 
  include 'elements/nav.php';
  ?>



<div class="webbannerbigp">
  <img src="images/blueting.png" alt="webbanner"/>
  <h1 class="animated fadeInLeft">Search<br /> Results</h1>
  <p class="animated fadeInLeft">Call us: 08448 879000<br /><br />Fax us: &nbsp;08448 879003<br /><br />Email: &nbsp;&nbsp;sales@northgatelighting.com</p>
</div>

<section style=''>
<?php

mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("searchting_search") or die(mysql_error());

$clean = mysql_real_escape_string($_GET['search']);

if($clean.length < 0) {

}

$hello = mysql_query("SELECT * FROM items WHERE title like '%$clean%'") or die(mysql_error());
if (mysql_num_rows($hello) >=1){
  echo '<ol>';
  while($i = mysql_fetch_array($hello)) {
    echo '<li><a href="'.$i['url'].'" class="resulttext">'.$i['title'].'</a></li>';
  }
  echo '</ol>';
}
else {
  echo "Unfortunately no results have been found";
}


?>
</section>

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