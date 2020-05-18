<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<style>
	.one {
		border-radius: 10px;
	}
	.two {
		border-radius: 25px;
	}
	.three {
		width: 84px;
		height: 84px;
		border-radius: 50px;
		background: #FFCB3A;
	}
	.text {
		font-family: Angsana New;
		font-weight: bold;
		font-size: 36px;

		
		color: #941818;
	}
</style>
<body>
	<div class="container">
		<br><br>
  		<div class="row">
	    	<div class="col-sm-2"></div>
	    	<div class="col-sm-8 one" style="background-color:#941818 ;">
	    		
			
	    		<br><br><br><div align="center"><img src="img/1.png" width="20%"></div>
				<div class="row">
			    	<div class="col-sm-3"></div>
			    	<div class="col-sm-6 two" style="background-color:#fff ;" >
			    		<br><br>
			    			<p class="text" align="center">
			    				หยอดเงินตู้น้ำ
			    			</p>
			    			<form action="login.php" method="post">
			    			<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text">ชื่อ</span>
							  </div>
							  <input type="text" class="form-control" name="username"  required  autocomplete="off">

							</div>
							
							<div align="center">
							  <button type="submit" class="btn btn-warning three">
							  	<font color="#FFE69C"><h2><b>$</b></h2></font>
							  </button>

							</div>
							</form>
			    		<br><br>
			    	</div>
			    	<div class="col-sm-3 "></div>
		  		</div>
		  		<br><br><br><br><br><br><br><br>
	    	</div>
	    	<div class="col-sm-2 "></div>
  		</div>
	</div>

</body>
</html>