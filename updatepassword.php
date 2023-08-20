<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Update Password</h1>
    <br/>
    <?php
    $id= $_GET['id'];
    ?>
    <br/><br/>
    <form action="" method="post">
    <table class="tbl-30">
    <tr>
        <td>Current Password</td>
        <td><input type="password" name="current_pw" placeholder="Current Password"></td>
    </tr>
    <tr>
        <td>New Password</td>
        <td><input type="password" name="new_pw" placeholder="New Password"></td>
    </tr>
        <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="confirm_pw" placeholder="Confirm Password"></td>
    </tr>
        <tr>
        <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" name="submit" value="Change Password" class="btn-secondary"></td>
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
     $current_pw=md5($_POST['current_pw']);
    $new_pw=md5($_POST['new_pw']);
    $confirm_pw=md5($_POST['confirm_pw']); 
    
    //sql query to update password
    $sql = "SELECT * adminlogin WHERE id=$id AND password='$current_pw'";
    
    $res= mysqli_query($conn,$sql);//execute the query
    
    if($res==true)
    {
        $count= mysqli_num_rows($res);//check whether the data is available or not
        if($count==1)
        {
            if($new_pw==$confirm_pw)
            {
                $sql2= "UPDATE adminlogin SET
                password='$new_pw' WHERE id=$id";
                
                $res2= mysqli_query($conn,$res2);
                if($res2==true)
                {
                    $_SESSION['change-pwd']="<div class='success'>Password changed</div>";
                    header('location:'.SITEURL.'manageadmin.php');
                }
                else 
                {
                    $_SESSION['change-pwd']="<div class='error'>Password did not change</div>";
                    header('location:'.SITEURL.'manageadmin.php');
                }
            }
            else 
            {
                $_SESSION['pwd-not-match']="<div class='error'>Password did not match</div>";
        header('location:'.SITEURL.'manageadmin.php');
            }
            
        }
        else 
        {
            $_SESSION['user-not-found']="<div class='error'>Admin not found</div>";
        header('location:'.SITEURL.'manageadmin.php');
        }
        
    }
    
}

?>
<?php include('footer.php')?>
     
