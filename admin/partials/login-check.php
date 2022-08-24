<?php 
if(!isset($_SESSION['user']))
{
   $_SESSION['no-login-message'] = "<div class='error'>Please login to acces Admin panel</div>";

   header('location:'.SITEURL.'admin/login.php');
}

?>