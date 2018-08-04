<?php
	$con = mysqli_connect("localhost","root","");
	if($con){
		mysql_select_db($con,"daily_money");
	}
