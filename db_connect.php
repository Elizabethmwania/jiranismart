<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','jiranismart_clients');
$conn = mysqli_connect(HOST,USER,PASS,DB);
if($conn->connect_error){
	die("Connection failed" .$conn->connect_error);
}

?>