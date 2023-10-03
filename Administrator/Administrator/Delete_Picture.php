<?php
session_start();

$P_ID=$_GET['P_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from real_estates_pictures where ID='$P_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Picture Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Real_Estates_List.php';
        </script>";

?>