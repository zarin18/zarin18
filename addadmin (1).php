<?php include('menu.php');?>


<div class="main-content">
<div class="wrapper">
    <h1>Add Admin</h1>
    <br/>
    <?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    ?>
    
    <br/><br/>
    <form action="" method="post">
    <table class="tbl-30">
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="full_name" placeholder="Enter the name"></td>
    </tr>
    <tr>
        <td>Admin name</td>
        <td><input type="text" name="adminname" placeholder="Enter the admin name"></td>
    </tr>
        <tr>
        <td>Password</td>
        <td><input type="password" name="password" placeholder="Enter the password"></td>
    </tr>
        <tr>
        <td colspan="2">
        <input type="submit" name="submit" value="Add Admin" class="btn-secondary"></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<?php include('footer.php')?>
     
<?php
if(isset($_POST['submit']))
{
    //getthedatafromFORM
    $full_name = $_POST['full_name'];
     $adminname = $_POST['adminname'];
     $password = md5($_POST['password']);
    //SQLquery
    $sql = "INSERT INTO adminlogin SET
full_name='$full_name',
adminname='$adminname',
password='$password'
";



$res= mysqli_query($conn,$sql) or die(mysqli_error());//executeQueryANDsavedatainDB
    
    if($res==TRUE)
    {
        $_SESSION['add']="<div class='success'>Admin added</div>";
        header("location:".SITEURL.'manageadmin.php');//YOU_NEED_TO_EDIT_IT
    }
    else{ $_SESSION['add']="<div class='error'>Failed to add admin</div>";
        header("location:".SITEURL.'addadmin.php');}
}



?>