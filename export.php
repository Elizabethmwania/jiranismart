<?php  
$conn = mysqli_connect('localhost', 'root', '', 'jiranismart_clients');  
$result = '';
if(isset($_POST["export_data"]))
{  

$query = "SELECT * FROM `client`";  
$setRec = mysqli_query($conn, $query);  
if(mysqli_num_rows($setRec) > 0)
 {
   $result .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>First Name</th>  
                         <th>Middle Name</th>  
                         <th>Last Name</th>  
                         <th>Gender</th>
                        <th>DOB</th>
                        <th>Nick Name</th>
                        <th>National ID</th>
                        <th>Residence</th>
                        <th>County</th>
                        <th>Sub County</th>
                        <th>Postal Address</th>
                        <th>Mobile Number</th>
                        <th>Town</th>
                        <th>Business Name</th>
                        <th>Business County</th>
                        <th>Business Sub County</th>
                        <th>Business Town</th>
                    </tr>
   ';
   while($rowData = mysqli_fetch_array($setRec))
  {
   $result .= '
    <tr>  
                         <td>'.$rowData["First_name"].'</td>  
                         <td>'.$rowData["Middle_name"].'</td>  
                         <td>'.$rowData["Last_name"].'</td> 
                         <td>'.$rowData["Gender"].'</td> 
                        <td>'.$rowData["DOB"].'</td>  
                        <td>'.$rowData["Nick_name"].'</td>
                        <td>'.$rowData["National_ID"].'</td>
                        <td>'.$rowData["Residence"].'</td>
                        <td>'.$rowData["County"].'</td>
                        <td>'.$rowData["Sub_county"].'</td>
                        <td>'.$rowData["Postal_address"].'</td>
                        <td>'.$rowData["Mobile_number"].'</td>
                        <td>'.$rowData["Town"].'</td>
                        <td>'.$rowData["Biz_name"].'</td>
                        <td>'.$rowData["Biz_county"].'</td>
                        <td>'.$rowData["Biz_sub_county"].'</td>
                        <td>'.$rowData["Biz_town"].'</td>
                        
    </tr>
   ';

}
$result .= '</table>';
$filename = "jirani_smart_clients_".date('Ymd') . ".xls";			
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
echo $result;
}
exit; 
}

// $columnHeader = '';  
// $columnHeader = "Membership ID" . "\t" . "Middle Name" . "\t" . "Last Name" . "\t". "First Name" . "\t" . "First Name" . "\t" . "First Name" . "\t" . "First Name" . "\t" . "First Name" . "\t" . "First Name" . "\t" . "First Name" . "\t" . "First Name" . "\t" ."First Name" . "\t" ."First Name" . "\t" ."First Name" . "\t" ;  
// $setData = '';  
//   while ($rec = mysqli_fetch_row($setRec)) {  
//     $rowData = '';  
//     foreach ($rec as $value) {  
//         $value = '"' . $value . '"' . "\t";  
//         $rowData .= $value;  
//     }  
//     $setData .= trim($rowData) . "\n";  
// }  
// if(isset($_POST["export_data"])) {	
// 	$filename = "jirani_smart_clients_".date('Ymd') . ".xls";			
// 	header("Content-Type: application/vnd.ms-excel");
// 	header("Content-Disposition: attachment; filename=\"$filename\""); 
// // header("Content-type: application/octet-stream");  
// // header("Content-Disposition: attachment; filename=User_Detail.xls");  
// header("Pragma: no-cache");  
// header("Expires: 0");  

//   echo ucwords($columnHeader) . "\n" . $setData . "\n";
   
// }  
 ?> 