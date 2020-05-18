<?php 
session_start(); 
?>
<?php
		include 'connect.php';
		$coin = $_GET['coin'];
		$userid = $_SESSION['userid'];
// echo $userid;
		// echo $coin;
		$sql = "UPDATE user SET wallettotal = wallettotal +'$coin'
		 WHERE user.userid = $userid";

		mysqli_query($con,$sql) or die(mysql_error($con));
		mysqli_close($con);

?>	

<script type="text/javascript">
	window.location="home.php";
</script> 
