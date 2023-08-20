<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Add Hotel/Resort</h1>
    <br/>
    
    <?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    if(isset($_SESSION['upload']))
    {
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
    }
    ?>    
    <br/><br/>
    
    <form action="" method="post" enctype="multipart/form-data">
    <table class="tbl-30">
    <tr>
        <td>Title</td>
        <td><input type="text" name="title" placeholder="Hotel/Resort title"></td>
    </tr>
        <tr>
        <td>Select Image</td>
        <td><input type="file" name="image"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><textarea name="address" cols="30" rows="10" placeholder="Address of the hotel or resort"></textarea></td>
    </tr>
        <tr>
        <td>Details</td>
        <td><textarea name="details" cols="30" rows="10" placeholder="Details of the hotel or resort"></textarea></td>
    </tr>
        <tr>
        <td>Contact No.</td>
        <td><input type="number" name="contact_no" placeholder="Hotel/Resort contact no."></td>
    </tr>
        <tr>
        <td>Room Type</td>
        <td><input type="text" name="room_type" placeholder="Hotel/Resort available room types"></td>
    </tr>
        <tr>
        <td>Price Range</td>
        <td><input type="text" name="price_range" placeholder="Hotel/Resort price_range"></td>
    </tr>
    <tr>
        <td>Active</td>
        <td><input type="radio" name="active" value="Yes">Yes</td>
        <td><input type="radio" name="active" value="No">No</td>
    </tr>
        <tr>
        <td colspan="2">
        <input type="submit" name="submit" value="Add Hotel/Resort" class="btn-secondary"></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<?php include('footer.php')?>
     
<?php
if(isset($_POST['submit']))
{
    //getthedatafromtheFORM
    $title = $_POST['title'];
    $address = $_POST['address'];
    $details = $_POST['details'];
    $contact_no = $_POST['contact_no'];
    $room_type = $_POST['room_type'];
    $price_range = $_POST['price_range'];
    
    //for RADIO INLINE to check whether the button is pressed or not
    
    
    if(isset($_POST['active']))
    {
        $active=$_POST['active'];
    }
    else 
    {
        $active="No";
    }
    //check whether the image is selected or not
    //print_r($_FILES['image']);
    //die();//break the code here
    
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
            header("location:".SITEURL.'addhotels.php');//redirect
            die();//stop the process
        }
        }       
    }
    else 
    {
        //don't upload the image and set the image value as blank
        $image_name="";
    }
    
    //SQL query
    $sql = "INSERT INTO tbl_hotel_resort SET
title='$title',
image_name='$image_name',
address='$address',
details='$details',
active='$active',
contact_no='$contact_no',
room_type='$room_type',
price_range='$price_range'
";

$res= mysqli_query($conn,$sql);//executeQueryANDsavedatainDB

    //check whether the query executed or not and data added or not
    if($res==TRUE)
    {
        $_SESSION['add']="<div class='success'>Hotel/Resort added successfully</div>";
        header("location:".SITEURL.'managehotels.php');//YOU_NEED_TO_EDIT_IT
    }
    else{ $_SESSION['add']="<div class='error'>Failed to add Hotel/Resort</div>";
        header("location:".SITEURL.'addhotels.php');}
}



?>