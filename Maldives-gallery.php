<?php include('constants.php');?>
<!doctype html>
<html>
<head>
    <title>
    Maldives Image Gallery
    </title>
    <link rel="stylesheet" type="text/css" href="Maldives%20gallery.css">
    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
<style>
.header 
{
  
    background-image:url(maldives2.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}

.title h1{
    color: sandybrown;
    font-size: 70px;
    font-family: "Times New Roman", serif;
}
.title h2
{
    margin-top: 5%;
     color:black;
    font-size: 30px;
    font-family: "Brush Script MT", cursive;
}
</style>

</head>
<body>    
    <section class="logo"> 
    <a href="<?php echo SITEURL;?>index(after-login).php"><img src="LOGO.png" class="logo"></a>
    </section>
   
    
    <section class="header">
        <div class="main">
        <div class="menu">
        <ul class="nav">
                <li><a href="<?php echo SITEURL;?>index(after-login).php">Home</a></li>
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
                <li><a href="<?php echo SITEURL;?>Hotels.php">Hotel</a></li>
                <li><a href="<?php echo SITEURL;?>Events.php">Event</a></li>
                <li><a href="<?php echo SITEURL;?>Contact_US/ContactUs.php">Contact us</a></li>   
             <li><a href="<?php echo SITEURL;?>New_Login/profile.php">MyProfile</a></li> 
                </ul> 
            
        </div>   
            <div class="title">
            <br/><br/><br/><br/>
        <h1>Maldives</h1>
            <h2>On earth, there is no heaven but,<br/> there are pieces of it</h2>
        </div>
            </div>   
         </section>
    
        <div class="gallery">
       
         <a href="Gallery/maldives/Banana-Reef.png" data-lightbox="maldivesgallery" data-title="Banana Reef"><img src="Gallery/maldives/Banana-Reef.png"></a>
           <a href="Gallery/maldives/Fuvahmulah.png" data-lightbox="maldivesgallery" data-title="Fuvamulah"><img src="Gallery/maldives/Fuvahmulah.png"></a>
            <a href="Gallery/maldives/Maafushi.png" data-lightbox="maldivesgallery" data-title="Maafushi"><img src="Gallery/maldives/Maafushi.png"></a>
            <a href="Gallery/maldives/Soneva-Fushi.png" data-lightbox="maldivesgallery" data-title="Soneva fushi"><img src="Gallery/maldives/Soneva-Fushi.png"></a>
            <a href="maldives.jpg" data-lightbox="maldivesgallery" data-title="Boat"><img src="maldives.jpg"></a>
    
    </div>
   
 
</body>
</html>
