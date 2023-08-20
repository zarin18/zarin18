<?php include('menu.php');?>

<div class="main-content">
<div class="wrapper">
    <h1>Manage Tourist Spots</h1>
    
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
    if(isset($_SESSION['failed-remove']))
    {
        echo $_SESSION['failed-remove'];
        unset($_SESSION['failed-remove']);
    }
    if(isset($_SESSION['unauthorize']))
    {
        echo $_SESSION['unauthorize'];
        unset($_SESSION['unauthorize']);
    }
   
    ?>
    <br/><br/>
    <a href="<?php echo SITEURL;?>addspots.php" class="btn-primary">Add Spots</a>
    <br/><br/>
    <table class="tbl-full">
    <tr><th>Serial No.</th>
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Featured</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
        <?php
        $sql= "SELECT * from tbl_tourist_spots";//query to get all admin
        
        $res=mysqli_query($conn,$sql);//execute the query
        
        if($res==TRUE)
        {//count rows in DB to check whether we have data in DB or not
            $count = mysqli_num_rows($res);//function to get all the rows in database
            $sn=1;
            if($count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $id=$rows['id'];
                    $title=$rows['title'];
                    $price=$rows['price'];
                    $image_name=$rows['image_name'];
                    $featured=$rows['featured'];
                    $active=$rows['active'];
                    ?>
        <tr>
        <td><?php echo $sn++; ?></td>           
        <td><?php echo $title; ?></td>
        <td><?php echo $price;?> BDT</td>
        <td><?php 
            if($image_name!="")
                {
                 //display the image   
                ?>                               
                <img src="<?php echo SITEURL;?>Tourist-spot/<?php echo $image_name;?>" width="150px">
                <?php
                }
                else
                {
                    //display the message
                    echo "<div class='error'>No Image Available</div>";
                }
            ?></td>
        <td><?php echo $featured; ?></td>
        <td><?php echo $active; ?></td>
        <td>
            <a href="<?php echo SITEURL;?>update-spots.php?id=<?php echo $id;?>" class="btn-secondary">Update spot</a>
            <a href="<?php echo SITEURL;?>delete-spots.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-danger">Delete spot</a>
        </td>
    </tr>
        <?php
                }
            }
            else{
                echo "<tr><td colspan='7' class='error'>Tourist spot not added yet.</td></tr>";
            }
        }
        
        
        ?>
    
        
    </table>
    </div>
</div>

<?php include('footer.php')?>
     
 </body>
</html>
