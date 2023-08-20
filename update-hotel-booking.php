<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Update Hotel/Resort Reservation</h1>
    <br/>
    <?php
    $id= $_GET['id'];//get the id of the selected admin
    
    $sql = "SELECT * from tbl_resort_reservation WHERE id=$id"; //create sql query to get details
    
    $res= mysqli_query($conn,$sql);//execute the query
    
    if($res==TRUE)
    {
        $count= mysqli_num_rows($res);//check whether the data is available or not
        if($count==1)
        {
            //get details
            $row =mysqli_fetch_assoc($res);
            $first_name=$row['first_name'];
            $email=$row['email'];
            $arrival=$row['arrival'];
            $departure=$row['departure'];
            $status=$row['status'];
            
        }
        else 
        {
            header("location:".SITEURL.'manage-hotel-bookings.php');//redirect to manageadmin 
        }
        
    }
   
    ?>
    
    <br/><br/>
    <form action="" method="post">
    <table class="tbl-30">
    <tr>
        <td>Name</td>
        <td><input type="text" name="first_name" value="<?php echo $first_name;?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?php echo $email;?>"></td>
    </tr>
    <tr>
        <td>Arrival</td>
        <td><input type="datetime" name="arrival" value="<?php echo $arrival;?>"></td>
    </tr>
        <tr>
        <td>Departure</td>
        <td><input type="datetime" name="departure" value="<?php echo $departure;?>"></td>
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
        <input type="submit" name="submit" value="Update Hotel/Resort Reservation" class="btn-secondary"></td>
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
     $first_name=$_POST['first_name'];
     $email=$_POST['email'];
    $arrival=$_POST['arrival'];
    $departure=$_POST['departure'];
     $status=$_POST['status'];
    
    //sql query to update admin
    $sql = "UPDATE tbl_resort_reservation SET
    first_name='$first_name',
    email='$email',
    arrival='$arrival',
    departure='$departure',
    status='$status'  
    WHERE id='$id'
    ";
    
    $res =mysqli_query($conn,$sql);//execute the query
    if($res==TRUE)
    {
        $_SESSION['update']="<div class='success'>Hotel/Resort reservation updated successfully</div>";
        header('location:'.SITEURL.'manage-hotel-bookings.php');
    }
    else
    {
        $_SESSION['update']="<div class='error'>Failed to update hotel/resort reservation. Try again later.</div>";
        header('location:'.SITEURL.'manage-hotel-bookings.php');
    }
    
}

?>
<?php include('footer.php')?>
     
