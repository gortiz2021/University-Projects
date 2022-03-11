<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//including the db.php in order for the login to connect with the database
 session_start();
 include 'db.php';

//if someone tries to login by clicking on submit
if (isset($_POST['submit'])) {
    # code...
//we create two variables for the username and the password
$uname = $_POST["uname"];
$upassword = $_POST["upassword"];

//sql query to check if the username and password matches with the one's stored in the database.
$sql = "SELECT id, uname, upassword FROM user Where uname='$uname'";
//storing the query results into result 
$result = $conn->query($sql);

//if the result has something in it 
if ($result->num_rows > 0) {
  // output data of each row
	$d1 = $result->fetch_array();
	if(password_verify($upassword, $d1['upassword'])){
		$_SESSION["id"] = $d1['id'];
		$_SESSION["username"] = $uname;
    header("Location: search-test.php");
    //After login the user will be directed to the Navigation.php
/*  while($row = $result->fetch_assoc()) {
  	$_SESSION["username"] = $uname;
    //start the session for a particular user 
  }*/}
} else {
  //If the username and password doesn't exist, gives alert of wrong username or password 
  echo '<script>alert("Wrong Username or Password")</script>' ;
}

}
?>



<html>
	<head>
		<style type="text/css">
			/*inserting background picture for body*/
			body{
				background-image: url("../Pictures/FresnoStateLibOutside.jpg");
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center center;
				background-attachment: fixed;
				
			}
			/*creating a box shape in the center of the screen*/
			.box{
				padding: 10px;
				width: 360px;
				height: 400px;
				background: white;
				position: relative;
				margin: 15% auto;
			}
			/*styling the login form relative to the box*/
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
				border-bottom: 1px solid black;
				background: transparent;
			}
			
			.heading{
				text-align: center;
			}
			

		</style>
	</head>
	<body>
		<div class="Login-back">
			<div class="box">
				<div class="heading">
				<h2>Please log into your account</h2></div>
				<form class="Login-form" action="#" method="POST">
					<input type="text" name="uname" class="input-text" placeholder="Enter Username" required>
					<input type="password" name="upassword" class="input-text" placeholder="Enter Password" required>
					<input type="submit" name="submit" value="Log In">
				</form>
			</div>
		</div>
	</body>
</html>