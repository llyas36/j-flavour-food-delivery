<?php

	require "dbconnection.php";

	$sql = "create database cartExe";

	if(!mysqli_query($conn, $sql)){
		echo "error while creating database" . mysqli_error($conn);
	}



mysqli_close($conn);
?>