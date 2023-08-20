<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Update Admin</h1>
    <br/>
    <?php
    $id= $_GET['id'];//get the id of the selected admin
    
    $sql = "SELECT * from adminlogin WHERE id=$id"; //create sql query to get details
    
    $res= mysqli_query($conn,$sql);//execute the query
    
    if($res==TRUE)
    {
        $count= mysqli_num_rows($res);//check whether the data is available or not
        if($count==1)
        {
            //get details
            $row =mysqli_fetch_assoc($res);
            $full_name=$row['full_name'];
            $adminname=$row['adminname'];
        }
        else 
        {
            header("location:".SITEURL.'manageadmin.php');//redirect to manageadmin 
        }
        
    }
   
    ?>
    
    <br/><br/>
    <form action="" method="post">
    <table class="tbl-30">
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="full_name" value="<?php echo $full_name;?>"></td>
    </tr>
    <tr>
        <td>Admin name</td>
        <td><input type="text" name="adminname" value="<?php echo $adminname;?>"></td>
    </tr>
        <tr>
        <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" name="submit" value="Update Admin" class="btn-secondary"></td>
    </tr>
    </table>
    </form>
    </div>
</div>
<?php 
if(isset($_POST['submit']))
{
    //echo "Button Clicked";
    //get all the values from the form
     $id=$_POST['id'];
     $full_name=$_POST['full_name'];
     $adminname=$_POST['adminname'];
    
    //sql query to update admin
    $sql = "UPDATE adminlogin SET
    full_name='$full_name',
    adminname='$adminname' WHERE id='$id'
    ";
    
    $res =mysqli_query($conn,$sql);//execute the query
    if($res==TRUE)
    {
        $_SESSION['update']="<div class='success'>Admin updated successfully</div>";
        header('location:'.SITEURL.'manageadmin.php');
    }
    else
    {
        $_SESSION['update']="<div class='error'>Failed to update admin. Try again later.</div>";
        header('location:'.SITEURL.'manageadmin.php');
    }
    
}

?>
<?php include('footer.php')?>
     
