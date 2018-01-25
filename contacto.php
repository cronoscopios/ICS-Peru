<!doctype html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ICS PERÚ - Contacto</title>
  <link rel="icon" href="./img/favicon32x32.png">

<?php include 'inc/head_common.php';?>

<!-- Resource style -->
<link rel="stylesheet" type="text/css" href="css/main.css"/> 
	

</head>
<body>
	<section id="section1" class="cd-section_contactoPage">

  <?php include 'inc/navbar.php';?> <!--Main NavBar -->
  <?php include 'inc/contacto_page.php';?>


<section id="section7" class="cd-section">
<div class="wrapper">
  <div class="layer3"></div>
  <div id="map">
    <img src="https://maps.googleapis.com/maps/api/staticmap?
center=-12.118955003409948,-77.03015599999998
&zoom=15
&size=600x300
&maptype=roadmap
&markers=color:green%7Clabel:ICS-Perú%7C-12.118955003409948,-77.03015599999998
&key=AIzaSyCG4LAiWclc8wYJiol3phGRAlwqZzhcTwk"/>
  </div>

  <div class="content">
    <h4 class="py-1 text-left display-33 text-light">Dirección</h4>
    <hr class="style4" style="float:left !important; display:flex;">
    <address class="lead text-left text-light my-3">             
      Av. José Pardo 190, Of. 4<br>
      Miraflores. Lima-Perú.
    </address>
  </div>
</div>
</section><!-- cd-section -->


<?php include 'inc/footer.php';?> 
<?php include 'inc/footer_common.php';?>


</body>
</html>