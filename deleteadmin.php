<?php
include('constants.php');

$id=$_GET['id'];

$sql= "DELETE from adminlogin WHERE id=$id";

$res= mysqli_query($conn,$sql);

if($res==TRUE)
{
    //Query executed succesfully
    //echo "Admin DELETED";
    $_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'manageadmin.php');
}
else
{
    //echo "Failed to delete Admin";
    $_SESSION['delete']="<div class='error'>Failed to delete admin. Try again later.</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'manageadmin.php');
}

?>