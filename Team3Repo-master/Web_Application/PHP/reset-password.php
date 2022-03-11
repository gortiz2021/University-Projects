<html>
<head>
	<style type="text/css">
		.section-default{
			padding: 18px;
			width: 360px;
			height: 400px;
			background-color: white;
			position: relative;
			margin: 15% auto;
			}
		body{
			background-image: url("../Pictures/FresnoStateLibOutside.jpg");
			background-repeat:no-repeat;
			background-position: center center;
			background-attachment: fixed;
			}
		.reset-password{
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
			color:black;
		}
	</style>
</head>
<main>
	<div class="wrapper-main">
		<section class="section-default">
		<div class="heading">
			<h1>Reset Password</h1>
			<h4>Please enter your email and you will get a link to reset your password.</h4>
		</div>
			<form class="reset-password" action="reset-request.php" method="POST">
				<input type="email" class="input-text" name="uemail" placeholder="Enter email">
				<input action="reset-request.php" type="submit" name="reset-submit" value="Reset password">
			</form>
			<?php
				if (isset($GET["reset"])){
					if($_GET["reset"] == "success"){
						echo'<p class="signupsuccess">Email sent successfully</p>';
					}
				}
			?>
		</section>
	</div>
</main>
</html>