<?php include('constants.php');?>
<?php include('New_Login/userlogincheck.php');?>
<html>
<head>
    <title>SEATM</title>
    <link rel="stylesheet" href="Home%20page.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    </head>
    
<body>

    <section class="logo"> 
    <div class="logo"><img src="LOGO.png"></div> 
    </section>
    <section><div class="main">
                 <div class="menu">
        
            
            <ul class="nav">
                <li><a href="<?php echo SITEURL;?>index(after-login).php">Home</a></li>
                <li><a href="<?php echo SITEURL;?>Hotels.php">Hotel</a></li>
                <li><a href="">Tourist Spot</a>
                <ul class="sub-menu">    
                    <li><a href="<?php echo SITEURL;?>Maldives-tourist-spot.php">Maldives</a></li>
                     <li><a href="<?php echo SITEURL;?>Bangladesh-tourist-spot.php">Bangladesh</a></li>
                    <li><a href="<?php echo SITEURL;?>India-tourist-spot.php">India</a></li>
                    <li><a href="<?php echo SITEURL;?>Pakistan-tourist-spot.php">Pakistan</a></li>
                    <li><a href="<?php echo SITEURL;?>Nepal-tourist-spot.php">Nepal</a></li>
                    <li><a href="<?php echo SITEURL;?>Bhutan-tourist-spot.php">Bhutan</a></li>
                    <li><a href="<?php echo SITEURL;?>SriLanka-tourist-spot.php">Sri Lanka</a></li>                
                </ul>
                </li>             
                <li ><a href="">Gallery</a>
                <ul class="sub-menu">    
                    <li><a href="<?php echo SITEURL;?>Maldives-gallery.php">Maldives</a></li>
                     <li><a href="<?php echo SITEURL;?>Bangladesh-gallery.php">Bangladesh</a></li>
                    <li><a href="<?php echo SITEURL;?>India-gallery.php">India</a></li>
                    <li><a href="<?php echo SITEURL;?>Pakistan-gallery.php">Pakistan</a></li>
                    <li><a href="<?php echo SITEURL;?>Nepal-gallery.php">Nepal</a></li>
                    <li><a href="<?php echo SITEURL;?>Bhutan-gallery.php">Bhutan</a></li>
                    <li><a href="<?php echo SITEURL;?>SriLanka-gallery.php">Sri Lanka</a></li>                
                </ul>
                </li>   
                
                
                <li><a href="">Cuisine</a>
                <ul class="sub-menu">    
                    <li><a href="<?php echo SITEURL;?>Cuisine-Prime/maldivesCuisine.php">Maldives</a></li>
                     <li><a href="<?php echo SITEURL;?>Cuisine-Prime/BdCuisine.php">Bangladesh</a></li>
                    <li><a href="<?php echo SITEURL;?>Cuisine-Prime/India-Cuisine.php">India</a></li>
                    <li><a href="<?php echo SITEURL;?>Cuisine-Prime/Pakistan-cuisine.php">Pakistan</a></li>
                    <li><a href="<?php echo SITEURL;?>Cuisine-Prime/nepalCuisine.php">Nepal</a></li>
                    <li><a href="<?php echo SITEURL;?>Cuisine-Prime/Bhutan-cuisine.php">Bhutan</a></li>
                    <li><a href="<?php echo SITEURL;?>Cuisine-Prime/SrilankaCuisine.php">Sri Lanka</a></li>                
                </ul>
                </li>
                
                <li><a href="<?php echo SITEURL;?>Events.php">Event</a></li>
                <li><a href="<?php echo SITEURL;?>Contact_US/ContactUs.php">Contact us</a></li>      <li><a href="<?php echo SITEURL;?>New_Login/profile.php">MyProfile</a></li>                   
                </ul>        
        </div>
    </div>
    </section>
    