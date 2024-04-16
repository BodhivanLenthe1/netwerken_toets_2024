<?php

$dbhost = 'localhost';
$dbuser = 'net24blenthe_bodhimvl';
$dbpass = '-C;7}ZOHtol^';
$dbname = 'net24blenthe_netwerken_toets_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>