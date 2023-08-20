<?php
include('constants.php');

$id=$_GET['id'];

$sql= "DELETE from contact_us WHERE id=$id";

$res= mysqli_query($conn,$sql);

if($res==TRUE)
{
    //Query executed succesfully
    //echo "Admin DELETED";
    $_SESSION['delete']="<div class='success'>Message Deleted Successfully</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'manage-contact.php');
}
else
{
    //echo "Failed to delete Admin";
    $_SESSION['delete']="<div class='error'>Failed to delete message. Try again later.</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'manage-contact.php');
}

?>