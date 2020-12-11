<?php

$dbhost="localhost";
$dbname="sait";
$username="root";
$password="";
$db=new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function Get_Site(){
	global $db;
	$Sit=$db->query("SELECT * FROM sites ");
	return $Sit;
}
function zakazik(){
	global $db;
	
	$cus=$db->query("INSERT into orders (['CustomerID', 'SiteID','Date' ]) Values ()");
	return $Sit;
}
