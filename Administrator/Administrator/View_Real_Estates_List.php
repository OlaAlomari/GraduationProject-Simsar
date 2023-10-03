<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SimSar - Administrator Portal</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	        	<link rel="shortcut icon" href="../img/logo.png"/>

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsOne" aria-expanded="true" aria-controls="collapsOne">
          <i class="fas fa-fw fa-list"></i>
          <span>Categories</span>
        </a>
        <div id="collapsOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Add_New_Category.php">Add New Category</a>
            <a class="collapse-item" href="View_Categories_List.php">View Categories List</a>
          </div>
        </div>
      </li>
	  
	  
	  
	  
	  <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-building"></i>
          <span>Real Estates</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_Real_Estates_List.php">View Real Estates List</a>
          </div>
        </div>
      </li>
	  
	  
	  
	    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_Users_List.php">View Users List</a>
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
          Welcome To SimSar - Administrator Dashboard 
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           

          
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="../img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
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
		  View Real Estates List Information

        <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Category Name</th>
                                                                    <th>User Name</th>
                                                                    <th>User Phone Number</th>
                                                                    <th>Type</th>
                                                                    <th>Building Age</th>
                                                                    <th>Area</th>
                                                                    <th>Title</th>
                                                                    <th>Description</th>
                                                                    <th>Number Of Rooms</th>
                                                                    <th>Number Of Bathrooms</th>
                                                                    <th>Area Size</th>
                                                                    <th>Price</th>
                                                                    <th>View Location</th>
                                                                    <th>View Pictures</th>
                                                                    <th>Status</th>
                                                                    <th>Add Date / Time</th>

                                                                    <th data-orderable="false">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
															
															 <?php
					$sql1 = mysqli_query($dbConn,"select * from real_estates order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$RE_ID = $row1['ID'];
						$Category_ID = $row1['Category_ID'];
						$U_ID = $row1['U_ID'];
						$Title = $row1['Title'];
						$Type = $row1['Type'];
						$Building_Age = $row1['Building_Age'];
						
						
						
						
						$Area = $row1['Area'];
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
					
					
                                                                <tr>
                                                                    <td class="guest-name"><?php echo $RE_ID; ?></td>
                                                                    <td class="guest-name"><?php echo $Category_Name; ?></td>
                                                                    <td class="guest-name"><?php echo $U_Name; ?></td>
                                                                    <td class="guest-name"><?php echo $U_Phone_Number; ?></td>
                                                                    <td class="guest-name"><?php echo $Type; ?></td>
                                                                    <td class="guest-name"><?php echo $Building_Age; ?></td>
                                                                    <td class="guest-name"><?php echo $Area; ?></td>
                                                                    <td class="guest-name"><?php echo $Title; ?></td>
                                                                    <td class="guest-name"><?php echo $Description; ?></td>
                                                                    <td class="guest-name"><?php echo $Number_Of_Rooms; ?></td>
                                                                    <td class="guest-name"><?php echo $Number_Of_Bathrooms; ?></td>
                                                                    <td class="guest-name"><?php echo $Area_Size; ?></td>
                                                                    <td class="guest-name"><?php echo $Price; ?> JD</td>
<td class="guest-action"><center><a href="View_Location.php?Latitude=<?php echo $Latitude; ?>&Longitude=<?php echo $Longitude; ?>&Title=<?php echo $Title; ?>" class="btn btn-primary btn-xs mr10">View Location</a></td>
<td class="guest-action"><center><a href="View_Pictures.php?RE_ID=<?php $RE_ID; ?>" class="btn btn-primary btn-xs mr10">View Pictures</a></td>
                                                                  
                                                                                    <td class="guest-name"><?php echo $Status; ?></td>
                                                                    <td class="guest-name"><?php echo $Add_Date_Time; ?></td>
                                                 
<td class="guest-action"><center><a href="Edit_Real_Estate.php?RE_ID=<?php echo $RE_ID; ?>" class="btn btn-warning btn-xs mr10">Edit</a>
											
<br><br>
<a href="JavaScript:if(confirm('Are You Sure To Delete This SimSar ?')==true)
{window.location='Delete_Real_Estate.php?RE_ID=<?php echo $RE_ID; ?>';}" class="btn btn-danger btn-xs">Delete</a>

											</center>
																	
																	
</td></tr>
																
																
					<?php
					}
					?>
																
																</tbody>
																
                </table>
              </div>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
  
  
    <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
