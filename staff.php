<!DOCTYPE html>
<html lang="en">
 <!--Favicon-->
 <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Staff Portal</title>

    <style>
     body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url() no-repeat;
    background-size: cover;
}
  
.login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #d6421d;
}
  
.login-box h1 {
    float: left;
    font-size: 40px;
    border-bottom: 4px solid #d6421d;
    margin-bottom: 50px;
    padding: 13px;
}
  
.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #d6421d;
}
  
.fa {
    width: px;
    float: left;
    text-align: center;
}
  
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
}
  
.button {
    width: 100%;
    padding: 8px;
    color: #ffffff;
    background: none #d6421d;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
table {
    counter-reset: rowNumber;
  }
  
  table tr::before {
    display: table-cell;
    counter-increment: rowNumber;
    content: counter(rowNumber) ".";
    padding-right: 0.3em;
    text-align: right;
  }
  h3 {
    display: block;
    font-size: 2em;
    margin-top: 1em;
    margin-bottom: 1em;
    margin-left: 20em;
    margin-right: 2em;
    font-weight: bold;
    color: orange;
  }
  .form {
    margin: 50px auto;
    width: 50%;
    padding: 30px 25px;
    background: rgb(230, 217, 217);
  
  }
  
    </style>
</head>
  
<body>
    <div class="container">
    <form action="validate_staff.php" method="post">
        <div class="login-box" style="">
            <h2>Staff Login</h2>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="" required>
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="" required>
            </div>
  
            <input class="button" type="submit" name="login" value="Sign In">
        </div>
    </form>
</div>
</body>
  
</html>