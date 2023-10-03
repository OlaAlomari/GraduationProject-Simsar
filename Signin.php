<?php
session_start();

include("includes/config.php");





if(isset($_POST['Submit']))
{
$Phone_Number = $_POST['Phone_Number'];
$Password = $_POST['Password'];




$query = mysqli_query($dbConn,"SELECT * FROM users WHERE (Phone_Number='$Phone_Number' AND Password='$Password') AND Status='Active'"); 


if (mysqli_num_rows($query)>0)
{

$row=mysqli_fetch_array($query);
$U_ID=$row['ID'];
$_SESSION['U_Log'] = $U_ID;

	  
echo '<script language="JavaScript">
            document.location="Users/";
        </script>';
	
}
else
{

echo "<script language='JavaScript'>
			  alert ('Sorry ! Check Your Access Information Or Your Status With Administrator !');
      </script>";


echo '<script language="JavaScript">
            document.location="Signin.php";
        </script>';
		

}




}




?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SimSar</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="img/logo.png"/>




</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        
        <nav class="main-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About_Us.php">About Us</a></li>
                <li><a href="Contact_Us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="nav-logo-right">
            <ul>
                <li>
                    <i class="icon_phone"></i>
                    <div class="info-text">
                        <span>Phone:</span>
                        <p>+962 6 000 0000</p>
                    </div>
                </li>
                <li>
                    <i class="icon_map"></i>
                    <div class="info-text">
                        <span>Address:</span>
                        <p>Amman / Jordan</p>
                    </div>
                </li>
                <li>
                    <i class="icon_mail"></i>
                    <div class="info-text">
                        <span>Email:</span>
                        <p>info@simsar.com</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <nav class="main-menu">
                            <ul>
                                <li ><a href="index.php">Home</a></li>
                <li class=""><a href="About_Us.php">About Us</a></li>
                <li><a href="Contact_Us.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-5">
                        <div class="top-right">
                            
                            <a href="Signin.php" class="property-sub">Signin / Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" width="50%" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-logo-right">
                            <ul>
                                <li>
                                    <i class="icon_phone"></i>
                                    <div class="info-text">
                                        <span>Phone:</span>
                                        <p>+962 6 000 0000</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon_map"></i>
                                    <div class="info-text">
                                        <span>Address:</span>
                                        <p>Amman / Jordan</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon_mail"></i>
                                    <div class="info-text">
                                        <span>Email:</span>
                                        <p>info@simsar.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

   
 <section class="contact-section">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-1">
                            <div class="contact-text">
                                <div class="section-title">
                                    <span>Signin</span>
                                    <h2>Please Enter Signin Information</h2>
                                </div>
                                <form action="Signin.php" method="post" class="contact-form">
                                    <input type="text" name="Phone_Number" placeholder="Phone Number">
                                    <input type="password" name="Password" placeholder="Password">
                                    <button type="submit" name="Submit" class="site-btn">Signin</button>
                                    <button type="reset" class="site-btn">Clear</button>
									<br>
									<br>
									<a href="Signup.php" class="site-btn">You Don't Have Account ! / You Can Signup Now !</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

   













 

     <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-logo">
                            <div class="logo">
                                <center><a href="index.php"><img src="img/logo.png" width="70%" alt=""></a></center>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <h4>Social</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="contact-option">
                                <li><i class="fa fa-map-marker"></i> Amman / Jordan</li>
                                <li><i class="fa fa-phone"></i> +962 6 000 0000</li>
                                <li><i class="fa fa-envelope"></i> info@simsar.com</li>
                                <li><i class="fa fa-clock-o"></i> Sun - Thu, 08 AM - 06 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>