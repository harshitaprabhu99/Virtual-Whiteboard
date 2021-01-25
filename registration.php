<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign up for free</title>
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
    <style>
    	
</style>
    <script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.passwordrepeat1.value; 
                password2 = form.passwordrepeat2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Welcome kindly Login") 
                    return true; 
                } 
            } 
        </script> 
</head>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="padding: 9px;">
        <div class="container"><a class="navbar-brand" href="#page-top" style="color: rgb(224,223,220);">Virtual Whiteboard</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="features.php"><i class="fa fa-angle-down"  style='font-size:20px'></i>About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="main page.php"><i class="fa fa-home" style='font-size:20px'></i>HOME</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

<body style="background-image: url(&quot;assets/img/workshop-2209239_1920.jpg&quot;);opacity: 1;">
    <br>
    <br>
    <div class="register-photo" style="background-color: rgb(221,224,228);background-image: url(&quot;assets/img/workshop-2209239_1920.jpg&quot;);margin: 4px;padding: 90px;">
        <div class="d-flex flex-fill align-content-center align-self-center form-container" style="width: 450px;">
            <form class="flex-fill" action="" method="post" onSubmit = "return checkPassword(this)">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>

                <div class="form-group"><input class="form-control" type="text" name="name" pattern="[A-Za-z\s]{3,25}" title="Enter your name" placeholder="Name" required=""style="background-color: rgb(240,240,240);"></div>

                <div class="form-group"><input class="form-control" type="email" name="email" title="Enter your email" placeholder="Email" maxlength="30" required=""style="background-color: rgb(240,240,240);"></div>

                <div class="form-group">

                	<input class="form-control" pattern="[A-Za-z\s][0-9][*$#&@][{8,15}" type="password" id="passwordrepeat1" required=""title="Enter password pattern [A-Z][0-9][*&$#@]" name="passwordrepeat1" placeholder="Password" style="background-color: rgb(240,240,240);"><input type="radio" onclick="myFunction1()" style="font-size:3px;"> show password

<script>
function myFunction1() {
  var y = document.getElementById("passwordrepeat1");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>
                	




          </div>  

                <div class="form-group"><input class="form-control" pattern="[A-Za-z\s][0-9][*$#&@][{8,15}" type="password" id="password" required=""title="Enter password pattern [A-Z][0-9][*&$#@]" name="passwordrepeat2" placeholder="Confirm Password" style="background-color: rgb(240,240,240);"><input style="font-size:1px;"type="radio" onclick="myFunction()"> show password

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
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="submit" name="save" style="background-color: rgb(15,15,15);">Sign Up</button></div><a class="already" href="log in.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    

    <?php  
                            include('whiteboard.php');
                               if(isset($_POST['save']))
                                 {
                                    $name=$_POST['name'];
                                     $email=$_POST['email'];
                                      $password=$_POST['passwordrepeat1'];
                                        $confirmpassword=$_POST['passwordrepeat2'];

            $iq = mysqli_query($con," INSERT INTO `registration` ( `name`,`email`,`password`,`confirm password`)VALUES('".$name."','".$email."','".$password."','".$confirmpassword."')");
                echo "<script>alert('Successfully registered!'); window.location='log in.php';</script>";
            }


    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>