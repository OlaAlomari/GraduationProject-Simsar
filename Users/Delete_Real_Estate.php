<?php
session_start();

$RE_ID=$_GET['RE_ID'];

require_once('includes/config.php');


mysqli_query($dbConn,"delete from real_estates where RE_ID='$RE_ID'");
mysqli_query($dbConn,"delete from real_estates_pictures where ID='$RE_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Real Estates Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Real_Estates_List.php';
        </script>";

?>