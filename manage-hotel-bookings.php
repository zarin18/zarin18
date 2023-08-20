<?php include('menu.php');?>

<div class="main-content">
<div class="wrapper">
    <h1>Manage Hotel and Resort Bookings</h1>
    
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
    <br/><br/>
    <table class="tbl-full">
    <tr><th>S.N</th>        
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Adults</th>
        <th>Kids</th>
        <th>Room-type</th>
        <th>Arrival</th>
        <th>Departure</th>
        <th>Action</th>
        
    </tr>
        <?php
        $sql= "SELECT * from tbl_resort_reservation ORDER BY id DESC";//query to get all event category
        
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
                $first_name=$row['first_name'];
                $email=$row['email'];
                $mobile_no=$row['mobile_no'];
                $guests=$row['guests'];
                $kids=$row['kids'];
                $room_type=$row['room_type'];
                $arrival=$row['arrival'];
               $departure=$row['departure'];
                
                ?> 
    <tr>
            <td><?php echo $sn++; ?></td>
            
            <td><?php echo $first_name; ?></td>
                      
            <td><?php echo $email; ?></td>
        
            <td><?php echo $mobile_no; ?></td>
        <td><?php echo $guests; ?></td>
        <td><?php echo $kids; ?></td>
        <td><?php echo $room_type; ?></td>
        <td><?php echo $arrival; ?></td>
        <td><?php echo $departure; ?></td>
        
            
            <td>
               <a href="<?php echo SITEURL;?>update-hotel-booking.php?id=<?php echo $id;?>" class="btn-secondary">Update</a>
         <a href="<?php echo SITEURL;?>delete-hotel-booking.php?id=<?php echo $id;?>" class="btn-danger">Delete</a>
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
        <td colspan="6"><div class="error">No hotel/resort reserved.</div>
        </tr>
        
            <?php
        }
            
        ?>
        
                    
    </table>
    </div>
</div>

<?php include('footer.php')?>
     
 
