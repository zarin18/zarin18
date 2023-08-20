<?php
include('constants.php');

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    
    $sql= "DELETE from tbl_booking WHERE id=$id";//SQL query to delete data from DB
    $res=mysqli_query($conn, $sql);//execute the query
    
    //check whether the data is deleted from DB or not
    if($res==TRUE)
    {
    //Query executed succesfully
    //echo "Admin DELETED";
    $_SESSION['delete']="<div class='success'>Booking Deleted Successfully</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'manageorders.php');
    }
    else
    {
    //echo "Failed to delete Category";
    $_SESSION['delete']="<div class='error'>Failed to delete booking. Try again later.</div>";
    //Redirect to manageevent page
    header('location:'.SITEURL.'manageorders.php');
    }   
}
else
{
    header('location:'.SITEURL.'manageorders.php');
}
?>