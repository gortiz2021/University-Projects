<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include 'db.php';
session_start();

if(isset($_POST["submit"]))
{
	
	$search = $_POST["search"];
	if(!empty($search)){

	
	if(isset($_SESSION["username"]) == true){
		$uid = $_SESSION["id"];
		echo $uid;
		echo $search;

		$sql = "SELECT id, search FROM test_search WHERE id ='$uid'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			echo "heloo";
			$d2 = $result->fetch_array();
			if($d2['search'] == $search){
				echo "exist";
			}
			else{
				echo "something";

			$sql = "INSERT INTO test_search(id, search) VALUES ('$uid', '$search')";
				if(mysqli_query($conn, $sql)){
					echo "success";
				}
				else{
					echo "failed";
				}
			}
		}
		else{
				$sql = "INSERT INTO test_search(id, search) VALUES ('$uid', '$search')";
				if(mysqli_query($conn, $sql)){
					echo "success";
				}
				else{
					echo "failed";
				}

		}
	}
}
	else{
	echo"Please enter the search item";
	}
}



?>



<html>
	<head>Test</head>
	<body>
		<form method="POST">
		<input type="search" name="search">
		<input type="submit" name="submit" value="add">

		</form>
	</body>
</html>

