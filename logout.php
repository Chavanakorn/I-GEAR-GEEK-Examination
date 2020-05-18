<?php 
session_start(); 
?>
<?php
	include 'connect.php';
	$logout = $_GET['logout'];
	$userid = $_SESSION['userid'];
	$sql = "DELETE FROM user WHERE userid = $userid";
	mysqli_query($con,$sql)	or die (mysqli_error($con));
		mysqli_close($con);	
?>
<script type="text/javascript">
	window.location="index.php"
</script>
<?php 
session_destroy();
?>