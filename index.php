<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<title></title>
</head>
<body>
  <?php 
  include 'header.php';

  ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pn1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/pn2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/pn3.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/pn4.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div align="center">
		<h2 class="text-center">About</h2>
		<p class="about-text">A nursery is a place where plants are propagated and grown to a desired size. In a word, a nursery is a centre of seedling production where seedlings are produced and taken care of until transplantation in the main field. Mostly the plants concerned are for gardening, forestry, or conservation biology, rather than agriculture. They include retail nurseries, which sell to the general public; wholesale nurseries, which sell only to businesses such as other nurseries and commercial gardeners; and private nurseries, which supply the needs of institutions or private estates. Some will also work in plant breeding.<br>
      <a href="about.php">More......</a></p></div>
</section>

<section class="my-6">
	<div>
		<h2 align="center">Our Sevices</h2><br>
	</div>
	<div class="row" align="center">
	<div class="card" style="width: 400px;">
  <img src="images/simg4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  	<h4>Flower Plants</h4>
    <p class="card-text">Flowering Plants are one of the prettiest plant categories which everyone wants to have in their house. But maintaining plants that bear flowers is not an easy job. Thus, here we will provide some easy tips and tricks which will help you to maintain them and your house will be blooming like anything.</p>
  </div>
</div>
<div class="card" style="width: 400px;">
  <img src="images/simg2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  	<h4>Fruit Plants</h4>
    <p class="card-text">Who doesn’t love a kitchen garden? A little space where you nurture your favourite plants, which later provides you with the most authentic and healthy fruits and ingredients to add to your daily diet. But do you know that you grow Fruit Plants in your backyard too? Let us tell you about it.</p>
  </div>
</div>
<div class="card" style="width: 400px;">
  <img src="images/simg5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  	<h4>Ornamental Plants</h4>
    <p class="card-text">The ornamental plants are nature’s beauty and act as sample displays, decorative cut-flowers or for landscaping in and around the garden area and courtyard.</p>
  </div>
</div>
</div><br>
<div align="center">
<marquee><a href="service.php">More about our services</a></marquee>
</div>
</section><br><br>

<?php include 'footer.php'; ?>

</body>
</html>