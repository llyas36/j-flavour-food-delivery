<?php

	require "dbconnection.php";

	//Data to insert 
	$img_path = "C:\\xampp\\htdocs\\php-version\\sandwich.jpg";


	$sql = "insert into cartexe.box(f_img, f_name, price, qty, total)

			value(?, ?, ?, ?, ?);
	";

$var = $conn->prepare($sql);
$var->bind_param("ssiii", $f_img, $f_name, $price , $qty, $total);

// set parameter and excute... insert multiple records...

$f_img = "C:\xampp\htdocs\php-version\img/img1.png";
$f_name = "Shiro";
$price = 80; 
$qty = 1; 
$total = 80;
$var->execute();


$f_img = "C:\xampp\htdocs\php-version\img/img2.jpg";
$f_name = "Pasta";
$price = 85; 
$qty = 4; 
$total = 300;
$var->execute();


$f_img = "C:\xampp\htdocs\php-version\img/img3.png";
$f_name = "Federation";
$price = 85; 
$qty = 2; 
$total = 190;
$var->execute();


$var->close();
$conn->close();
?>