<?php 
	session_start(); 
?>
<?php
	
	include 'connect.php';
	$username = $_POST['username'];
	$sql = "INSERT INTO user(username,status,wallettotal,checkproduct)
	VALUES ('$username','0','0','0')"; 
	mysqli_query($con,$sql) or die (mysqli_error($con));
	$userid = mysqli_insert_id($con);



	$sql1 = "SELECT * FROM user
			WHERE userid = ('$userid')
			"; 		
		$query = mysqli_query($con, $sql1);
		$objResult = mysqli_fetch_array($query);
		// print_r($objResult);
		if(!$objResult)
		{
			
			header("location:error.php");	
		}
		else
		{
			$_SESSION["userid"] = $objResult["userid"];
			$_SESSION["username"] = $objResult["username"];

			session_write_close();
			
			if($objResult["status"] == "0")
			{
				header("location:home.php");
			}
			else
			{
				header("location:index.php");
			}

		}

	mysqli_close($con);
?>
