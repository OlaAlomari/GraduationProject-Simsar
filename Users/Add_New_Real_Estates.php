<?php
session_start();

include("includes/config.php");


$U_ID = $_SESSION['U_Log'];


if (!$_SESSION['U_Log'])
echo '<script language="JavaScript">
 document.location="../Signin.php";
</script>';




if(isset($_POST['Submit']))
{
$U_ID = $_POST['U_ID'];
$Type = $_POST['Type'];
$Title = $_POST['Title'];
$Description = $_POST['Description'];
$Number_Of_Rooms = $_POST['Number_Of_Rooms'];
$Number_Of_Bathrooms = $_POST['Number_Of_Bathrooms'];
$Area_Size = $_POST['Area_Size'];
$Category_ID = $_POST['Category_ID'];
$Area = $_POST['Area'];
$Price = $_POST['Price'];
$Building_Age = $_POST['Building_Age'];



$Longitude = $_POST['long'];
$Latitude = $_POST['lat'];

 








$insert = mysqli_query($dbConn,"insert into real_estates (Building_Age,U_ID,Type,Title,Description,Number_Of_Rooms,Number_Of_Bathrooms,Area_Size,Category_ID,Area,Longitude,Latitude,Price,Status) values ('$Building_Age','$U_ID','$Type','$Title','$Description','$Number_Of_Rooms','$Number_Of_Bathrooms','$Area_Size','$Category_ID','$Area','$Longitude','$Latitude','$Price','Pending')");







echo "<script language='JavaScript'>
			  alert ('New Real Estates Has Been Added Successfully !');
      </script>";

	echo "<script language='JavaScript'>
document.location='View_Real_Estates_List.php';
        </script>";

}



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SimSar - Users Portal</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	        	<link rel="shortcut icon" href="../img/logo.png"/>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
       <li><img src="../img/logo.png" width="40%"/></li>
	 

      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      
	  
	  
	  
	  
	  <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-building"></i>
          <span>Real Estates</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Add_New_Real_Estates.php">Add New Real Estates</a>
            <a class="collapse-item" href="View_Real_Estates_List.php">View Real Estates List</a>
          </div>
        </div>
      </li>
	  
	  
	  
	   
	  
	   
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          Welcome To The SimSar - Users Dashboard 
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           

          
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                <img class="img-profile rounded-circle" src="img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               

<a class="dropdown-item" href="My_Account.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  My Account
                </a>


                <a class="dropdown-item" href="Logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
		   Real Estates
		  <br>
		  Add New SimSar Information

        <div class="card-body">
             
			 
			 
			
<form method="post" action="Add_New_Real_Estates.php" enctype="multipart/form-data">
								<input type="hidden" name="U_ID" value="<?php echo $U_ID; ?>"/>





											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Category</label>
															
															
															<?php	
$query1 = mysqli_query($dbConn,"select * from categories");

echo '<select name="Category_ID" class="form-control " title="Category Name" required>';
   echo '                                       <option disabled selected value>Select Category Name</option>
';

while ($row1 = mysqli_fetch_array($query1)) {
   echo '<option value="'.$row1['ID'].'">'.$row1['Category_Name'].'</option>';
}
echo '</select>';
?>

                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											





                                            <!-- Form Name -->
											
											
											
										
											
											
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Building Age</label>
                                                            <input id="couplename" type="number" min="0" placeholder="Building Age" name="Building_Age" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
                                           
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Type</label>
                                                            <input id="couplename" type="text" placeholder="Type" name="Type" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											 <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Title</label>
                                                            <input id="couplename" type="text" placeholder="Title" name="Title" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Description</label>
                                                            <input id="couplename" type="text" placeholder="Description" name="Description" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Number Of Rooms</label>
                                                            <input id="couplename" type="number" min="1" placeholder="Number Of Rooms" name="Number_Of_Rooms" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Number Of Bathrooms</label>
                                                            <input id="couplename" type="number" min="1" placeholder="Number Of Bathrooms" name="Number_Of_Bathrooms" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Area Size</label>
                                                            <input id="couplename" type="number" min="1" placeholder="Area Size" name="Area_Size" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											
											
											
											 
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group" style="overflow-y:scroll;max-hieght:200px">
                                                            <label class="control-label" for="couplename"  style="overflow-y:scroll;max-hieght:200px">Area</label>
                                                            
															
															
															<select name="Area" class="form-control " title="Area"  required style="overflow-y:scroll;max-hieght:200px">
                                       <option disabled selected value>Select Area </option>


								<option value="1st Circle" > 1st Circle</option>
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
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Price (JD)</label>
                                                            <input id="couplename" type="number" min="1" placeholder="Price" name="Price" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Location</label>
															
														<input type="hidden" name="lat" id="us3-lat" required />
														<input type="hidden" name="long" id="us3-lon" required />


											<div id="us3" style="height: 300px;"></div>

                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
												
											
											
											
											
											
											
											
											
											
											
											
											
											
                                            <div class="social-form-info mb-0">
                                                <div class="row">
                                                   
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <button class="btn btn-primary" name="Submit" type="submit">Add New Real Estate</button>
                                                        <button class="btn btn-danger" type="submit">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


			 
			 
			 
        </div>

         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SimSar 2022</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="Logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  
  
    <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>



 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDemEmJPVUC9PoCzTLZLZdhwJLt5fu5XUc&callback=initMap"></script>
    <script src="locationpicker.jquery.min.js"></script>


								
								  <script>
            $('#us3').locationpicker({
                location: {
                    latitude: 31.993486,
                    longitude: 35.851594

				},
                radius: 500,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                }
            });
        </script>
		
		
</body>

</html>
