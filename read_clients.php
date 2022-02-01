
<?php
include_once("export.php");
?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
       <li><a href="messages.php">Messages</a></li>
       <li><a href="add_user.php"><span class="glyphicon glyphicon-plus"></span> Add User</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container" role="main">
    <div class="row">
        <div class="col-12 col-md-6" style="margin-bottom:0px; margin-top: -20px;">
            <h3>Registered Clients</h3>
        </div>

        <div class="col-12 col-md-4">

            <!--  <form action="" method="GET" class="form-main"> -->

            

            <!-- <div class="col-md-2 col-sm-2 col-xs-12">
                <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="hidden-sm hidden-xs"> Search </span>
                </button>
            </div> -->
			
            <form action="search.php" method="get">
             <input type="text" name="National_ID" placeholder="ID Number:"> 
            <input type="submit" name="form_submit" value="Search"><br>
             </form>
	    </div>
		<div class="col-12 col-md-2"style="margin-bottom:20px;">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
		</form>
			<!-- <button type="button" id="export-to-excel" class="btn btn-info">Export to Excel</button> -->
        </div>
    </div>
</div>


<!-- table -->
<div class="table-responsive">

<table class="table table-striped table-bordered">

<tr>
<th style='width:50px;'>S/No.</th>
<th style='width:150px;'>First Name</th>
<th style='width:150px;'>Middle Name</th>
<th style='width:150px;'>Last Name</th>
<th style='width:100px;'>DOB</th>
<th style='width:150px;'>Nick Name</th>
<th style='width:10px;'>Gender</th>
<th style='width:150px;'>National ID</th>
<th style='width:150px;'>Residence</th>
<th style='width:150px;'>County</th>
<th style='width:150px;'>Sub County</th>
<th style='width:150px;'>Postal Address</th>
<th style='width:150px;'>Mobile Number</th>
<th style='width:150px;'>Town </th>
<th style='width:150px;'>Business Name</th>
<th style='width:150px;'>County</th>
<th style='width:150px;'>Sub County</th>
<th style='width:150px;'>Town</th>
<th style='width:50px;'>Action</th>
</tr>

<tbody>
<?php

$con = mysqli_connect("localhost","root","","jiranismart_clients");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 5;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `client`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($con,"SELECT * FROM `client` LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
		echo "<tr>
		    <td></td>
			  <td>".$row['First_name']."</td>
			  <td>".$row['Middle_name']."</td>
	 		  <td>".$row['Last_name']."</td>
		   	  <td>".$row['Gender']."</td>
			  <td>".$row['DOB']."</td>	
			  <td>".$row['Nick_name']."</td>
			  <td>".$row['National_ID']."</td>
			  <td>".$row['Residence']."</td>
			  <td>".$row['County']."</td>
			  <td>".$row['Sub_county']."</td>
			  <td>".$row['Postal_address']."</td>
			  <td>".$row['Mobile_number']."</td>
			  <td>".$row['Town']."</td>
			  <td>".$row['Biz_name']."</td>
			  <td>".$row['Biz_county']."</td>
			  <td>".$row['Biz_sub_county']."</td>
			  <td>".$row['Biz_town']."</td>
			  <td><a href='delete.php?id=".$row['Client_id']."'><i class='fa fa-trash'></i></a></td>
			  
		   	  </tr>";
        }
	mysqli_close($con);

    ?>
	
</tbody>
</table>

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
  <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>

</body>
</html>