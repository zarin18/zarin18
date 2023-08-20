<?php
include('constants.php');

if(isset($_GET['id']) AND isset($_GET['image_name']))
{
    $id=$_GET['id'];
    $image_name=$_GET['image_name'];
    
    if($image_name!="")
    {
        //image is available and remove it
        $path= "Event-Category/".$image_name;
        
        $remove=unlink($path);
        
        if($remove == false)
        {
            //failed to remove the image so end process
            $_SESSION['remove']="<div class='error'>Failed to remove category image. Try again later.</div>";
            //Redirect to manageevent page
            header('location:'.SITEURL.'manageevent.php');
            die();
        }
    }
    $sql= "DELETE from tbl_event_category WHERE id=$id";//SQL query to delete data from DB
    $res=mysqli_query($conn, $sql);//execute the query
    
    //check whether the data is deleted from DB or not
    if($res==TRUE)
    {
    //Query executed succesfully
    //echo "Admin DELETED";
    $_SESSION['delete']="<div class='success'>Category Deleted Successfully</div>";
    //Redirect to manageadmin page
    header('location:'.SITEURL.'manageevent.php');
    }
    else
    {
    //echo "Failed to delete Category";
    $_SESSION['delete']="<div class='error'>Failed to delete category. Try again later.</div>";
    //Redirect to manageevent page
    header('location:'.SITEURL.'manageevent.php');
    }   
}
else
{
    header('location:'.SITEURL.'manageevent.php');
}
?>