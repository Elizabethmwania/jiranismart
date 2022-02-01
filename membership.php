<!DOCTYPE html>
<html lang="zxx">

  <head>
    <meta charset="utf-8">
    <title>Jirani Smart</title>
  
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">
  
    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script> -->
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
/* body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, white, white);
} */
/* .container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
} */
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
  color: orange;
}
/* .container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
} */
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: orange;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: white;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
#dot-1 ~ .category label .one,
 #dot-2 ~ .category label .two,
 #dot-3 ~ .category label .three{
    background: #f0f0f0;
  }

 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: orange;
   border-color: red;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, green, orange);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, green, orange);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

     </style>
  </head>
  
  <body>
    <!-- preloader start -->
    <!-- <div class="preloader">
      <img src="images/preloader.gif" alt="preloader">
    </div> -->
    <!-- preloader end -->
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="height:50px;" /></a>
        
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline" style= "margin-top: 20px;">
           <li class="list-inline-item mx-0">Call: <a class="d-inline-block p-2 text-color" href="+000 000 000 000"><span class="fa fa-phone">+254 796 090 074</span></a></li>
           <li class="list-inline-item mx-0">Email:<a class="d-inline-block p-2 text-color" href=""><span>info@jiranismart.com</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar background: linear-gradient(to right, #1a1a37 50%, #ffbc3b 50%);-->
  <div class="navigation w-100" style="background: linear-gradient(to right,green 50%, green 50% );">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <!-- <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"/></a> -->
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center" style="background:green; margin: 0 auto;">
          <li class="nav-item @@about">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="branches.php">Branches</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="membership.php">Membership</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="staff.php">Staff</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="updates.php">Updates</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Membership</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our ultimate goal is to help our clients live a better life through our flexible loan terms and wide range of products.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
<!-- <div class="container" style="border: 1px solid #E8E8E8;margin-left:20%;"> -->
        
<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    
       
        <!-- php code for membership -->
        <?php
    require('db_connect.php');
    
    // When form submitted, insert values into the database.
    //defining variables to submit the form
    if (isset($_POST['submit'])) {
        
        $First_name = stripslashes($_POST['First_name']);
        //escapes special characters in a string
        $First_name = mysqli_real_escape_string($conn, $First_name);
        $Middle_name    = stripslashes($_POST['Middle_name']);
        $Middle_name    = mysqli_real_escape_string($conn, $Middle_name);
        $Last_name = stripslashes($_POST['Last_name']);
        $Last_name = mysqli_real_escape_string($conn, $Last_name);
        $DOB = stripslashes($_POST['DOB']);
        $DOB = mysqli_real_escape_string($conn, $DOB);
        // date("Y-m-d");
        $Nick_name    = stripslashes($_POST['Nick_name']);
        $Nick_name    = mysqli_real_escape_string($conn, $Nick_name);
        $Gender    = stripslashes($_POST['Gender']);
        $Gender    = mysqli_real_escape_string($conn, $Gender);
        
        $National_ID    = stripslashes($_POST['National_ID']);
        $National_ID    = mysqli_real_escape_string($conn, $National_ID);
        $Residence    = stripslashes($_POST['Residence']);
        $Residence    = mysqli_real_escape_string($conn, $Residence);
        $County    = stripslashes($_POST['County']);
        $County    = mysqli_real_escape_string($conn, $County);
        $Sub_county    = stripslashes($_POST['Sub_county']);
        $Sub_county    = mysqli_real_escape_string($conn, $Sub_county);
        $Postal_address    = stripslashes($_POST['Postal_address']);
        $Postal_address    = mysqli_real_escape_string($conn, $Postal_address);
        $Mobile_number    = stripslashes($_POST['Mobile_number']);
        $Mobile_number    = mysqli_real_escape_string($conn, $Mobile_number);
        $Town    = stripslashes($_POST['Town']);
        $Town   = mysqli_real_escape_string($conn, $Town);
        $Biz_name    = stripslashes($_POST['Biz_name']);
        $Biz_name   = mysqli_real_escape_string($conn, $Biz_name);
        $Biz_county    = stripslashes($_POST['Biz_county']);
        $Biz_county   = mysqli_real_escape_string($conn, $Biz_county);
        $Biz_sub_county    = stripslashes($_POST['Biz_sub_county']);
        $Biz_sub_county   = mysqli_real_escape_string($conn, $Biz_sub_county);
        $Biz_town    = stripslashes($_POST['Biz_town']);
        $Biz_town   = mysqli_real_escape_string($conn, $Biz_town);
    
       $query_check = "SELECT * FROM client WHERE (National_ID = '$National_ID');";
       $result_check = mysqli_query($conn, $query_check);
      
        if(mysqli_num_rows($result_check) > 0) {
          // $row = mysqli_fetch_assoc($result_check);
          
        
         echo '<div class="alert alert-danger alert-dismissible fade show" style="text-align: center; width:absolute;">';
         echo '<strong>Danger!</strong> User already registered. <a class="nav-link"href="membership.php">Please try again</a>';
         
         echo '</div>';
         exit();
       
    }
      else{
       $query = "INSERT into `client` (First_name, Middle_name, Last_name, Nick_name, National_ID, Residence, County, Sub_county, Postal_address, Mobile_number, Town, Gender, DOB, Biz_name, Biz_county, Biz_sub_county, Biz_town)
                     VALUES ('$First_name', '$Middle_name', '$Last_name', '$Nick_name', '$National_ID', '$Residence', '$County', '$Sub_county', '$Postal_address', '$Mobile_number', '$Town', '$Gender', '$DOB', '$Biz_name', '$Biz_county', '$Biz_sub_county', '$Biz_town')";
        $result   = mysqli_query($conn, $query);
        if($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" style="text-align: center; width:absolute;">';
            echo '<strong>Thank you for membership at JSL!</strong> Your have registered successfully. A Procurement Officer will contact you shortly <a class="nav-link"href="index.php">Return Home</a>';      
            echo '</div>';
            exit();
        }
      }
      
        
      

        // } else {
        //     echo "<div class='form'>
        //           <h3>Required fields are missing.</h3><br/>
        //           <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
        //           </div>";
        // }
      
        }else{
?>
      <div class="container" style="margin-top: auto;margin-bottom: auto;max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);">
    <div class="title" style="margin-bottom: 3%;text-align: center;">Fill form for membership</div>
    <div class="content">
      <form action="" method="post">
        <h4>Basic Information</h4>
        <div class="user-details">
         
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="First_name" placeholder="Enter First Name" required>
          </div>
          <div class="input-box">
            <span class="details">Middle Name</span>
            <input type="text" name="Middle_name" placeholder="Enter Middle Name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="Last_name" placeholder="Enter Last Lame" required>
          </div>
          <div class="input-box">
            <span class="details">Nick Name</span>
            <input type="text" name="Nick_name" placeholder="e.g Madam Boss" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" name="DOB" placeholder="Enter DOB" required>
          </div>
          <div class="input-box">
            <span class="details">National ID</span>
            <input type="text" name="National_ID" placeholder="Enter ID number" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="Gender"<?php if (isset($Gender) && $Gender=="F") echo "checked";?> value="F" id="dot-1">
          <input type="radio" name="Gender"<?php if (isset($Gender) && $Gender=="M") echo "checked";?> value="M" id="dot-2">
          <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="OTHER") echo "checked";?> value="OTHER" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" name="Gender"> Female</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" name="Gender">Male</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" name="Gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <!-- added -->
        <h4>Contact Information</h4>
        <div class="user-details">
          
        <div class="input-box">
          <span class="details">Residence</span>
          <input type="text" name="Residence" placeholder="Enter Residence" required>
        </div>
        <div class="input-box">
          <span class="details">County</span>
          <input type="text" name="County" placeholder="Enter County" required>
        </div>
        <div class="input-box">
          <span class="details">Sub County</span>
          <input type="text" name="Sub_county" placeholder="Enter Sub County" required>
        </div>
        <div class="input-box">
          <span class="details">Postal Address</span>
          <input type="text" name="Postal_address" placeholder="Enter Postal Address" required>
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" name="Mobile_number" placeholder="Enter Phone No." required>
        </div>
        <div class="input-box">
          <span class="details">Town</span>
          <input type="text" name="Town" placeholder="Enter town" required>
        </div>
        </div>
        <!-- another -->
        <div class="gender-details">
          <h4>Business Information</h4>
        </div>
        <div class="user-details">
        <div class="input-box">
          <span class="details">Business Name</span>
          <input type="text" name="Biz_name" placeholder="Enter Business name" required>
        </div>
        <div class="input-box">
          <span class="details">County</span>
          <input type="text" name="Biz_county" placeholder="Enter County" required>
        </div>
        <div class="input-box">
          <span class="details">Sub County</span>
          <input type="text" name="Biz_sub_county" placeholder="Enter Sub County" required>
        </div>
        <div class="input-box">
          <span class="details">Town</span>
          <input type="text" name="Biz_town" placeholder="Enter town" required>
        </div>

      </div>

        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>

       <?php
        }
      
       ?>
      </div>
     
   
