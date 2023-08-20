<?php
include('constants.php');

if(isset($_GET['id']) AND isset($_GET['image_name']))
{
    $id=$_GET['id'];
    $image_name=$_GET['image_name'];
    
    if($image_name!="")
    {
        //image is available and remove it
        $path= "Hotel/".$image_name;
        
        $remove=unlink($path);
        
        if($remove == false)
        {
            //failed to remove the image so end process
            $_SESSION['remove']="<div class='error'>Failed to remove hotel/resort image. Try again later.</div>";
            //Redirect to manageevent page
            header('location:'.SITEURL.'managehotels.php');
            die();
        }
    }
    $sql= "DELETE from tbl_hotel_resort WHERE id=$id";//SQL query to delete data from DB
    $res=mysqli_query($conn, $sql);//execute the query
    
    //check whether the data is deleted from DB or not
    if($res==TRUE)
    {
    //Query executed succesfully
    //echo "Admin DELETED";
    $_SESSION['delete']="<div class='success'>Hotel/Resort Deleted Successfully</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'managehotels.php');
    }
    else
    {
    //echo "Failed to delete Category";
    $_SESSION['delete']="<div class='error'>Failed to delete hotel/resort. Try again later.</div>";
    //Redirect to manageevent page
    header('location:'.SITEURL.'managehotels.php');
    }   
}
else
{
    header('location:'.SITEURL.'managehotels.php');
}
?>