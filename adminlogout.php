<?php
include('constants.php');

session_destroy();//Unsets $_SESSION=['admin']

header('location:'.SITEURL);

?>