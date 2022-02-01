<?php
  
include_once('db_connect.php');
if(isset($_POST["username"], $_POST["password"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = "SELECT username, password FROM tbl_admin WHERE username = '".$username."' AND  password = '".$password."'";
$result2 = mysqli_query($conn,$result1);
$rowcount = mysqli_num_rows($result2);
        if ($rowcount > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $username; 
            header("Location: read_clients.php");
             
        }
        else
        {
            echo '<script>alert("WRONG CREDENTIALS")</script>';
        }
}
// function test_input($data) {
      
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
   
// if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
//     $username = test_input($_POST["username"]);
//     $password = test_input($_POST["password"]);
//     $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
//     $stmt->execute();
//     $users = $stmt->fetchAll();
      
//     foreach($users as $user) {
          
//         if(($user['username'] == $username) && 
//             ($user['password'] == $password)) {
//                 header("Location: read_clients.php");
//         }
//         else {
//             echo "<script language='javascript'>";
//             echo "alert('WRONG CREDENTIALS')";
//             echo "</script>";
//             die();
//         }
//     }
// }
  
?>