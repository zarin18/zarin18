<?php
//Authorization-access control
//check whether the admin is logged in or not
if(!isset($_SESSION['admin']))
{
    //admin is not logged in
    //redirect to the log in page with message
    $_SESSION['no-login-message']="<div class='error text-center'>Please login to access admin panel</div>";
        //redirect to the adminlogin page
        header('location:'.SITEURL.'adminlogin.php');
}

?>
