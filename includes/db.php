<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "trf_admin";
$db['db_pass'] = "website@TRF17";
$db['db_name'] = "trf_db1";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
$con = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}








?>
