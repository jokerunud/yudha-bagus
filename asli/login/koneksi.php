<?php 
$connection = new mysqli("localhost","root","","db_joker");
if(!$connection){
	echo "Connection Error!!";
	exit();
} ?>