</section>
<!-- /contact -->
<!-- footer -->
<!-- footer -->
<footer>
  <div class="footer bg-footer section border-bottom" style="background:green;">
    <div class="container">
      <div class="row" style="margin-top: -200px;" >
      <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
        <h4 class="text-white mb-5">JIRANI SMART</h4>
          <ul class="list-unstyled"style="color:white;">
            <li class="mb-3">At Taveta Rd Mwatate</li>
            <li class="mb-3">P.o Box 25-80305,Mwatate</li>
            <li class="mb-3">+254 796090074</li>
            <li class="mb-3">+254 798765800</li>
            <li class="mb-3">info@jiranismart.com</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">PRODUCTS</h4>
          <ul class="list-unstyled"style="color:white;">
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Jirani Mauzo Pap</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Supa  Boresha Loan</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Boresha Maisha Loan</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Uwezo Loan</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Jirani Jumbo Loan</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Staff Loan</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">PARTNERS</h4>
          <ul class="list-unstyled" style="color:white;">
            <li class="mb-3"><a class="text-color" href="https://ke.kcbgroup.com/" style="color:white;">KCB</a></li>
            <li class="mb-3"><a class="text-color" href="https://www.co-opbank.co.ke/"style="color:white;">COOP Bank</a></li>
            <li class="mb-3"><a class="text-color" href="https://www.cabulksms.com/"style="color:white;">Celcom Africa Ltd</a></li>
            <li class="mb-3"><a class="text-color" href="https://www.groupmfi.com/"style="color:white;">MFI</a></li>
            <li class="mb-3"><a class="text-color" href="https://oradian.com/"style="color:white;">Oradian</a></li>
            <li class="mb-3"><a class="text-color" href="https://www.metropol.co.ke/"style="color:white;">Metropol</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled" style="color:white;">
            <li class="mb-3"><a class="text-color"style="color:white;" href="index.php">Home</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="about.php">About Us</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="services.php">Services</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="branches.php">Branches</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="membership.php">Membership</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="contact.php">Contact</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="staff.php">Staff</a></li>
            <li class="mb-3"><a class="text-color"style="color:white;" href="updates.php">Updates</a></li>
          </ul>
        </div>
       
      
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer" style="background:green;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-sm-left text-center">
          <p class="mb-0" style="color:white; text-align: center;"> Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © jiranismartltd</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>