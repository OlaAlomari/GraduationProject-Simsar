<?php
session_start();

include("../includes/config.php");


$U_ID = $_SESSION['U_Log'];


if (!$_SESSION['U_Log'])
echo '<script language="JavaScript">
 document.location="../Signin.php";
</script>';



$sql1 = mysqli_query($dbConn,"select * from users where ID='$U_ID'");
$row1 = mysqli_fetch_array($sql1);


$Name = $row1['Name'];
$Phone_Number = $row1['Phone_Number'];
$Email_Address = $row1['Email_Address'];
$Address = $row1['Address'];
$Password = $row1['Password'];


if(isset($_POST['Submit']))
{
$U_ID = $_POST['U_ID'];
$Name = $_POST['Name'];
$Phone_Number = $_POST['Phone_Number'];
$Email_Address = $_POST['Email_Address'];
$Address = $_POST['Address'];
$Password = $_POST['Password'];







mysqli_query($dbConn,"update users set Address='$Address', Name='$Name', Phone_Number='$Phone_Number', Address='$Address', Email_Address='$Email_Address', Password='$Password' where ID='$U_ID'");







echo "<script language='JavaScript'>
			  alert ('User Information Has Been Updated !');
      </script>";

	echo "<script language='JavaScript'>
document.location='index.php';
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
	        	<link rel="shortcut icon" href="img/logo.png"/>

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
       <li><img src="img/logo.png" width="40%"/></li>
	 

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
          
		  My Account
		  <br>
		  Edit Account Information

        <div class="card-body">
             
			 
			
<form method="post" action="My_Account.php" enctype="multipart/form-data">
							<input type="hidden" name="U_ID" value="<?php echo $U_ID; ?>"/>

                                            <!-- Form Name -->
                                           
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Name</label>
                                                            <input id="couplename" type="text" placeholder="Name" name="Name" value="<?php echo $Name; ?>" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											 <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Phone Number</label>
                                                            <input id="couplename" type="text" placeholder="Phone Number" name="Phone_Number" value="<?php echo $Phone_Number; ?>" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Address</label>
                                                            <input id="couplename" type="text" placeholder="Address" name="Address" value="<?php echo $Address ?>" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
										
											
											<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Email Address</label>
                                                            <input id="couplename" type="email" placeholder="Email Address" name="Email_Address " value="<?php echo $Email_Address; ?>" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
											
											
											
											
										<div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Password</label>
                                                            <input id="couplename" type="password" placeholder="Password" name="Password " value="<?php echo $Password; ?>" required class="form-control ">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>							
											
											
											
											
											
											
											
											
											
											
											
											
                                            <div class="social-form-info mb-0">
                                                <div class="row">
                                                   
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <button class="btn btn-primary" name="Submit" type="submit">Update</button>
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

</body>

</html>