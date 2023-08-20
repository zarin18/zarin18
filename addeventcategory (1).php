<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Add Event Category</h1>
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
        <td><input type="text" name="title" placeholder="Category title"></td>
    </tr>
        <tr>
        <td>Select Image</td>
        <td><input type="file" name="image"></td>
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
        <input type="submit" name="submit" value="Add Event Category" class="btn-secondary"></td>
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
        $image_name= "Event-Category_".rand(000,999).'.'.$ext;       
        
        $source_path=$_FILES['image']['tmp_name'];
        $destination_path="Event-Category/".$image_name;
        
        //upload the image
        $upload=move_uploaded_file($source_path,$destination_path);
        
        //check if the image is uploaded or not
        //if not uploaded then we will stop the process and redirect error message 
        if($upload==false)
        {
            $_SESSION['upload']="<div class='error'>Failed to upload the image.</div>";//error message
            header("location:".SITEURL.'addeventcategory.php');//redirect
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
    $sql = "INSERT INTO tbl_event_category SET
title='$title',
image_name='$image_name',
featured='$featured',
active='$active'
";

$res= mysqli_query($conn,$sql);//executeQueryANDsavedatainDB

    //check whether the query executed or not and data added or not
    if($res==TRUE)
    {
        $_SESSION['add']="<div class='success'>Event category added successfully</div>";
        header("location:".SITEURL.'manageevent.php');//YOU_NEED_TO_EDIT_IT
    }
    else{ $_SESSION['add']="<div class='error'>Failed to add event category</div>";
        header("location:".SITEURL.'addeventcategory.php');}
}



?>