<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
       <script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkdetails(form) { 
                email = form.email.value; 
                password = form.password-repeat.value; 
  
                // If password not entered 
                if (email == '') 
                    alert ("Please enter your Email"); 
                      
                // If confirm password not entered 
                else if (password == '') 
                    alert ("Please enter your valid password"); 
                      
                // If Not same return False.     
                
                 
  
                // If same return True. 
                else{ 
                    alert("Welcome kindly Login") 
                    return true; 
                } 
            } 
        </script> 
</head>

<body style="background-image: url(&quot;assets/img/freelancer-763730_1920.jpg&quot;);">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="padding: 9px;">
        <div class="container"><a class="navbar-brand" href="#page-top" style="color: rgb(224,223,220);">Virtual Whiteboard</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="registration.php"><i class="fa fa-user" style='font-size:20px' alt="Sign up" title="Sign up"></i>Sign up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="features.php"><i class="fa fa-angle-down" style='font-size:20px'></i>About</a></li>
                
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="main page.php"><i class="fa fa-home" style='font-size:20px'></i>HOME</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="login-clean" style="background-color: rgb(209,212,214);background-image: url(&quot;assets/img/freelancer-763730_1920.jpg&quot;);">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color: rgb(28,6,11);"></i></div>
            <div class="form-group"><input class="form-control" type="email" required=""name="email" title="enter a valid email" placeholder="Email" style="background-color: rgb(240,240,240);"></div>
            <div class="form-group"><input class="form-control" pattern="[A-Za-z\s][0-9][*$#&@][{8,15}" required="" type="password" id="password" title="Enter password pattern [A-Z][0-9][*&$#@]" name="password-repeat" placeholder="Password" style="background-color: rgb(240,240,240);"><input  type="radio" onclick="myFunction()"> show password

<script>
function myFunction() {
  var y = document.getElementById("password");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

          </div> 
            <div class="form-group"><button class="btn btn-primary btn-block" name="save" type="submit" style="background-color: rgb(4,4,4);">Log In</button></div></form>
    </div>
    <?php

include('whiteboard.php');
if (isset($_POST['save']))  {
    $email =$_POST['email'];
    $password=$_POST['password-repeat'];
    $sql = mysqli_query($con," SELECT * FROM `registration` WHERE `email`='$email' and `password`='$password'");

    $cnt=mysqli_num_rows($sql);

    if($cnt >0)
    {
        $_SESSION['email']= $email;
        $iq = mysqli_query($con," INSERT INTO `login` (`email`,`password`)VALUES('".$email."','".$password."')");
        echo  "<script>alert('Successfully logged in! Welcome to Online Whiteboard'); window.location='canvas.php';</script>";

    }
    else
    {
        echo "<script>alert('Login failed'); window.location='log in.php';</script>";
    }

}
?>
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>