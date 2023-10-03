<?php
include("includes/config.php");

$RE_ID = $_GET['RE_ID'];




					$sql1 = mysqli_query($dbConn,"select * from real_estates where ID='$RE_ID'");
					$row1 = mysqli_fetch_array($sql1);
						
						$RE_ID = $row1['ID'];
						$Type = $row1['Type'];
						$Building_Age = $row1['Building_Age'];
						$Area = $row1['Area'];
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



<style>
#map {
        height: 300px;
		width: 100%;
      }
</style>
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

    <!-- Property Details Hero Section Begin -->
    <section class="pd-hero-section set-bg" data-setbg="Users/<?php echo $Picture_Path; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pd-hero-text">
                        <p class="room-location"><i class="icon_pin"></i> <?php echo $Area; ?></p>
                        <h2><?php echo $Title; ?></h2>
                        <div class="room-price">
                            <p><?php echo $Price; ?> JD</p>
                        </div>
                        <ul class="room-features">
						
						<li>
                                        <i class="fa fa-building"></i>
                                <p>Building Age: <?php echo $Building_Age; ?></p>
                            </li>
							
							
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
    </section>
    <!-- Property Details Hero Section Begin -->

    <!-- Property Details Section Begin -->
    <section class="property-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-details-text">
                        
                        <div class="property-more-pic">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="Users/<?php echo $Picture_Path; ?>" height="350px" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="Users/<?php echo $Picture_Path; ?>"><img
                                            src="Users/<?php echo $Picture_Path; ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="Users/<?php echo $Picture_Path; ?>"><img
                                            src="Users/<?php echo $Picture_Path; ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="Users/<?php echo $Picture_Path; ?>"><img
                                            src="Users/<?php echo $Picture_Path; ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="Users/<?php echo $Picture_Path; ?>"><img
                                            src="Users/<?php echo $Picture_Path; ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="Users/<?php echo $Picture_Path; ?>"><img
                                            src="Users/<?php echo $Picture_Path; ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="pd-desc">
                            <h4>Description</h4>
                            <p><?php echo $Description; ?></p>
                        </div>
						
						
						
						
						
                        <div class="pd-details-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab-1" role="tab">Overview</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-2" role="tab">Description</a>
                                    </li>
                                   
                                </ul>
                            </div>
							
							
							
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="property-more-table">
                                            <table class="left-table">
                                                <tbody>

													<tr>
                                                        <td class="pt-name">User Name</td>
                                                        <td class="p-value"><?php echo $U_Name; ?></td>
                                                    </tr>


													<tr>
                                                        <td class="pt-name">User Phone Number</td>
                                                        <td class="p-value"><?php echo $U_Phone_Number; ?></td>
                                                    </tr>



                                                    <tr>
                                                        <td class="pt-name">Price</td>
                                                        <td class="p-value"><?php echo $Price; ?> JD</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Property Type</td>
                                                        <td class="p-value"><?php echo $Category_Name; ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="pt-name">Bathrooms</td>
                                                        <td class="p-value"><?php echo $Number_Of_Bathrooms; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Rooms</td>
                                                        <td class="p-value"><?php echo $Number_Of_Rooms; ?></td>
                                                    </tr>
                                                    
													<tr>
                                                        <td class="pt-name">Building Age</td>
                                                        <td class="p-value"><?php echo $Building_Age; ?></td>
                                                    </tr>
													
													
													
                                                    <tr>
                                                        <td class="pt-name">Lot area</td>
                                                        <td class="p-value"><?php echo $Area_Size; ?> spft</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="pd-table-desc">
                                            <p><?php echo $Description; ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>


 <div class="pd-desc">
                            <h4>Map</h4>
                        </div>
						
						
						
 <div id="map"></div>
                             

			

   	   
	       <script>

      function initMap() {
        var myLatLng = {lat: <?php echo $Latitude; ?>, lng: <?php echo $Longitude; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: myLatLng,
		    mapTypeId: 'satellite'

        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?php echo $Area; ?>'
        });
      }
    </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDemEmJPVUC9PoCzTLZLZdhwJLt5fu5XUc&callback=initMap">
    </script>


						
                       
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Property Details Section End -->

 

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