<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>REFUND</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
		background: #28A745;
	}
	.four {
		width: 84px;
		height: 84px;
		border-radius: 50px;
		background: #941818;
	}
	.text {
		font-family: Angsana New;
		font-weight: bold;
		font-size: 36px;

		
		color: #941818;
	}
	.img {
		width: 160px;
		height: 120px;
	}

	.button {
		width: 140px;
		height: 40px;
		border-radius: 20px;
	}
</style>
<body>
	<?php 
		if(empty($_SESSION['userid'])){
			header("location:index.php");
		}else{
			echo  "";
			// echo  "สวัสดี คุณ ".$_SESSION['firstname'];
				}
						
	?>
	<?php
			include 'connect.php';
			$sql = "SELECT * FROM user where user.userid = $_SESSION[userid] ";
			$result = mysqli_query($con,$sql);
			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			if($row["wallettotal"]  >= "15"){
				$PepsiMax = "<font color='#fff'><h4><a  class='btn btn-success button'>Pepsi Max</a></h4></font>";	
				}
			else{
				$PepsiMax =  "<font color='#fff'><h4><button type='button' class='btn btn-danger button '>Pepsi Max</button></h4></font>";	}


			if($row["wallettotal"]  >= "20"){
				$PepsiDiet = "<font color='#fff'><h4><a class='btn btn-success button'>Pepsi Diet</a></h4></font>";	
				}
			else{
				$PepsiDiet =  "<font color='#fff'><h4><button type='button' class='btn btn-danger button '>Pepsi Diet</button></h4></font>";}	


			if($row["wallettotal"] >= "15"){
				$Coke = "<font color='#fff'><h4><a class='btn btn-success button'>Coke</a></h4></font>";	
				}
			else{
				$Coke =  "<font color='#fff'><h4><button type='button' class='btn btn-danger button '>Coke</button></h4></font>";	}


			if($row["wallettotal"]  >= "20"){
				$CokeVanillaS = "<font color='#fff'><h4><a  class='btn btn-success button'>Coke Vanilla (S)</a></h4></font>";	
				}
			else{
				$CokeVanillaS =  "<font color='#fff'><h4><button type='button' class='btn btn-danger button '>Coke Vanilla (S)</button></h4></font>";	}
			

			if($row["wallettotal"]  >= "25"){
				$CokeVanillaL = "<font color='#fff'><h4><a  class='btn btn-success button'>Coke Vanilla (L)</a></h4></font>";	
				}
			else{
				$CokeVanillaL =  "<font color='#fff'><h4><button type='button' class='btn btn-danger button '>Coke Vanilla (L)</button></h4></font>";	}


			if($row["wallettotal"] >= "15"){
				$MountainDew = "<font color='#fff'><h4><a  class='btn btn-success button'>Mountain Dew</a></h4></font>";	
				}
			else{
				$MountainDew =  "<font color='#fff'><h4><button type='button' class='btn btn-danger button '>Mountain Dew</button></h4></font>";	}






			if($row["wallettotal"]  >= "10"){
				$coin10 = "<a href='refundmoney.php?coin=10' class='btn btn three'>
					  		<font color='#fff'>
					  			<h2><b>10</b></h2>
					  		</font>
					  	</a>";	
				}
			else{
				$coin10 =  "<a class='btn btn four'>
					  		<font color='#000'>
					  			<h2><b>10</b></h2>
					  		</font>
					  	</a>";	}


			if($row["wallettotal"]  >= "5"){
				$coin5 = "<a href='refundmoney.php?coin=5' class='btn btn three'>
					  		<font color='#fff'>
					  			<h2><b>5</b></h2>
					  		</font>
					  	</a>";	
				}
			else{
				$coin5 =  "<a class='btn btn four'>
					  		<font color='#000'>
					  			<h2><b>5</b></h2>
					  		</font>
					  	</a>";}	


			if($row["wallettotal"] >= "2"){
				$coin2 = "<a href='refundmoney.php?coin=2' class='btn btn three'>
					  		<font color='#fff'>
					  			<h2><b>2</b></h2>
					  		</font>
					  	</a>";	
				}
			else{
				$coin2 =  "<a class='btn btn four'>
					  		<font color='#000'>
					  			<h2><b>2</b></h2>
					  		</font>
					  	</a>";	}


			if($row["wallettotal"]  >= "1"){
				$coin1 = "<a href='refundmoney.php?coin=1' class='btn btn three'>
					  		<font color='#fff'>
					  			<h2><b>1</b></h2>
					  		</font>
					  	</a>";	
				}
			else{
				$coin1 =  "<a class='btn btn four'>
					  		<font color='#000'>
					  			<h2><b>1</b></h2>
					  		</font>
					  	</a>";	}
			

		?>
	<div class="container">
		<br><br>
  		<div class="row">
	    	<div class="col-sm-2"></div>
	    	<div class="col-sm-8 one" style="background-color:#941818 ;"><br><br>
				<div class="row">
			    	<div class="col-sm-1"></div>
			    	<div class="col-sm-10 two" style="background-color:#F0D6D2 ;" >
			    		<br>
			    			<div class="row"  align="center">
						    	<div class="col-sm-4"><img src="https://i.imgur.com/VYJihfV.png" class="img" ></div>
						    	<div class="col-sm-4"><img src="https://i.imgur.com/VYJihfV.png"  class="img"></div>
						    	<div class="col-sm-4"><img src="https://i.imgur.com/Xe1Ivcu.png"  class="img"></div>
					  		</div>
					  		<br>
					  		<div class="row"  style="background-color:#454141 ;" align="center">
						    	<div class="col-sm-4"><font color="#fff"><h4>฿ 15</h4></font></div>
						    	<div class="col-sm-4"><font color="#fff"><h4>฿ 20</h4></font></div>
						    	<div class="col-sm-4"><font color="#fff"><h4>฿ 15</h4></font></div>
					  		</div><br>
					  		<div class="row" align="center">
						    	<div class="col-sm-4"><?php
								    				echo $PepsiMax;	
								    			?></div>
						    	<div class="col-sm-4"><?php
								    				echo $PepsiDiet;	
								    			?></div>
						    	<div class="col-sm-4"><?php
								    				echo $Coke;	
								    			?></div>
					  		</div>
					  		<br><br>
					  		<div class="row"  align="center">
						    	<div class="col-sm-4"><img src="https://i.imgur.com/Xe1Ivcu.png" class="img" ></div>
						    	<div class="col-sm-4"><img src="https://i.imgur.com/Xe1Ivcu.png"  class="img"></div>
						    	<div class="col-sm-4"><img src="https://i.imgur.com/FynmODM.jpg"  class="img"></div>
					  		</div>
					  		<br>
					  		<div class="row"  style="background-color:#454141 ;" align="center">
						    	<div class="col-sm-4"><font color="#fff"><h4>฿ 20</h4></font></div>
						    	<div class="col-sm-4"><font color="#fff"><h4>฿ 25</h4></font></div>
						    	<div class="col-sm-4"><font color="#fff"><h4>฿ 15</h4></font></div>
					  		</div><br>
					  		<div class="row" align="center">
						    	<div class="col-sm-4"><?php
								    				echo $CokeVanillaS;	
								    			?></div>
						    	<div class="col-sm-4"><?php
								    				echo $CokeVanillaL;	
								    			?></div>
						    	<div class="col-sm-4"><?php
								    				echo $MountainDew;	
								    			?></div>
					  		</div>
			    		<br><br>
			    			<div class="row" align="center">
						    	<div class="col-sm-4">
						    		<img src="img/QR.jpg" width="55%">
						    		<!-- <div class="input-group">
									  <textarea class="form-control" aria-label="With textarea"  disabled="disabled" ></textarea>
									</div> -->
								</div>
						    	<div class="col-sm-5"  style="background-color:#000 ;"><br>
						    		<div class="row" align="center">
								    	<div class="col-sm-1"  align="center"><font color="#fff"><B><h1>฿</h1></B></font></div>
								    	<div class="col-sm" align="center"><font color="#fff"><b>
											
								    		<h1>
								    			<?php
								    				echo $row["wallettotal"];	
								    			?>
								    		
								    		</h1></b></font></div>
							  		</div><br>
						    	</div>
						    	<div class="col-sm-3"><br>
						    		<a href='home.php' class='btn btn-success '><h4><b>Cancel</b></h4></a>
						    		
						    	</div>
					  		</div>

					  	<br><br>
					  		<div class="row" align="center">
					  			<div class="container">
					  				<?php
								    				echo $coin10;	
								    			?>
					  				<?php
								    				echo $coin5;	
								    			?>
									<?php
								    				echo $coin2;	
								    			?>
					  				<?php
								    				echo $coin1;	
								    			?>


							  		<!-- <button type="submit" class="btn btn-warning three">
							  			<font color="#C5802A"><h2><b>5</b></h2></font>
							  		</button>
							  		<button type="submit" class="btn btn-warning three">
							  			<font color="#C5802A"><h2><b>2</b></h2></font>
							  		</button>
							  		<button type="submit" class="btn btn-warning three">
							  			<font color="#C5802A"><h2><b>1</b></h2></font>
							  		</button> -->
							  	</div>
					  		</div>
					  	<br><br>
			    	</div>
			    	<div class="col-sm-1 "><a href="logout.php?logout=logout"><img src="img/off.png" width="100%"></a></div>
<!-- 			    	<button type="submit" class="btn" value="logout" name="logout"
							        style="background-color:#EEDED6; color:#A7545E;">Logout</button> -->
		  		</div>
	    	<br><br><br><br>
	    	</div>
	    	<div class="col-sm-2 "></div>
  		</div>
	</div>
<?php }
?>
<div class="modal" id="pay" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			 <div class="modal-header">
				<h5 class="modal-title"></h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
				</div>
					    	<div class="modal-body container" align="center">
						    	<label >
								    <h3><b>!!! คุณมีเหรียญไม่พอ  !!!</b></h3>

								</label>
								<br>
								<label>
									<br>
							       	<button type="button" class="btn btn-secondary" data-dismiss="modal">ตกลง</button>
							    </label>
							</div>
					</div>
		 </div>
	</div>

<script type="text/javascript">
	    $('.notpay').click(function(){
	      $('#pay').modal('show');
	      })
  </script>
</body>
</html>