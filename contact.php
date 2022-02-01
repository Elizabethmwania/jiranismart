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

  </head>
  
  <body>
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->

<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
        <!-- php code for sending message-->
<?php 

$conn = mysqli_connect("localhost", "root", "", "jiranismart_clients");
$name = "";
$email = "";
$phone = ""; 
$message = "";       
// Check connection
if($conn === false){
	die("ERROR: Could not connect. " 
		. mysqli_connect_error());
}
if(isset( $_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO tbl_contact (name, email, phone, message) 
VALUES ('$name', '$email', '$phone', '$message')";

if(mysqli_query($conn, $sql)){ 
	echo "<script type='text/javascript'>alert('Message sent. You will get a response shortly!')</script>";

} else{
	echo "<script type='text/javascript'>alert('Failed. Please try again!')</script>";
}
}  
// Close connection
mysqli_close($conn);			

?>
<!-- /php code for sending message -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="" method="post">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" required>
          <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Your Email" required>
          <input type="text" class="form-control mb-3" id="subject" name="phone" placeholder="Phone Number" required>
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" required></textarea>
          <button type="submit" value="Submit" name="submit" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
<div class="col-lg-5">
<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Frequently ask</h3>
                            <div id="accordion">
                                <div class="card wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".3s">
                                    <div class="card-header" id="headingOnee">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOnee" aria-expanded="true" aria-controls="collapseOnee">
                                            Which job opportunies do you offer
                                        </button>
                                      </h5>
                                    </div>
                                
                                    <div id="collapseOnee" class="collapse show" aria-labelledby="headingOnee" data-parent="#accordion">
                                      <div class="card-body">
                                        As a microfinance company we offer different jobs and internship in different departments. They are usually advitised on the website according to the departments
                                      </div>
                                    </div>
                                  </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Who Manages Jirani Smart Limited?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                            <div class="card-body">Jirani Smart's management consists of a team more than 10 years’ experience in the microfinance industry. They have worked together for years and their track record proves that they have the necessary skills to guide the company as it expands throughout the country.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Who are your customers?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                            <div class="card-body">Jirani Smart's customers are individuals who are not in an economic position to secure funding from traditional financial institutions.Since we offer asset loans then such customers are benefited.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                        <div class="card-header" id="headingThree4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                                    How do I benefit from the savings?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion" style="">
                                            <div class="card-body">Jirani Smart Ltd offers the client the chance to accumulate savings to secure loans on a graduating series, for future use in personal events and for joint use like projects.
                                            </div>
                                        </div>
                                    </div>
                                </div>
  </div>
      
</div> 
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id=""></div>
    <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.3468895208575!2d38.36757781414837!3d-3.506959543067108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1838dfa4846a5543%3A0xb3db3819f9d5d724!2sJirani%20Smart%20Ltd%20Head%20Office!5e0!3m2!1sen!2ske!4v1632115255610!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" async></script>
  
</section>
<!-- /gmap -->

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

</body>
</html>