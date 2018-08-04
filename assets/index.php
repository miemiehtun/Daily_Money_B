
<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
			.result{
				margin-top: 150px;
			}
	</style>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-datepicker.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
							<form ="upload.php" method="post" enctype="multipart/form-data" >
						<input type="file" name="profile" required>
						<button type="submit" class="btn btn-primary">Change profile</button> 
					</form>
							<form action=caculate.php" method="post">
							  <div class="form-group row">
							    	<label for="breakfast" class="col-sm-4 col-form-label">Breakfast</label>
							    <div class="col-sm-8">
							    	<input type="number" class="form-control" id="breakfast" name="breakfast" required>
								</div>
							  </div>
							   <div class="form-group row">
							    	<label for="breakfast" class="col-sm-4 col-form-label">Bus_fees</label>
							    <div class="col-sm-8">
							    	<input type="number" class="form-control" id="bus_fee" name="bus_fee" required>
								</div>
							  </div>
							<div class="form-group row">
							    <label for="donation" class="col-sm-4 col-form-label">Donation</label>
							    	<div class="col-sm-8">
							    		<input type="number" class="form-control" id="donation" name="donation" required>
									</div>
							</div>
							<div class="form-group row">
							    <label for="general" class="col-sm-4 col-form-label">General</label>
							    	<div class="col-sm-8">
							    		<input type="number" class="form-control" id="general" name="general" required>
									</div>
							</div>
							<div class="form-group row">
							    <label for="date" class="col-sm-4 col-form-label">Date</label>
							   		 <div class="col-sm-8">
							    		<input type="text" class="form-control" id="date" name="date" required>
									</div>
							</div>
							  			<button type="submit" class="btn btn-primary mb-2" id="submit">Submit</button>
						</form>
					</div>	
					<div class="col-md-6">
							<div class="result">
								<h3>Today Expense Caculator</h3>
								<?php
								if(isset($_SESSION['result'])):
								?>
								<table class="table-hover table-bordered text-center">
									<tr>
										<th>Today Breakfast</th>
										<th> Today busfee</th>
										<th>Today Donation</th>
										<th>Today Generral</th>
										<th>Today total</th>
									</tr>
									<tr>
										<td>
											<?php echo $_SESSION['result'][0];
											?>
										</td>
										<td>
											<?php echo $_SESSION['result'][1];
											?>
										</td>
										<td>
											<?php echo $_SESSION['result'][2];
											?>
										</td>
										<td>
											<?php echo $_SESSION['result'][3];
											?>
										</td>
										<td>
											<?php echo $_SESSION['result'][4];
											?>
										</td>
									</tr>
								</table>
								<?php 
								session_destroy();
								endif; ?>
							</div>
						</div>	
					</div>	
				</div>
				<!--<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
				<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#submit").click(function(){  
							var breakfast  = $("#breakfast").val();
							var bus = $("#bus_fee").val();
							var donation = $("#donation").val();
							var general = $("#general").val();
							if(breakfast<0 || bus_fee<0  || donation<0 || general<0){
								alert("Error");
							}
				          	});	
				          $('#date').datepicker({
						 autoclose: true,
						 format: 'dd-mm-yyyy',
						 todayHighlight: true,
						});
					});		
					</script>-->
		</body>
		</html>
