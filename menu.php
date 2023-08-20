<?php 
include('constants.php');
include('adminlogincheck.php');
?>

<!doctype html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="adminstyle.css" type="text/css">
 </head>
 <body>
     <section class="logo"> 
    <div class="logo"><a href="#"><img src="LOGO.png"></a></div> 
    </section>
    <ul>
        <li><a href="adminlogout.php">Log out</a></li>
  <li><a href="manage-contact.php">Messages</a></li>
          <li><a href="managehotels.php">Hotels</a></li>
        <li><a href="manageorders.php">Booking</a></li>
         <li><a href="manageevent.php">Event</a></li>
        <li><a href="managespots.php">Spots</a></li>
        <li><a href="manageadmin.php">Manage Admin</a></li>
        
</ul>
 <br />
    