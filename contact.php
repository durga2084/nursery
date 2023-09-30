<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Contact Us</title>
	<style type="text/css">
				.form {
			width: 500px;
			margin: 5%;
			background-color: lightblue;
			padding: 3%;
			border-radius: 17px;
		}
		input[type=text] {
			width: 400px;
			height: 40px;
			border-radius: 18px ;
			border: 2px black;
			padding: 3%;
		}
		#message {
			width: 400px;
			height: 100px;
			border-radius: 18px;
			border: skyblue;
			padding: 3%;
		}
		#submit {
			width: 150px;
			height: 40px;
			background-color: #3396FF;
			border-radius: 20px;
		}


		span {
			color: red;
		}
		.success {
			color: green;
		}
	</style>
</head>
<body>
	<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$database	= "nursery";

	  $conn = new mysqli($servername,$username,$password,$database);

 	 if ($conn->connect_error) {
  		die ("connection failed: ".$conn->connect_error);
	  } else {
 	 	//echo "connection success";
  	}
	?>

	<?php
	$nameerror = $emailerror = $phoneerror = "";
	$name = $email = $phone = "";
	$success = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	if (!preg_match("/^[a-zA-Z ]{3,30}$/", $_POST["name"])) {
			$nameerror = "Please Enter a Valid Name";
		} else {
			$name = $_POST["name"];
		}
		if (empty($_POST["email"])) {
		$emailerror = "Email is Required";
		} else {
		if (!preg_match("/^[a-z0-9]+[@gmail.com]{5,30}$/", $_POST["email"])) {
			$emailerror = "Invalid Email";
		} else {
			$email = $_POST["email"];
			}
		}
		if (!preg_match("/^[0-9]{10}$/", $_POST["phone"])) {
		$phoneerror = "Please enter a Valid Phone Number";
		} else {
		$phone = $_POST["phone"];
		}
	$checkemail = "SELECT * FROM `userinfo` WHERE email = '$email'";
	$result = mysqli_query($conn,$checkemail);
	$count = mysqli_num_rows($result);
	if ($count>0) {
		$emailerror = "Email is already exist, Try another";
	} else {
		if (($name != NULL) && ($email != NULL) && ($phone != NULL)) {
			$sql = "INSERT INTO `userinfo`(`id`, `name`, `email`, `phone`, `message`) VALUES(NULL, '".$_POST['name']."', '".$_POST['email']."', 
				'".$_POST['phone']."', '".$_POST['message']."')";

				if (mysqli_query($conn, $sql)) {
					$success = "Your Request submitted Successfully";
				} else {
					echo "failed";
				}
			}
	}

	} 

	?>

	<?php include 'header.php';?>

	<h2>Contact Us</h2>


	<form action="" method="post" class="form">
		<div>Name:</div>
		<input type="text" name="name" id="name"><br>
		<span><?php echo $nameerror;?></span><br>
		<div>Email:</div>
		<input type="text" name="email" id="email"><br>
		<span><?php echo $emailerror;?></span><br>
		<div>Phone:</div>
		<input type="text" name="phone" id="phone"><br>
		<span><?php echo $phoneerror;?></span><br>
		<div>Message:</div>
		<textarea name="message" id="message" placeholder="Message"></textarea><br>
		<input type="submit" name="submit" id="submit"><br>
		<span class="success"><?php echo $success;?></span>
	</form>

	<?php include 'footer.php'; ?>
</body>
</html>