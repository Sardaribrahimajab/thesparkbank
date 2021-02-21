<?php

$user='root';
$password='';
$db='ibrahimdb';
$conn=$db;
$conn=new mysqli('localhost', $user,$password,$db) or die("unable to connect");



if(!$conn){
	die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}
	?>
