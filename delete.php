<?php

$con = mysqli_connect("localhost","root","","jiranismart_clients");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
$Client_id ='';
$id = $_GET['Client_id']; // get id through query string

$del = mysqli_query($con,"delete from client where Client_id = '" . $_GET["userid"] . "'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:read_clients.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>