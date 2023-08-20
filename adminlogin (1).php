<?php
include('constants.php');
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Admin Login Page</title>
</head>
  
<body>
    <form action="" method="post">
        <div class="login-box">
            <h1>Admin </h1>
    <?php
        if(isset($_SESSION['login']))
        {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
        }         
        if(isset($_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
    ?>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname" value="Enter Admin Name">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="Enter Paassword">
            </div>
  
            <input class="button" type="submit"
                     name="submit" value="Sign In">
        </div>
    </form>
</body>  
</html>

<?php 
if(isset($_POST['submit']))
{
    //get the data from the login form
    $adminname = $_POST['adminname'];
    $password = md5($_POST['password']);
    
    //sql query to check whether adminname and password exists or not
    $sql ="SELECT * from adminlogin WHERE adminname='$adminname' AND password='$password'";
    
    //execute sql query
    $res = mysqli_query($conn,$sql);
    
    //count rows to check whether the admin exists or not
    $count = mysqli_num_rows($res);
    
    if($count==1)
    {
        //$_SESSION['login']="<div class='success'>Log in is successfully done.</div>";
        $_SESSION['admin']="$adminname";//to check whether the admin is logged in or not and logout will unset it
        
        header('location:'.SITEURL.'manageadmin.php');//Redirect to adminHome page
    }
    else
    {
        $_SESSION['login']="<div class='error text-center'>Log in is failed.</div>";
        header('location:'.SITEURL.'adminlogin.php');
    }
}


?>