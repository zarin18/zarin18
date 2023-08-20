<?php include('constants.php');?>
<?php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
$message = '';
if(isset($_POST["email"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_resort_reservation
 (first_name, last_name,  email, address, mobile_no, guests, kids, room_type, arrival,departure, note) VALUES 
 (:first_name, :last_name, :email, :address, :mobile_no, :guests,:kids, :room_type, :arrival, :departure, :note)";
 
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':email'   => $_POST["email"],
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"],
     ':guests'  => $_POST["guests"],
     ':kids'  => $_POST["kids"],
     ':room_type'  => $_POST["room_type"],
     ':arrival'  => $_POST["arrival"],
     ':departure'=> $_POST["departure"],
     ':note'  => $_POST["note"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Booking Completed Successfully
  </div>
  ';
     header('location:'.SITEURL.'homepage.php');
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in booking. Please try later.
  </div>
  ';
 }
}
?>
<!doctype html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Booking Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
      body{background-image: url(Hotel/hotel.jpeg);
      background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;}
  .box
  {
   width:1200px;
   margin:50px auto 0px;
      padding: 0 200px;
      opacity: 0.9;
      
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  .logo img
  {
    width: 80px;
    float: left;
    position:fixed;
    left: 40px;
    top: 5px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(0,0,0,0);
  position: absolute;
  top: 0;
  width: 100%;
    
}

li {
  float: right;
}

ul li a {
  display: block;
  color: white;
    font-size: 20px;
    font-family: sans-serif;
  text-align: center;
  padding: 14px 16px;
  text-decoration:none;
}
      ul li a:hover{background-color: #BBE7FE;
      color: #272E1C;
      border-radius: 50px;}

.active {
  background-color: rgb(0,0,0,0.3);
    color:#337ab7;
    border-radius: 50px;    
}
.btn-success {
    color: #fff;
    background-color: #337ab7;
    border-color: #f5f5f5;
}
.btn-success:hover{
          color: black;
          background-color: #BBE7FE;
          border-color: #f5f5f5;
      }
legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 20px;
    font-size: 30px;
    line-height: inherit;
    color: white;
    border: 0;
    border-bottom: 1px solid #e5e5e5;
}
.destination-menu-box{
    width: 48%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}

.destination-menu-img{
    width: 335px;
    height: auto;
    float: left;
}

.destination-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
    text-align: justify;
}

.img-curve{
    border-radius: 15px;
}
.destination-menu-desc h4
{
    font-family: myFirstFont;
    color: #4A4241;
    font-size: 20px;
}
.text-center
{
    text-align: center;
}
.success
{
    color: #EFF1DB;
}
.error
{
   color: red;
}
  

  </style>
 </head>
 <body>
     <section class="logo"> 
    <a href="<?php echo SITEURL;?>index(after-login).php"><div class="logo"><img src="LOGO.png"></div></a>
    </section>
    <ul> <li><a href="<?php echo SITEURL;?>New_Login/profile.php">MyProfile</a></li> 
        <li><a href="<?php echo SITEURL;?>Contact_US/ContactUs.php">Contact Us</a></li>
        <li><a href="<?php echo SITEURL;?>Cuisine-Prime/India-Cuisine.php">Cuisine</a></li>
        <li><a href="<?php echo SITEURL;?>Bangladesh-gallery.php">Gallery</a></li>
        <li><a href="<?php echo SITEURL;?>Bangladesh-tourist-spot.php">Tourist Spot</a></li>
         <li><a href="<?php echo SITEURL;?>Events.php">Event</a></li>
        <li><a href="<?php echo SITEURL;?>Hotels.php">Hotel</a></li>
        <li><a href="<?php echo SITEURL;?>index(after-login).php">Home</a></li>
</ul>
 <br />
  <div class="container box">
   <br />
   
   <?php echo $message; ?>
<?php
//check whether the spot_id is set or not
if(isset($_GET['hotel_id']))
{
    $hotel_id=$_GET['hotel_id'];//get the spot id and details
    
    $sql="SELECT * FROM tbl_hotel_resort WHERE id=$hotel_id";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    
    //check whether the data is available or not
    if($count==1)
    {
        $row=mysqli_fetch_assoc($res);
        $title=$row['title'];
 
        $image_name=$row['image_name'];
        
    }
    else
    {
        header("location:".SITEURL);
    }
    
    
}
else 
{
    header("location:".SITEURL);
}


?>

   <form method="post" id="booking_form">
       <fieldset>
       <legend>Destination</legend>
           <div class="destination-menu-box">
                <div class="destination-menu-img">
                    <?php
                    if($image_name=="")
                    {
                        //image is not available
                         echo "<div class='error'>Image is not available</div>";
                    }
                    else
                    {
                        //image is available
                        ?>
                     <img src="<?php echo SITEURL;?>Hotel/<?php echo $image_name;?>" class="img-responsive img-curve">
                    <?php
                    }
                    
                    ?>
                    
                   
                </div>

                <div class="destination-menu-desc">
                    <h4><?php echo $title;?></h4>
                    <input type="hidden" name="title" value="<?php echo $title;?>">
                    <br>
                </div>
           </div>
       
       
       </fieldset>
       
    
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="travellers_details">
      <div class="panel panel-default">
       
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control" />
         <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Last Name</label>
         <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Enter Email Address</label>
         <input type="email" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
        
           <div class="form-group">
           <label>Enter Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         <span id="error_address" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
            <div class="form-group">
         <label>Enter No. of Adults</label>
         <input type="number" name="guests" id="guests" class="form-control" />
         <span id="error_guests" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter No. of Kids (Under 10 years old)(If any)</label>
         <input type="number" name="kids" id="kids" class="form-control" />
         <span id="error_kids" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Room Type</label>
               <select name="room_type">
               <option value="single">Single</option>
                   <option value="double">Double</option>
                   <option value="triple">Triple</option>
                   <option value="quad">Quad</option>
                   <option value="queen">Queen</option>
                   <option value="king">King</option>
                   <option value="twin">Twin</option>
                   <option value="suite">Suite</option>
                   <option value="villa">Villa</option>
               </select>
                      
           </div>
        <div class="form-group">
         <label>Arrival Date</label>
         <input type="date" name="arrival" id="arrival" class="form-control" />
         <span id="error_arrival" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Departure Date</label>
         <input type="date" name="departure" id="departure" class="form-control" />
         <span id="error_departure" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Confirm your desired hotel/resort</label>
               <select name="hotel_id">
                  <?php 
                //sql query to get all active categories from db
                $sql3="SELECT * from tbl_hotel_resort WHERE active='Yes' ";
                //executing queries
                $res3=mysqli_query($conn,$sql3);
                //count rows to check whether we categories or not
                $count3=mysqli_num_rows($res3);
                
                if($count3>0)
                {
                    while($row3=mysqli_fetch_assoc($res3))
                    {
                        $id=$row3['id'];
                        $title=$row3['title'];
                        
                        ?>
                   <option value="<?php echo $id;?>"><?php echo $title;?></option>
                
                <?php
                    }
                    
                }
                else
                {
                    //no category found
                    ?>
                <option value="0">No hotel found</option>
               
                <?php
                }
                
                
                
                
                ?>
               
               </select>       
           </div>
        
           <div class="form-group">
         <label>Any Special Note?</label>
         <input type="text" name="note" id="note" class="form-control" />
         <span id="error_note" class="text-danger"></span>
        </div>
          
        <br />
        <div align="center">
         <button type="button" name="btn_travellers_details" id="btn_travellers_details" class="btn btn-success btn-lg">Reserve </button>
        </div>
        <br />
       </div>
         </div>
     </div>
       </div>
   </form>
  </div>
     
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_travellers_details').click(function(){
  
  var error_first_name = '';
  var error_last_name = '';
  var error_email = '';
  var error_address ='';
  var error_mobile_no = '';
  var error_guests='';
  var error_arrival='';
  var error_departure='';
     
  var mobile_validation = /^\d{10}$/;
     
  
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  
  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }
  
  if($.trim($('#email').val()).length == 0)
  {
   error_email1 = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
  if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
    if($.trim($('#guests').val()).length == 0)
  {
   error_guests = 'Mobile Number is required';
   $('#error_guests').text(error_guests);
   $('#guests').addClass('has-error');
  }
  else
  {
    error_guests = '';
    $('#error_guests').text(error_guests);
    $('#guests').removeClass('has-error');
   
  }
     if($.trim($('#arrival').val()).length == 0)
  {
   error_arrival = 'Arrival Date is required';
   $('#error_arrival').text(error_arrival);
   $('#arrival').addClass('has-error');
  }
  else
  {
    error_arrival = '';
    $('#error_arrival').text(error_arrival);
    $('#arrival').removeClass('has-error');
   
  }
  if($.trim($('#departure').val()).length == 0)
  {
   error_departure = 'Departure Date is required';
   $('#error_departure').text(error_departure);
   $('#departure').addClass('has-error');
  }
  else
  {
    error_departure = '';
    $('#error_departure').text(error_departure);
    $('#departure').removeClass('has-error');
   
  }
  
  
   
  
  if(error_first_name != '' || error_last_name != '' || error_mobile_no != '' || error_address!= '' || error_email != '' || error_guests != '' || error_arrival != ''|| error_departure != '')
  {
   return false;
  }
  else
  {
   $('#btn_travellers_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#booking_form").submit();
  }
  
 });
  
 
 
 
 
 
 
});
</script>