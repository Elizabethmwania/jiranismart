<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard | Add User</title>
	
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="login.css">
<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #ORANGE;
		}
		* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 60%;
	margin: 0px auto;
	padding: 20px;
	
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}


		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body class="fixed-left">
<h3>Add User</h3>

<?php 

$conn = mysqli_connect("localhost", "root", "", "jiranismart_clients");
$username = "";
$password = "";         
// Check connection
if($conn === false){
	die("ERROR: Could not connect. " 
		. mysqli_connect_error());
}
if(isset( $_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO tbl_admin (username, password) 
VALUES ('$username', '$password')";

if(mysqli_query($conn, $sql)){ 
	echo "<div class='form'> 
			  <h3>User added successfully.</h3><br/>
			  <p class='link'>Return to <a href='read_clients.php'>Dashboard</a></p>
			  </div>";

} else{
	echo "ERROR: Hush! Sorry $sql. " 
		. mysqli_error($conn);
}
}  
// Close connection
mysqli_close($conn);			

?>
<?php
echo "<div class='col-md-12'>";
?>
<form action="add_user.php" method="post">
<div class="input-group">
	<label>Username</label>
	<input type="text" name="username" value="" required>
</div>

<div class="input-group">
	<label>Password</label>
	<input type="password" name="password" required>
</div>

<div class="input-group">
	<button type="submit" name="submit" class="btn" name="register_btn" value="Submit"> + Add user</button>
</div>
</form>

</body>
</html>


	
