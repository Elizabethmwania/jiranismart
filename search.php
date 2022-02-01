<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<meta charset="utf-8">
<title>Jirani Smart</title>
  
    <!-- mobile responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="login.css">
<title>Clients' Details</title>
<style>
table {
  position: center;
  width: 50%;
  counter-reset: row-num -1;
}
table tr {
  counter-increment: row-num;
}
table tr td:first-child::before {
    content: counter(row-num) ". ";
}

</style>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <!-- <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Home</a>
    </div> -->
    <ul class="nav navbar-nav">
      <li class="active"><a href="read_clients.php">My Dashboard</a></li>
       <li><a href="#">Messages</a></li>
       <li><a href="add_user.php"><span class="glyphicon glyphicon-plus"></span> Add User</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container" role="main">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <h3>Rgistered Clients</h3>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">

            <!-- <form action="" method="GET" class="form-main">

            <div class="col-md-10 col-sm-10 col-xs-12">
                <label class="sr-only" for="search">Search</label>
                <div class="input-group">
                    <input type="text"name="National_ID"> <input type="submit" class="form-control input-search" name="form_submit" id="search" placeholder="Search">
                    <span class="input-group-addon group-icon"><span class="glyphicon glyphicon-user"></span>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-12">
                <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="hidden-sm hidden-xs"> Search </span>
                </button>
            </div> -->
            <form action="" method="get">
            ID Number: <input type="text" name="National_ID"> 
            <input type="submit" name="form_submit" value="Search"><br>
             </form>

        </div>      

    </div>
</div>
<!-- php code for search -->
<?php
global $conn;

$servername = "localhost";  //host name
$username = "root"; //username
$password = ""; //password
$mysql_database = "jiranismart_clients"; //database name
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysqli_connect_error());

       mysqli_select_db($conn,$mysql_database) or die("Opps some thing went wrong");
       if(isset($_GET['form_submit']))
       {
   
         $IDNUMBER =$_GET['National_ID'];
         $stmt = $conn->prepare("select * from client where National_ID=? ");
   
                       $stmt->bind_param('s',$IDNUMBER);
   
                       $stmt->execute();
                   $val =  $stmt->get_result();
                   $row_count= $val->num_rows;
   
                   if($row_count>0)
                   {
                       $result =$val->fetch_assoc();
   
                       print_r($result);
                    //    while($row = $result->fetch_row()) {
                    //     echo "<tr>
                    //           <td></td>
                    //           <td>".$row['First_name']."</td>
                    //           <td>".$row['Middle_name']."</td>
                    //            <td>".$row['Last_name']."</td>
                    //            <td>".$row['Gender']."</td>
                    //           <td>".$row['DOB']."</td>	
                    //           <td>".$row['Nick_name']."</td>
                    //           <td>".$row['National_ID']."</td>
                    //           <td>".$row['Residence']."</td>
                    //           <td>".$row['County']."</td>
                    //           <td>".$row['Sub_county']."</td>
                    //           <td>".$row['Postal_address']."</td>
                    //           <td>".$row['Mobile_number']."</td>
                    //           <td>".$row['Town']."</td>
                    //           <td>".$row['Biz_name']."</td>
                    //           <td>".$row['Biz_county']."</td>
                    //           <td>".$row['Biz_sub_county']."</td>
                    //           <td>".$row['Biz_town']."</td>
                              
                    //              </tr>";
                    //     }
                   }
                   else
                   {
   
                     echo "identification_number not Match";
                   }
   
   
   
                       $stmt->close();
                        $conn->close();
   
       }
?>