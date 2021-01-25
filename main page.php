<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Virtual Whiteboard</title>
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
                name=contactForm.name.value;
                email = contactForm.email.value; 
                phno = contactForm.phno.value;
                message=contactForm.message.value; 
  
                // If password not entered 
                if (email == '') 
                    alert ("Please enter your Email"); 
                else if(name=='')  
                alert("Please enter your name") ;  
                // If confirm password not entered 
                else if(message=='')
                    alert("Please fill this part");
                      
                // If Not same return False.     
                else
                    return false;
                 
  
                // If same return True. 
                else{ 
                    alert("Welcome kindly Login") 
                    return true; 
                } 
            } 
        </script> 
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="padding: 10px;">
        <div class="container"><a class="navbar-brand" href="#page-top" style="color: rgb(224,223,220);">Virtual Whiteboard</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a alt="about" title="About the website"class="nav-link js-scroll-trigger" href="features.php"><i class="fa fa-angle-down" style='font-size:20px' alt="about" title="About the website"></i> About</a></li>
                    <li class="nav-item" role="presentation"><a alt="log in" title="Log in"class="nav-link js-scroll-trigger" href="log in.php"><i class="fa fa-sign-in" style='font-size:22px' alt="log in" title="Log in"></i> Log in</a></li>
                    <li class="nav-item" role="presentation"><a alt="Sign up" title="Sign up"class="nav-link js-scroll-trigger" href="registration.php"><i class="fa fa-user" style='font-size:20px' alt="Sign up" title="Sign up"></i>  Sign up</a></li>
                    
                    
                    <li class="nav-item" role="presentation"><a alt="About the team" title="About the team"class="nav-link js-scroll-trigger" href="#team"><i class="fa fa-group" style='font-size:20px' alt="About the team" title="About the team"></i> Team</a></li>
                    <li class="nav-item" role="presentation"><a alt="contact" title="Contact"class="nav-link js-scroll-trigger" href="#contact"><i class="fa fa-envelope" style='font-size:20px'alt="contact" title="Contact"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
            
    <header class="masthead" style="background-image:url('assets/img/laptop-336373_1920.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>Welcome To Our Page!</span></div>
                <div class="intro-heading text-uppercase"><span>It's Nice To Meet You</span></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services" alt="button" title="Click me to know more">Tell me more</a>
                
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">FEATURES</h2>
                    <h3 class="text-muted section-subheading">A nimble space to draw and brainstorm.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Online Collaboration</h4>
                    <p class="text-muted">Turn your ideas into a collection of clear, actioanble next steps, to build momentum and keep things moving.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Brainstorm ideas</h4>
                    <p class="text-muted">Share your ideas on a digital canvas that has all the flexibility you need.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-heart fa-stack-1x fa-inverse" style='font-size:45px'></i></span>
                    <h4 class="section-heading">User friendly</h4>
                    <p class="text-muted">Enjoy writing and drawing in an environment that is easy to use.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="team" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member" ><img class="rounded-circle mx-auto" src="assets/img/team/Harshi.jpg">
                        <h4>Harshita C Prabhu B</h4>
                        <p class="text-muted">UI/UX Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://twitter.com/harshitacprabhu"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100003039939870"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/harshitaprabhu/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/Rally.jpg">
                        <h4>Chaitraly</h4>
                        <p class="text-muted">UI Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://instagram.com/miss_innocency?igshid=49g24sa4ngw2"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/chaithrali.salian"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/chaithrali-salian-61b728194"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" method="post" action="" name="contactForm" onSubmit= "return checkdetails(this)">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" name="name" id="name" placeholder="Your Name *" required="" pattern="[A-Za-z\s]{3,25}" alt="name"title="enter your name"><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" name="email" id="email" placeholder="Your Email *" required="" alt="email" title="enter your email"><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input pattern="[0-9]{10,10}" maxlength=10 class="form-control" type="tel" name="phno"placeholder="Your Phone "  alt="phone number" title="enter your phone number"><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" alt="type your message here" name="message" title="type your message here" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="submit" alt="button"  title="send a message to the developers">Send Message</button></div>
                                <?php  
                            include('whiteboard.php');
                               if(isset($_POST['submit']))
                                 {
                                    $name=$_POST['name'];
                                     $email=$_POST['email'];
                                      $phno=$_POST['phno'];
                                        $textarea=$_POST['message'];


                                   $iq = mysqli_query($con," INSERT INTO `contact` ( `name`,`email`,`phno`,`textarea`)VALUES('".$name."','".$email."','".$phno."','".$textarea."')");
                                 echo "<script>alert('Successfully delivered your message!'); window.location='main page.php';</script>";
                                }

                ?>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </section> 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2020</span></div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a>Privacy Policy</a></li>
                        <li class="list-inline-item"><a>Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
</html>