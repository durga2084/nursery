<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>footer</title>
	<style type="text/css">
		.footer {
		   bottom: 0;
		   width: 100%;
		   background-color: #877B7B;
		   color: white;
		   padding-left: 5%;
		   padding-right: 3%;
		   padding-bottom: 2%;
		   padding-top: 2%;

		}
		.details {
			padding: center;
			color: black;
		}
		.copyright {
			color: black;
		}
	</style>
</head>
<body>
	<div class="footer">
	<div align="left" class="links">
		
			<h5><a href="index.php" >Home</a></h5>
			<h5><a href="about.php">About</a></h5>
			<h5><a href="service.php">Sevices</a></h5>
			<h5><a href="contact.php">Contact</a></h5>
	</div>

	<div align="center" class="details">
		Phone: +91 98765 43210<br>
		Email: infonursery@gmail.com

	</div>

	<div align="right" class="copyright">
	@copyright <?php echo date('Y'); ?>
	</div>
</div>

</body>
</html>