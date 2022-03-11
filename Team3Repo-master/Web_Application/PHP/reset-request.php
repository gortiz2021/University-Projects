<?php 
 
 if (isset($_POST["reset-submit"])){ //if the user has submitted the request for password correctly 
 	$authenticator = bin2hex(random_bytes(8));  //having a 8 random bytes and coverted to hex from binary
 	$token = random_bytes(32); //to check if it is correct user

 	$url = "http://localhost:8080/Web_Application/PHP/create-password.php?authenticator=" . $authenticator . "&validator=" . bin2hex($token); //creating the url for the password reset

 	$expire = date("U") + 600; //to add 600 seconds to current time in order to expire the OTP

 	require 'db.php';

 	$userEmail = $_POST["uemail"];

 	//delete existing token for the same user
 	$sql = "DELETE FROM passReset WHERE passResetEmail=?";
 	$statement = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($statement,$sql)){//if the statement is incorrect
 		echo "Error Occured1";
 		exit();
 	}
 	else{
 		mysqli_stmt_bind_param($statement, "s", $userEmail);
 		mysqli_stmt_execute($statement);
 	}

 	//create the token inside the database
 	$sql = "INSERT INFO passReset(passResetEmail,passResetAuthenticator,passResetToken, passResetExpire) VALUES (?, ?, ?, ?);";
 	$statement = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($statement,$sql)){//if the statement is incorrect
 		echo "Error Occured2";
 		exit();
 	}
 	else{
 		$hashedToken = password_hash($token, PASSWORD_DEFAULT); #hashing the password for security
 		mysqli_stmt_bind_param($statement, "ssss", $userEmail, $authenticator, $hashedToken, $expire);
 		mysqli_stmt_execute($statement);
 	}

 	mysqli_stmt_close($statement); //close the statement
 	mysqli_close($conn); //close connection

 	$to = $userEmail;

 	$subject = "Reset your password";

 	$message = '<p>The link to reset password is below, you can ignore if you did not make the request.</p>';
 	$message .= '<p>Link to reset password</p>';
 	$message .= '<a href = "' .$url . '">' .$url . '</a></p>';

 	$headers = "From: PWS<pws@gmail.com\r\n>";
 	$headers .= "Reply-To: Damanpreet@mail.fresnostate.edu\r\n";
 	$headers .= "Content-type: text/html\r\n";

 	mail($to, $subject, $message, $headers);

 	header("Location: reset-password.php?reset=success");
 
 }
 else{
 	header("Location: index.php"); //if the user didn't submit the request correctly take user to the index page
 }
 ?>