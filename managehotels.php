<?php include('menu.php');?>

<div class="main-content">
<div class="wrapper">
    <h1>Manage Hotels and Resorts</h1>
    
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
    <a href="<?php echo SITEURL;?>addhotels.php" class="btn-primary">Add Hotel/Resort</a>
    <br/><br/>
    <table class="tbl-full">
    <tr><th>Serial No.</th>        
        <th>Title</th>
        <th>Image</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
        <?php
        $sql= "SELECT * from tbl_hotel_resort";//query to get all event category
        
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
                $title=$row['title'];
                $image_name=$row['image_name'];
                $address=$row['address'];
                $details=$row['details'];
                $active=$row['active'];
                
                ?> 
    <tr>
            <td><?php echo $sn++; ?></td>
            
            <td><?php echo $title; ?></td>
            <td>
                <?php 
                //Check if the image name is available or not
                if($image_name!="")
                {
                 //display the image   
                ?>                               
                <img src="<?php echo SITEURL;?>Hotel/<?php echo $image_name;?>" width="100px">
                <?php
                }
                else
                {
                    //display the message
                    echo "<div class='error'>No Image Available</div>";
                }
                ?>
            
            </td>            
            <td><?php echo $active; ?></td>
            <td>
            <a href="<?php echo SITEURL;?>update-hotels.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-secondary">Update Hotel/Resort</a>
         <a href="<?php echo SITEURL;?>delete-hotels.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-danger">Delete Hotel/Resort</a>
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
        <td colspan="6"><div class="error">No hotel/resort added.</div>
        </tr>
        
            <?php
        }
            
        ?>
        
                    
    </table>
    </div>
</div>

<?php include('footer.php')?>
     
 
