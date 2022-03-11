<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

 include 'db.php';

 if (isset($_POST['submit'])) {
    # code...

$uname = $_POST["uname"];
$uemail = $_POST["uemail"];
$upassword = $_POST["upassword"];


$sql = "SELECT uemail FROM user Where uemail='$uemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<script>alert("Email is already registered. Please give valid Email or use Login page.")</script>' ;
}
else {
	//salting and hashing(hashing after adding random string in front of it)
 //creating a new variable to encrypt the password and store in it
$pass = password_hash($upassword, PASSWORD_DEFAULT);

$sql = "INSERT INTO user (uname, uemail, upassword)
VALUES ('$uname', '$uemail', '$pass');";
//giving the entered name, email and encrypted password to be stored in the database

if (mysqli_query($conn, $sql)) {
session_start();
$_SESSION["dname"] = "$dname";
  echo '<script>alert("Signed Up successfully");window.location.href = "Login.php";</script>' ;
   
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
}
?>


<html>
	<head>
		<style type="text/css">
		body{
				background-image: url("../Pictures/FresnoStateLibOutside.jpg");
				background-repeat:no-repeat;
				background-position: center center;
				background-attachment: fixed;
				background-size: cover;
				height: 100%;
				overflow: hidden;
			}
			.box{
				padding: 18px;
				width: 360px;
				height: 400px;
				background-color: white;
			/*	background-image: url("Image3.jpg");
				background-size: cover;
				background-position: center;*/
				position: relative;
				margin: 15% auto;
			}
			.Login-form{
				padding-top: 15px;
				width: 300px;
				margin: 40px auto;
			}
			.input-text{
				width: 100%;
				padding: 10px 0;
				margin: 5px;
				border-top: 0;
				border-left: 0;
				border-right: 0;
				border-bottom: 2px solid black;
				background: transparent;
			}
			.heading{
				text-align: center;
				color:black;
			}
			.Signup-submit{
				display: inline-block;
				font-weight: 600;
				font-size: 12;
				cursor: pointer;
				padding: 2.5%;
				color: black;
			}
		</style>
	</head>

	<body>
		<div class="Signup-back">
			<div class="box">
				<div class="heading">
					<h2>Welcome...</h2>
					<h4>Please sign up</h4>
				</div>
				<form class="Signup-form" action="#" method="POST">
					<input type="text" name="uname" class="input-text" placeholder="Enter Name" required>
					<input type="email" name="uemail" class="input-text" placeholder="Enter Email" required>
					<input type="password" name="upassword" class="input-text" placeholder="Enter Password" required>
					<input type="submit" name="submit" class="Signup-submit" value="Sign Up">
			</form>
			<a href="reset-password.php">Forgot Password?</a>
		</div>
	</div>
	</body>
</html>
