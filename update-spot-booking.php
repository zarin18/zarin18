<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Update Booking</h1>
    <br/>
    <?php
    $id= $_GET['id'];//get the id of the selected admin
    
    $sql = "SELECT * from tbl_booking WHERE id=$id"; //create sql query to get details
    
    $res= mysqli_query($conn,$sql);//execute the query
    
    if($res==TRUE)
    {
        $count= mysqli_num_rows($res);//check whether the data is available or not
        if($count==1)
        {
            //get details
            $row =mysqli_fetch_assoc($res);
            $first_name1=$row['first_name1'];
            $email1=$row['email1'];
            $spot_id=$row['spot_id'];
            $status=$row['status'];
            
        }
        else 
        {
            header("location:".SITEURL.'manageorders.php');//redirect to manageadmin 
        }
        
    }
   
    ?>
    
    <br/><br/>
    <form action="" method="post">
    <table class="tbl-30">
    <tr>
        <td>Name</td>
        <td><input type="text" name="first_name1" value="<?php echo $first_name1;?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email1" value="<?php echo $email1;?>"></td>
    </tr>
    <tr>
        <td>Spot ID</td>
        <td><input type="number" name="spot_id" value="<?php echo $spot_id;?>"></td>
    </tr>
        
        <tr>
        <td>Status</td>
        <td>
        <select name="status">
               
            <option value="reserved">Reserved</option>  
            <option value="done">Done</option>
        </select>
            </td>
    </tr>
        <tr>
        <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" name="submit" value="Update Booking" class="btn-secondary"></td>
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
     $first_name1=$_POST['first_name1'];
     $email1=$_POST['email1'];
    
    $spot_id=$_POST['spot_id'];
     $status=$_POST['status'];
    
    //sql query to update admin
    $sql = "UPDATE tbl_booking SET
    first_name1='$first_name1',
    email1='$email1',
    spot_id='$spot_id',
    
    status='$status'  
    WHERE id='$id'
    ";
    
    $res =mysqli_query($conn,$sql);//execute the query
    if($res==TRUE)
    {
        $_SESSION['update']="<div class='success'>Booking updated successfully</div>";
        header('location:'.SITEURL.'manageorders.php');
    }
    else
    {
        $_SESSION['update']="<div class='error'>Failed to update booking. Try again later.</div>";
        header('location:'.SITEURL.'manageorders.php');
    }
    
}

?>
<?php include('footer.php')?>
     
