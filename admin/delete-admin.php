<?php 

include('../config/constants.php');

 $id = $_GET['id'];

 $sql = "DELETE FROM tbl_admin WHERE id=$id ";

 $res = mysqli_query($conn, $sql);

if($res == TRUE) 
{
$_SESSION['delete'] = "<div class='success' >Admin Deleted Successfully</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
}
else 
{
$_SESSION['delete'] = "<div  class='error' >Failed to Delete Admin. Try again Later </div> ";
header('location:'.SITEURL.'admin/manage-admin.php');
}


?>