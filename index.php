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
                                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="About_Us.php">About Us</a></li>
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
						$Building_Age = $row1['Building_Age'];
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



		$sql14 = mysqli_query($dbConn,"SELECT * FROM real_estates_pictures where RE_ID='$RE_ID'");
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
                                <option >Number Of Bathrooms</option>

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
							
							
							<select name="Number_Of_Rooms">
							                                <option >Number Of Rooms</option>

								<option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>                            </select>
								
								
                        </div>
						
						
						
						
						
						

                        <div class="second-row">
                            
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRange"> &nbsp;&nbsp;Price:</label>
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
							
                            <br><br><br><br>
							
							
							
							
													
                        						

<center>						
<div class="text">
 <select name="Area" size="10">
<option >Area</option>
<option value="1st Circle"> 1st Circle</option>
<option value="2nd Circle"> 2nd Circle</option>
<option value="3rd Circle"> 3rd Circle</option>
<option value="4th Circle"> 4th Circle</option>
<option value="5th Circle"> 5th Circle</option>
<option value="6th Circle"> 6th Circle</option>
<option value="7th Circle"> 7th Circle</option>
<option value="8th Circle"> 8th Circle</option>
<option value="Abdali"> Abdali</option>
<option value="Abdoun"> Abdoun</option>
<option value="Abu Alanda"> Abu Alanda</option>
<option value="Abu Nsair"> Abu Nsair </option>
<option value="Airport Road - Dunes Bridge">Airport Road - Dunes Bridge</option>
<option value="Airport Road - Madaba Bridge"> Airport Road - Madaba Bridge</option>
<option value="Airport Road - Manaseer Gs "> Airport Road - Manaseer Gs</option>
<option value="Dahiet Al-Nakheel "> Dahiet Al-Nakheel </option>
<option value="Al Bayader "> Al Bayader </option>
<option value="Al Bnayyat "> Al Bnayyat </option>
<option value="Al-Fuhais "> Al-Fuhais </option>
<option value="Al Gardens "> Al Gardens </option>
<option value="Al Hashmi Al Janobi "> Al Hashmi Al Janobi </option>
<option value="Al Hashmi Al Shamali "> Al Hashmi Al Shamali </option>
<option value="Al Hummar "> Al Hummar</option>
<option value="Al Jandaweel "> Al Jandaweel</option>
<option value="Al Kamaliya "> Al Kamaliya</option>
<option value="Al Kursi "> Al Kursi</option>
<option value="Al Muqabalain "> Al Muqabalain</option>
<option value="Al Qwaismeh "> Al Qwaismeh</option>
<option value="Al Rabiah "> Al Rabiah</option>
<option value="Al Rajeeb "> Al Rajeeb</option>
<option value="Al Rawabi "> Al Rawabi</option>
<option value="Al Rawnaq "> Al Rawnaq</option>
<option value="Al Ridwan "> Al Ridwan</option>
<option value="Al Sahl "> Al Sahl</option>
<option value="Al Sina'a "> Al Sina'a</option>
<option value="Arjan "> Arjan </option>
<option value="Basman "> Basman </option>
<option value="Dabouq "> Dabouq </option>
<option value=" Daheit Al Ameer Hasan "> Daheit Al Ameer Hasan </option>
<option value=" Daheit Al Aqsa "> Daheit Al Aqsa </option>
<option value=" Daheit Al Rasheed "> Daheit Al Rasheed </option>
<option value=" Daheit Al Yasmeen "> Daheit Al Yasmeen </option>
<option value=" Dahiet Al Ameer Rashed "> Dahiet Al Ameer Rashed </option>
<option value=" Dahiet Al Hussain "> Dahiet Al Hussain </option>
<option value=" Deir Ghbar "> Deir Ghbar </option>
<option value=" Downtown "> Downtown </option>
<option value=" Hay Al Rahmanieh "> Hay Al Rahmanieh </option>
<option value=" Hay Albarakeh "> Hay Albarakeh </option>
<option value=" Hay Alkhaledeen "> Hay Alkhaledeen </option>
<option value=" Hay Alsaleheen "> Hay Alsaleheen </option>
<option value=" Iraq Al Ameer "> Iraq Al Ameer </option>
<option value=" Jabal Al Hussain "> Jabal Al Hussain </option>
<option value=" Jabal Al-Lweibdeh "> Jabal Al-Lweibdeh </option>
<option value=" Jabal Al Zohor "> Jabal Al Zohor </option>
<option value=" Jabal Amman "> Jabal Amman </option>
<option value=" Jubaiha "> Jubaiha </option>
<option value=" Khalda "> Khalda </option>
<option value=" Mahes "> Mahes </option>
<option value=" Marj El Hamam "> Marj El Hamam </option>
<option value=" Marka "> Marka </option>
<option value=" Mecca Street "> Mecca Street </option>
<option value=" Medina Street "> Medina Street </option>
<option value=" Naour "> Naour </option>
<option value=" Ras El Ain "> Ras El Ain </option>
<option value=" Shafa Badran "> Shafa Badran </option>
<option value=" Shmaisani "> Shmaisani </option>
<option value=" Sports City "> Sports City </option>
<option value=" Swefieh "> Swefieh </option>
<option value="Swelieh">Swelieh</option>
<option value="Tabarboor">Tabarboor</option>
<option value="Tla' Ali ">Tla' Ali</option>
<option value="Um El Summaq "> Um El Summaq </option>
<option value="Um Uthaiena "> Um Uthaiena </option>
<option value="University Street "> University Street </option>
<option value="Wadi El Seer "> Wadi El Seer </option>
<option value="Wadi Saqra "> Wadi Saqra </option>
<option value="Al-Thuheir "> Al-Thuheir </option>
<option value="Yajouz "> Yajouz </option>
<option value="Rajm Amesh "> Rajm Amesh </option>
<option value="Al Qastal "> Al Qastal </option>
<option value="Birayn "> Birayn </option>
<option value="Sahab "> Sahab </option>
<option value="Al Lubban "> Al Lubban </option>
<option value="Al Jizah "> Al Jizah </option>
<option value="Al Tuneib "> Al Tuneib </option>
<option value="Al Hurryeh "> Al Hurryeh </option>
<option value="Al-Jabal Al-Akhdar "> Al-Jabal Al-Akhdar </option>
<option value="Al-Mustanada "> Al-Mustanada </option>
<option value="Rujm ash Shami "> Rujm ash Shami </option>
<option value="Badr "> Badr </option>
<option value="Badr Jdedeh "> Badr Jdedeh </option>
<option value="Baqa'a Camp "> Baqa'a Camp </option>
<option value="Jawa "> Jawa </option>
<option value="Khirbet Sooq "> Khirbet Sooq </option>
<option value="Al Urdon Street "> Al Urdon Street </option>
<option value="Al Manarah "> Al Manarah </option>
<option value="Al-Wehdat "> Al-Wehdat </option>
<option value="Al Yadudah "> Al Yadudah </option>
<option value="Umm Nowarah "> Umm Nowarah </option>
<option value="Al Ashrafyeh "> Al Ashrafyeh </option>
<option value="Jabal Al Naser "> Jabal Al Naser </option>
<option value="Al-Jweideh "> Al-Jweideh </option>
<option value="Husban "> Husban </option>
<option value="Hai Nazzal "> Hai Nazzal </option>
<option value="Jabal Al Nuzha "> Jabal Al Nuzha </option>
<option value="Al-Oroubah "> Al-Oroubah </option>
<option value="Jabal Al-Jofah "> Jabal Al-Jofah </option>
<option value="Al-Qusour "> Al-Qusour </option>
<option value=" Wadi Al Haddadeh "> Wadi Al Haddadeh </option>
<option value=" Al-Thra "> Al-Thra </option>
<option value=" Jabal Al-Nathif "> Jabal Al-Nathif </option>
<option value=" Jabal Al-Taj "> Jabal Al-Taj </option>
<option value=" Hettin "> Hettin </option>
<option value=" Al-Khaznah "> Al-Khaznah </option>
<option value=" Al-Mansour "> Al-Mansour </option>
<option value=" Al-Amir Hamzah "> Al-Amir Hamzah </option>
<option value=" Al-Qasabat "> Al-Qasabat </option>
<option value=" Al-Diyar "> Al-Diyar </option>
<option value=" Umm Al-Usoud "> Umm Al-Usoud </option>
<option value=" Umm Shterat "> Umm Shterat </option>
<option value=" Al-Rabwa "> Al-Rabwa </option>
<option value=" Al-Rjoum "> Al-Rjoum </option>
<option value=" Al-Zahra "> Al-Zahra </option>
<option value=" Al-Dia' "> Al-Dia' </option>
<option value=" Al-Adlyeh "> Al-Adlyeh </option>
<option value=" Al-Awdeh "> Al-Awdeh </option>
<option value=" Al-Feisal "> Al-Feisal </option>
<option value=" Al-Kom Al-Sharqi "> Al-Kom Al-Sharqi </option>
<option value=" Al-Kom Al-Gharbi "> Al-Kom Al-Gharbi </option>
<option value=" Al-Ma'adi "> Al-Ma'adi </option>
<option value=" Al-Naharyah "> Al-Naharyah </option>
<option value=" Al-Yarmouk "> Al-Yarmouk </option>
<option value=" Jabal Al-Marrikh "> Jabal Al-Marrikh </option>
<option value=" Salihiyat Al-Abid "> Salihiyat Al-Abid </option>
<option value=" Ayn Rbat "> Ayn Rbat </option>
<option value=" Uyun Al-Dhib "> Uyun Al-Dhib </option>
<option value=" Wadi Al-Srour "> Wadi Al-Srour </option>
<option value=" Al-Shabah "> Al-Shabah </option>
<option value=" Al-Muwaqqar "> Al-Muwaqqar </option>
<option value=" Umm al Kundum "> Umm al Kundum </option>
<option value=" Um al Basateen "> Um al Basateen </option>
<option value=" Bilal "> Bilal </option>
<option value=" Hjar Al Nawabilseh "> Hjar Al Nawabilseh </option>
<option value=" Dahiet Al Ameer Ali "> Dahiet Al Ameer Ali </option>
<option value=" Um Rummanah "> Um Rummanah </option>
<option value=" Tloo' Al-Misdar "> Tloo' Al-Misdar </option>
<option value=" Salem "> Salem </option>
<option value=" Daheit Al-Haj Hassan "> Daheit Al-Haj Hassan </option>
<option value=" Dahiet Al-Rawda "> Dahiet Al-Rawda </option>
<option value=" Al-Abdaliya "> Al-Abdaliya </option>
<option value=" Marj Al-Furs "> Marj Al-Furs </option>
<option value=" Howarah "> Howarah </option>
<option value=" Al-Mahatta "> Al-Mahatta </option>
<option value=" Al-Humranyah "> Al-Humranyah </option>
<option value=" Al-Husnyeh "> Al-Husnyeh </option>
<option value=" Al-Dmeenah "> Al-Dmeenah </option>
<option value=" Areinba Al Gharbiyah "> Areinba Al Gharbiyah </option>
<option value=" Areinba Al Sharqiyah "> Areinba Al Sharqiyah </option>
<option value=" Al-Baida "> Al-Baida </option>
<option value=" Adan "> Adan </option>
<option value=" Qafor "> Qafor </option>
<option value=" Madonna "> Madonna </option>
<option value=" Jelul "> Jelul </option>
<option value=" Wadi Al-Eish "> Wadi Al-Eish </option>
<option value=" Al-Zamila "> Al-Zamila </option>
<option value=" Al-Khreim "> Al-Khreim </option>
<option value=" Umm Al-Rasas "> Umm Al-Rasas </option>
<option value=" Al-Marqab "> Al-Marqab </option>
<option value=" Almih St "> Almih St </option>
<option value=" Al-Mushatta "> Al-Mushatta </option>
<option value=" Mobes "> Mobes </option>
<option value=" Al-Zaytouneh "> Al-Zaytouneh </option>
<option value=" Rajm Al-Shof "> Rajm Al-Shof </option>
<option value=" Al-Jumayyil "> Al-Jumayyil </option>
<option value=" Al-Kutaifah "> Al-Kutaifah </option>
<option value=" Al-Iman "> Al-Iman </option>
<option value=" Abu Al-Nair "> Abu Al-Nair </option>
<option value=" Al-Raqim "> Al-Raqim </option>
<option value=" Umm A-Dananir "> Umm A-Dananir </option>
<option value=" As Sarou "> As Sarou </option>
<option value=" Alkhashafia "> Alkhashafia </option>
<option value=" Dhuheibah Al-Sharqiyah "> Dhuheibah Al-Sharqiyah </option>
<option value=" Umm Quseir "> Umm Quseir </option>
<option value=" khan Al-Zabib "> khan Al-Zabib </option>
<option value=" Zinat Al-Rubue "> Zinat Al-Rubue </option>
<option value=" Bahath "> Bahath </option>
<option value=" Al-Mashqar "> Al-Mashqar </option>
<option value=" Um Batma "> Um Batma </option>
<option value=" Al-Nuqairah "> Al-Nuqairah </option>
<option value=" Al-Dhuheibah "> Al-Dhuheibah </option>
<option value=" Wadi Al-Tay "> Wadi Al-Tay </option>
<option value=" Zabboud "> Zabboud </option>
<option value=" Al-Khadra' "> Al-Khadra' </option>
<option value=" Al-Mugairat "> Al-Mugairat </option>
<option value=" Al-Dmenah "> Al-Dmenah </option>
<option value=" Umm Zuwaytinah "> Umm Zuwaytinah </option>
<option value=" Zumlat al Ulya "> Zumlat al Ulya </option>
<option value=" Zeinab "> Zeinab </option>
<option value=" Al-Quneitirah "> Al-Quneitirah </option>
<option value=" Al-Dhuheibah Al-Gharbiyah "> Al-Dhuheibah Al-Gharbiyah </option>
<option value=" Safut "> Safut </option>
<option value=" Zuwayza "> Zuwayza </option>
<option value=" Al-Rajila "> Al-Rajila </option>
<option value=" Umm Al-Amad "> Umm Al-Amad </option>
<option value=" Dahiet Al-Istiqlal "> Dahiet Al-Istiqlal </option>
<option value=" Abu Al-Sous "> Abu Al-Sous </option>
<option value=" Al-'Al "> Al-'Al </option>
<option value=" Dab'a "> Dab'a </option>
<option value=" Al-Zafaran "> Al-Zafaran </option>
<option value=" Other "> Other </option>
                            </select>
							
						   </div>
						
						
                        <button type="submit" class="search-btn"  name="Submit" >Search</button></center>

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
                        <span>Find Your Dream</span>
                        <h2>How It Work</h2>
						<br>
						<a href="Map.php" class="site-btn">Real Estates Map</A>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-works-1.png" alt="">
                        <h4>Search & Find Apertment</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-works-2.png" alt="">
                        <h4>Find Your Room</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="img/howit-works/howit-works-3.png" alt="">
                        <h4>Talk To Agent</h4>
                    </div>
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
                            <h4>Follow Us</h4>
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