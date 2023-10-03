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


 <script>L_PREFER_CANVAS=false; L_NO_TOUCH=false; L_DISABLE_3D=false;</script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.2.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://rawgit.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css"/>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.1.0/leaflet.markercluster.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.1.0/MarkerCluster.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.1.0/MarkerCluster.Default.css"/>

    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
      
    <style>#map {
        position: relative;
        width: 100.0%;
        height: 50%;
        left: 0.0%;
        top: 0.0%;
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
<div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Real Estates Map !</h2>
                    </div>
                </div>
            </div>
			
    

   				 <div class="folium-map" id="map" ></div>


    	 <script>    
    
    
        var bounds = null;
    

    var map = L.map(
        'map', {
        center: [31.956264, 35.914128],
        zoom: 12,
        maxBounds: bounds,
        layers: [],
        worldCopyJump: false,
        crs: L.CRS.EPSG3857,
        zoomControl: true,
        });

    
    
    var tile_layer_7d3d9b0bbcba4bd1af38368deb9dc1e9 = L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
        "attribution": null,
        "detectRetina": false,
        "maxNativeZoom": 18,
        "maxZoom": 18,
        "minZoom": 0,
        "noWrap": false,
        "subdomains": "abc"
}).addTo(map);
    

            var circle_4f3e7fc4786a41c1a874a28a508fa378 = L.circle(
                [31.956264, 35.914128],
                {
  "bubblingMouseEvents": true,
  "color": "#3186cc",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "#3186cc",
  "fillOpacity": 0.2,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "radius": 15000,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map);
            
    
        var marker = L.marker(
            [31.956264, 35.914128],
            {
                icon: new L.Icon.Default()
                }
            ).addTo(map);
        
    

                var icon = L.AwesomeMarkers.icon({
                    icon: 'info-sign',
                    iconColor: 'white',
                    markerColor: 'red',
                    prefix: 'glyphicon',
                    extraClasses: 'fa-rotate-0'
                    });
                marker.setIcon(icon);
            
    
            var marker_cluster = L.markerClusterGroup({});
            map.addLayer(marker_cluster);
            
			
			
			
			 <?php
					$sql1 = mysqli_query($dbConn,"select * from real_estates where Status='Active' order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$RE_ID = $row1['ID'];
						$Category_ID = $row1['Category_ID'];
						$U_ID = $row1['U_ID'];
						$Type = $row1['Type'];
						$Building_Age = $row1['Building_Age'];
						$Area = $row1['Area'];
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





					?>
			
			
			
    
        var marker1 = L.marker(
            [<?php echo $Latitude; ?>, <?php echo $Longitude; ?>],
            {
                icon: new L.Icon.Default()
                }
            ).addTo(marker_cluster);
        
    
            var popup1 = L.popup({maxWidth: '300'
            
            });

            
                var html1 = $('<div id="html1" style="width: 100.0%; height: 100.0%;"><a href="View_Destails.php?RE_ID=<?php echo $RE_ID; ?>" target="_blank"> <div class="property-more-table">                                            <table class="left-table">                                                <tbody>													<tr>                                                        <td class="pt-name">Name</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $U_Name; ?></td>                                                    </tr>										                                                    <tr>                                                        <td class="pt-name">Price</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $Price; ?> JD</td>                                                    </tr>                                                    <tr>                                                        <td class="pt-name">Type</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $Category_Name; ?></td>                                                    </tr>                                                                                                        <tr>                                                        <td class="pt-name">Bathrooms</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $Number_Of_Bathrooms; ?></td>                                                    </tr>                                                    <tr>                                                        <td class="pt-name">Rooms</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $Number_Of_Rooms; ?></td>                                                    </tr>                                                    													<tr>                                                        <td class="pt-name">Build Age</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $Building_Age; ?></td>                                                    </tr>																																							                                                    <tr>                                                        <td class="pt-name">Lot area</td>                                                        <td class="p-value">&nbsp;&nbsp;&nbsp;<?php echo $Area_Size; ?> spft</td>                                                    </tr>                                                </tbody>                                            </table>                                                                                   </div> </a></div>')[0];
                popup1.setContent(html1);
            

            marker1.bindPopup(popup1)
            ;

            
        
    
        marker1.bindTooltip(
            '<div>'
            + 'Click here' + '</div>',
            {"sticky": true}
        );
        
    
    <?php
	
					}
					
					?>
    
    
    
        
    
       
     
</script>

    
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