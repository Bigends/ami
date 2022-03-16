<?php

$dbhost = "localhost:3306";
$dbuser = "HI-907728-CB_chris";
$dbpass = "Amiteam973";
$dbname = "HI-907728-CB_AMI";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
