<?php
include("includes/config.php");
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
                <li ><a href="About_Us.php">About Us</a></li>
                <li class="active"><a href="Contact_Us.php">Contact Us</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
           



<?php
					$sql1 = mysqli_query($dbConn,"select * from real_estates order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$RE_ID = $row1['ID'];
						$Category_ID = $row1['Category_ID'];
						$U_ID = $row1['U_ID'];
						$Title = $row1['Title'];
						$Description = $row1['Description'];
						$Number_Of_Rooms = $row1['Number_Of_Rooms'];
						$Number_Of_Bathrooms = $row1['Number_Of_Bathrooms'];
						$Area_Size = $row1['Area_Size'];
						$Longitude = $row1['Longitude'];
						$Latitude = $row1['Latitude'];
						$Price = $row1['Price'];
						$Status = $row1['Status'];
						$Add_Date_Time = $row1['Add_Date_Time'];
						
				$sql12 = mysqli_query($dbConn,"SELECT * FROM categories where ID='$Category_ID'");
$result12=mysqli_fetch_array($sql12);

$Category_Name =$result12['Category_Name'];


				$sql13 = mysqli_query($dbConn,"SELECT * FROM users where ID='$U_ID'");
$result13=mysqli_fetch_array($sql13);

$U_Name =$result13['Name'];
$U_Phone_Number =$result13['Phone_Number'];


	$sql14 = mysqli_query($dbConn,"SELECT * FROM real_estates_pictures where ID='$RE_ID'");
$result14=mysqli_fetch_array($sql14);

$Picture_Path =$result14['Picture_Path'];

					?>






			<div class="single-hero-item set-bg" data-setbg="Users/<?php echo $Picture_Path; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text">
                                <h2><?php echo $Title; ?></h2>
                                <div class="room-price">
                                    <p><?php echo $Price; ?> JD</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $Area_Size; ?> sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $Number_Of_Rooms; ?> Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $Number_Of_Bathrooms; ?> Baths Bed</p>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


<?php

}
?>









        </div>
        <div class="thumbnail-pic">
            <div class="thumbs owl-carousel">
                <div class="item">
                    <img src="Users/<?php echo $Picture_Path; ?>" alt="">
                </div>
				<div class="item">
                    <img src="Users/<?php echo $Picture_Path; ?>" alt="">
                </div>
                <div class="item">
                    <img src="Users/<?php echo $Picture_Path; ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Search Form Section Begin -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                            <i class="fa fa-search"></i>
                            Find Your Home
                        </div>
                        
                    </div>
                    <form action="Search.php" method="post" class="filter-form">
                        <div class="first-row">
                            
                          
                            
                             <select name="Number_Of_Bathrooms">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="second-row">
                            <select name="Number_Of_Rooms">
								<option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>                            </select>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRange">Price:</label>
                                        <input type="text" id="priceRange" name="Price" readonly>
                                </div>
                                <div id="price-range" class="slider"></div>
                            </div>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRange">Size:</label>
                                    <input type="text" id="roomsizeRange" name="Area_Size" readonly>
                                </div>
                                <div id="roomsize-range" class="slider"></div>
                            </div>
<br><br>
<br>
                        <button type="submit" class="search-btn"  name="Submit" >Search</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form Section End -->

    <!-- How It Works Section Begin -->
    <section class="howit-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Contact Us</span>
                        <h2>How We Can Help You !</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12">
                    <center><h4> If you have any questions or queries a member of staff 
                        will always be happy to help.</h4></center>
                        <center><h4>feel free to contact us by phone or E mail </h4></center>
                        <center><h4>we will be sure to get back to you as sooon as possible.</h4></center>
                        <br>
                 <center><h4>Contact Us

</h4></center>
                 <center><h4> Amman / Jordan</h4></center>
                 <center><h4> +962 6 000 0000
</h4></center>
                 <center><h4> info@simsar.com
</h4></center>
<center><h4> Sun - Thu, 08 AM - 06 PM </h4></center>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    
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