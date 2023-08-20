<?php include('menu.php');?>

<div class="main-content">
<div class="wrapper">
    <h1>Manage  Admin</h1>
    
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
    if(isset($_SESSION['user-not-found']))
    {
        echo $_SESSION['user-not-found'];
        unset($_SESSION['user-not-found']);
    }
    if(isset($_SESSION['pwd-not-match']))
    {
        echo $_SESSION['pwd-not-match'];
        unset($_SESSION['pwd-not-match']);
    }
    if(isset($_SESSION['change-pwd']))
    {
        echo $_SESSION['change-pwd'];
        unset($_SESSION['change-pwd']);
    }
    ?>
    <br/><br/>
    <a href="addadmin.php" class="btn-primary">Add Admin</a>
    <br/><br/>
    <table class="tbl-full">
    <tr><th>Serial No.</th>
        <th>ID</th>
        <th>Full Name</th>
        <th>Admin Name</th>
        <th>Actions</th>
    </tr>
        <?php
        $sql= "SELECT * from adminlogin";//query to get all admin
        
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
                    $full_name=$rows['full_name'];
                    $adminname=$rows['adminname'];
                    ?>
        <tr>
            <td><?php echo $sn++; ?></td>
            <td><?php echo $id; ?></td>
        <td><?php echo $full_name; ?></td>
        <td><?php echo $adminname; ?></td>
        <td>
            <a href="<?php echo SITEURL;?>updatepassword.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>
            <a href="<?php echo SITEURL;?>updateadmin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin</a>
         <a href="<?php echo SITEURL;?>deleteadmin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>
        </td>
    </tr>
        <?php
                }
            }
            else{}
        }
        
        
        ?>
    
        
    </table>
    </div>
</div>

<?php include('footer.php')?>
     
 </body>
</html>
