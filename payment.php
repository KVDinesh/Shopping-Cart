<?php
session_start();

if(!isset($_SESSION["id"])){
	header("location:home.php");
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Store</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<style>
		table tr td{
			padding: 10px;
			
		}
		
	body{
			
		background-color: #eff1f4
	}
	
	</style>
</head>

<body>
<div class="masthead">
  <img src="bg.jpg" style="width:100%; height:100px;"/>
</div>
<div class="navbar navbar-default">
	<div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" id = "continue_shopping" href="home.php">E-Store</a>
	    </div>

	    <ul class="nav navbar-nav">
	      <li class="active"><a href="home.php" id = "continue_shopping"><span class= "glyphicon glyphicon-home"></span> Home</a></li>
	    </ul>
	</div>
</div>	

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		
			<div class="panel panel-default">
				<div class="panel-heading" style='background-color:#2D3E50; color:white;'>Confirmation</div>
		      	<div class="panel-body">
					<h1> Thank You </h1>
					<hr/>
					<p>Hello <?php echo $_SESSION["name"];  ?>, Your payment is successfully completed!!!</p>
					<a href="home.php" id = "continue_shopping" class="btn btn-success btn-lg">Continue shopping</a>
				</div>
				
			</div>
		
		</div>
		<div class="col-md-2"></div>
		
	</div>
</div>
</body>
</html>