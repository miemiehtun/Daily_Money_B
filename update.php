<?php
	$update = "update";
	if(!is_dir($update)){
		$update = mkdir("update");
	}
	$name = $_FILES['profile'] ['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];
	$type = $_FILES['profile']['type'];
	if($type = "image/jpg/||$type = "image/jpeg" "|| $type = "image/png" ||$type = "image/gif" ){ 
		move_uploaded_file($tmp_name, $update ."/".$name);
	}
?>