<?php include('menu.php');?>

<div class="main-content">
<div class="wrapper">
    <h1>Manage Bookings</h1>
    
    <?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    if(isset($_SESSION['delete']))
    {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }
    if(isset($_SESSION['update']))
    {
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    }
    if(isset($_SESSION['remove']))
    {
        echo $_SESSION['remove'];
        unset($_SESSION['remove']);
    }
    if(isset($_SESSION['no-hotel-found']))
    {
        echo $_SESSION['no-hotel-found'];
        unset($_SESSION['no-hotel-found']);
    }
    if(isset($_SESSION['upload']))
    {
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
    }
    if(isset($_SESSION['failed-remove']))
    {
        echo $_SESSION['failed-remove'];
        unset($_SESSION['failed-remove']);
    }
    
    ?>
    <br/><br/>
    <a href="<?php echo SITEURL;?>manage-hotel-bookings.php" class="btn-primary">See resort/hotel bookings</a>
    <br/><br/>
    <table class="tbl-full">
    <tr><th>S.N</th>        
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Pickup Address</th>
        <th>Drop Address</th>
        <th>Action</th>
        
    </tr>
        <?php
        $sql= "SELECT * from tbl_booking";//query to get all event category
        
        $res=mysqli_query($conn,$sql);//execute the query
        
        //count rows in DB to check whether we have data in DB or not
        $count = mysqli_num_rows($res);
        
        //create serial number variable and assign value 1
        $sn=1;
       
        if($count>0)
        {
            //we have data in DB
            //get the data and display
            while($row=mysqli_fetch_assoc($res))
            {
                $id=$row['id'];
                $first_name1=$row['first_name1'];
                $email1=$row['email1'];
                $mobile_no1=$row['mobile_no1'];
                $pickup_address=$row['pickup_address'];
                $drop_address=$row['drop_address'];
                
                
                ?> 
    <tr>
            <td><?php echo $sn++; ?></td>
            
            <td><?php echo $first_name1; ?></td>
                      
            <td><?php echo $email1; ?></td>
        
            <td><?php echo $mobile_no1; ?></td>
        <td><?php echo $pickup_address; ?></td>
        <td><?php echo $drop_address; ?></td>
        
            
            <td>
          <a href="<?php echo SITEURL;?>update-spot-booking.php?id=<?php echo $id;?>" class="btn-secondary">Update</a>  
         <a href="<?php echo SITEURL;?>delete-spot-booking.php?id=<?php echo $id;?>" class="btn-danger">Delete</a>
            </td>
    </tr>  
                <?php
            }
        }
        else
        {
            //we don't have data in DB
            //we will display the message inside the table
            ?>
        <tr>
        <td colspan="6"><div class="error">No tourist spot booked.</div>
        </tr>
        
            <?php
        }
            
        ?>
        
                    
    </table>
    </div>
</div>

<?php include('footer.php')?>
     
 
