<?php

	session_start();
	$breakfast = $_POST['breakfast'];
	$bus_fee = $_POST['bus_fee'];
	$donation = $_POST['donation'];
	$general = $_POST['general'];
	$total = $breakfast + $bus_fee + $donation + $general;
	$_SESSION['result'] = array($breakfast,$bus_fee,$donation,$general,$total);
	// include("config/database.php");
	$con = mysqli_connect("localhost","root","");
	if($con){
		mysqli_select_db($con,"daily_money");
	}
	$query = "INSERT INTO daily_usages(breakfast,bus_fee,donation,general,total) VALUES('$breakfast','$bus_fee','$donation','$general','$total')";
		$result = mysqli_query($con,$query);
		if($result) {
			header("location:index.php");
		}