<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Update Hotel/Resort</h1>
    <br/>
    <?php
    
    if(isset($_GET['id']))
       {
           $id=$_GET['id'];
        $sql = "SELECT * from tbl_hotel_resort WHERE id=$id"; //create sql query to get details
        
        $res= mysqli_query($conn,$sql);//execute the query
        $count= mysqli_num_rows($res);//check whether the data is available or not
        
        if($count==1)
        {
            //get details
            $row =mysqli_fetch_assoc($res);
            $title=$row['title'];
            $details=$row['details'];
            $address=$row['address'];
            $current_image=$row['image_name'];
            $contact_no=$row['contact_no'];
            $price_range=$row['price_range'];
            $room_type=$row['room_type'];
            $active=$row['active'];
        }
        else 
        {
             $_SESSION['no-hotel-found']="<div class='success'>Hotel/Resort not found</div>";            
            
            header("location:".SITEURL.'managehotels.php');//redirect to manageevent 
        }
        
       }
    else
       {
           header("location:".SITEURL.'managehotels.php');//redirect to manageevent 
       }
    
    
    
    ?>
    
    <br/><br/>
    <form action="" method="post" enctype="multipart/form-data">
    <table class="tbl-30">
    <tr>
        <td>Title</td>
        <td><input type="text" name="title" value="<?php echo $title;?>"></td>
    </tr>
        <tr>
        <td>Address</td>
        <td><textarea name="address" cols="30" rows="5"><?php echo $address;?></textarea></td>
    </tr>
        <tr>
        <td>Details</td>
        <td><textarea name="details" cols="30" rows="5"><?php echo $details;?></textarea></td>
    </tr>
        <tr>
        <td>Contact no.</td>
        <td><input type="number" name="contact_no" value="<?php echo $contact_no;?>"></td>
    </tr>
        <tr>
        <td>Room Type</td>
        <td><input type="text" name="room_type" value="<?php echo $room_type;?>"></td>
    </tr>
        <tr>
        <td>Price Range</td>
        <td><input type="text" name="price_range" value="<?php echo $price_range;?>"></td>
    </tr>
    <tr>
        <td>Current Image</td>
        <td>
        <?php
            if($current_image!="")
            {
                 //display the image   
                ?>                               
                <img src="<?php echo SITEURL;?>Hotel/<?php echo $current_image;?>" width="200px">
                <?php
            }
            else{
                 //display the message
                    echo "<div class='error'>No Image Available</div>";
            }
            
            ?>
        </td>
    </tr>
        <tr>
        <td>New Image</td>
        <td><input type="file" name="image" value="<?php echo $image_name;?>"></td>
    </tr>
        
    <tr>
        <td>Active</td>
        <td><input <?php if($active=="Yes"){echo "checked";} ?> type="radio" name="active" value="Yes">Yes</td>
        <td><input <?php if($active=="No"){echo "checked";} ?> type="radio" name="active" value="No">No</td>
    </tr>
        <tr>
        <td colspan="2">
            <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
            <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" name="submit" value="Update Hotel/Resort" class="btn-secondary"></td>
    </tr>
    </table>
    </form>
    <?php 
if(isset($_POST['submit']))
{
    //echo "Button Clicked";
    //get all the values from the form
     $id=$_POST['id'];
     $title=$_POST['title'];
     $current_image=$_POST['current_image'];
    $address=$_POST['address'];
    $contact_no=$_POST['contact_no'];
    $room_type=$_POST['room_type'];
    $price_range=$_POST['price_range'];
    $details=$_POST['details'];
    $active=$_POST['active'];
    
    //check whether the image is updated or not
    if(isset($_FILES['image']['name']))
    {
        //Upload the image
        //to upload image we need image name, source path and destination path
        $image_name=$_FILES['image']['name'];
        
        //upload the image only if it is selected
        if($image_name!="")
        {
            //Auto rename our image 
        
        $ext= end(explode('.',$image_name));//Get the extension of our image
        $image_name= "Hotel_".rand(000,999).'.'.$ext;       
        
        $source_path=$_FILES['image']['tmp_name'];
        $destination_path="Hotel/".$image_name;
        
        //upload the image
        $upload=move_uploaded_file($source_path,$destination_path);
        
        //check if the image is uploaded or not
        //if not uploaded then we will stop the process and redirect error message 
        if($upload==false)
        {
            $_SESSION['upload']="<div class='error'>Failed to upload the image.</div>";//error message
            header("location:".SITEURL.'managehotels.php');//redirect
            die();//stop the process
        }
            //remove current image if available
            if($current_image!="")
            {
                $remove_path="Hotel/".$current_image;
            $remove=unlink($remove_path);
            
            if($remove==false)
            {
                //failed to remove the image
                $_SESSION['failed-remove']="<div class='error'>Failed to remove the image.</div>";
                header("location:".SITEURL.'managehotels.php');//redirect
                die();//stop the process
            }
            }           
            
        }       
        else
        {
            $image_name=$current_image;
        }
    }
    else 
    {
        //don't upload the image and set the image value as blank
        $image_name=$current_image;
    }
    
    
    
    //sql query to update category
    $sql2 = "UPDATE tbl_hotel_resort SET
    title='$title',
    image_name='$image_name',
    address='$address',
     details='$details',
    active='$active',
contact_no='$contact_no',
room_type='$room_type',
price_range='$price_range' WHERE id='$id'
    ";
    
    $res2 =mysqli_query($conn,$sql2);//execute the query
    if($res2==TRUE)
    {
        $_SESSION['update']="<div class='success'>Hotel/Resort updated successfully</div>";
        header('location:'.SITEURL.'managehotels.php');
    }
    else
    {
        $_SESSION['update']="<div class='error'>Failed to update hotel/resort. Try again later.</div>";
        header('location:'.SITEURL.'managehotels.php');
    }
    
}

?>
    </div>
</div>

<?php include('footer.php')?>
     
