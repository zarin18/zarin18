<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Add Spots</h1>
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
        <td><input type="text" name="title" placeholder="Title of the tourist spot"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><textarea name="description" cols="30" rows="10" placeholder="Description of the tourist spot"></textarea></td>
    </tr>
    <tr>
        <td>Price in BDT</td>
        <td><input type="number" name="price"></td>
    </tr>
    <tr>
        <td>Select Image</td>
        <td><input type="file" name="image"></td>
    </tr>
        <tr>
            <td>Event category</td>
            <td><select name="event_category">
                
                <?php 
                //sql query to get all active categories from db
                $sql="SELECT * from tbl_event_category WHERE active='Yes'";
                //executing queries
                $res=mysqli_query($conn,$sql);
                //count rows to check whether we categories or not
                $count=mysqli_num_rows($res);
                
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        
                        ?>
                <option value="<?php echo $id;?>"><?php echo $title;?></option>
                
                <?php
                    }
                    
                }
                else
                {
                    //no category found
                    ?>
                <option value="0">No event category found</option>
                <?php
                }
                
                
                
                
                ?>
                
            
                </select></td>
        </tr>
    <tr>
        <td>Featured</td>
        <td><input type="radio" name="featured" value="Yes">Yes</td>
        <td><input type="radio" name="featured" value="No">No</td>
    </tr>
    <tr>
        <td>Active</td>
        <td><input type="radio" name="active" value="Yes">Yes</td>
        <td><input type="radio" name="active" value="No">No</td>
    </tr>
        <tr>
        <td colspan="2">
        <input type="submit" name="submit" value="Add Tourist Spots" class="btn-secondary"></td>
    </tr>
    </table>
    </form>
    <?php
if(isset($_POST['submit']))
{
    //getthedatafromtheFORM
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $event_category = $_POST['event_category'];
    
    //for RADIO INLINE to check whether the button is pressed or not
    if(isset($_POST['featured']))
    {
        $featured=$_POST['featured'];
    }
    else 
    {
        $featured="No";
    }
    
    if(isset($_POST['active']))
    {
        $active=$_POST['active'];
    }
    else 
    {
        $active="No";
    }
    
    //check whether the image is clicked or not and upload it only if it is selected    
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
        $image_name= "Tourist-spot_".rand(0000,9999).'.'.$ext;       
        
        $source_path=$_FILES['image']['tmp_name'];
        $destination_path="Tourist-spot/".$image_name;
        
        //upload the image
        $upload=move_uploaded_file($source_path,$destination_path);
        
        //check if the image is uploaded or not
        //if not uploaded then we will stop the process and redirect error message 
        if($upload==false)
        {
            $_SESSION['upload']="<div class='error'>Failed to upload the image.</div>";//error message
            header("location:".SITEURL.'addspots.php');//redirect
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
    //numerical value does not need QUOTES ''
    $sql2 = "INSERT INTO tbl_tourist_spots SET
title='$title',
description='$description',
price=$price, 
image_name='$image_name',
event_cat_id=$event_category,
featured='$featured',
active='$active'
";

$res2= mysqli_query($conn,$sql2);//executeQueryANDsavedatainDB

    //check whether the query executed or not and data added or not
    if($res2==TRUE)
    {
        $_SESSION['add']="<div class='success'>Spot added successfully</div>";
        header("location:".SITEURL.'managespots.php');//YOU_NEED_TO_EDIT_IT
    }
    else{ $_SESSION['add']="<div class='error'>Failed to add spot</div>";
        header("location:".SITEURL.'addspots.php');}
}



?>
    </div>
</div>

<?php include('footer.php')?>
     
