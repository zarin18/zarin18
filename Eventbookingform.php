<?php include('constants.php');?>
<?php 
$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
$message = '';
if(isset($_POST["email1"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_booking 
 (spot_id, first_name1, gender1, email1, address1, mobile_no1,passport_no1,
 first_name2, gender2, email2, address2, mobile_no2,passport_no2,
 first_name3, gender3, email3, address3, mobile_no3,passport_no3,
 first_name4, gender4, email4, address4, mobile_no4,passport_no4,
 pickup_address, drop_address) VALUES 
 (:spot_id, :first_name1, :gender1, :email1, :address1, :mobile_no1,:passport_no1,
 :first_name2, :gender2, :email2, :address2, :mobile_no2,:passport_no2,
 :first_name3, :gender3, :email3, :address3, :mobile_no3,:passport_no3,
 :first_name4, :gender4, :email4, :address4, :mobile_no4,:passport_no4,
 :pickup_address, :drop_address)";
 
 $user_data = array(
     ':spot_id'  => $_POST["spot_id"],
     
  ':first_name1'  => $_POST["first_name1"],  
  ':gender1'   => $_POST["gender1"],
  ':email1'   => $_POST["email1"],
  ':address1'   => $_POST["address1"],
  ':mobile_no1'  => $_POST["mobile_no1"],
     ':passport_no1'  => $_POST["passport_no1"],
     
     
     ':first_name2'  => $_POST["first_name2"],
    ':gender2'   => $_POST["gender2"],
  ':email2'   => $_POST["email2"],
  ':address2'   => $_POST["address2"],
  ':mobile_no2'  => $_POST["mobile_no2"],
     ':passport_no2'  => $_POST["passport_no2"],
     
     ':first_name3'  => $_POST["first_name3"],
    ':gender3'   => $_POST["gender3"],
  ':email3'   => $_POST["email3"],
  ':address3'   => $_POST["address3"],
  ':mobile_no3'  => $_POST["mobile_no3"],
     ':passport_no3'  => $_POST["passport_no3"],
     
     ':first_name4'  => $_POST["first_name4"],
    ':gender4'   => $_POST["gender4"],
  ':email4'   => $_POST["email4"],
  ':address4'   => $_POST["address4"],
  ':mobile_no4'  => $_POST["mobile_no4"],
     ':passport_no4'  => $_POST["passport_no4"],
     
     ':pickup_address'   => $_POST["pickup_address"],
     ':drop_address'   => $_POST["drop_address"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Booking Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Booking
  </div>
  ';
 }
}
?>


<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Event Booking Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
      body
      {
          background-image: url(Tanguar%20HAor.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
          
      }
  .box
  {
   width:800px;
   margin:0 auto;
      opacity: 0.8;
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
.navigationbar {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(0,0,0,0);
  position: absolute;
  top: 0;
  width: 100%;
    
}

.navigationbar li {
  float: right;
}

.navigationbar li a {
  display: block;
  color: white;
    font-size: 20px;
    font-family: sans-serif;
  text-align: center;
  padding: 14px 16px;
  text-decoration:none;
}
.navigationbar li a:hover
{
      background-color: #BBE7FE;
      color: #272E1C;
      border-radius: 50px;
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


.destination-price{
    font-size: 1.2rem;
    margin: 2% 0;
}

.img-curve{
    border-radius: 15px;
}
.destination-menu-desc h4
{
    font-family: myFirstFont;
    color: #4A4241;
    font-size: 40px;
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
    <div class="logo"><a href="#"><img src="LOGO.png"></a></div> 
    </section>
    <ul class="navigationbar">
         <li><a href="<?php echo SITEURL;?>New_Login/profile.php">MyProfile</a></li> 
        <li><a href="Contact_US/ContactUs.php">Contact Us</a></li>
        <li><a href="Cuisine-Prime/India-Cuisine.php">Cuisine</a></li>
        <li><a href="Bangladesh-gallery.php">Gallery</a></li>
        <li><a href="Bangladesh-tourist-spot.php">Tourist Spot</a></li>
         <li><a href="Events.php">Event</a></li>
        <li><a href="Hotels.php">Hotel</a></li>
        <li><a href="<?php echo SITEURL;?>index(after-login).php">Home</a></li>
</ul>
 <br />
 <br />
  <div class="container box">
   <br />
   <h2 align="center">Booking Form</h2><br/>
   <?php
//check whether the spot_id is set or not
if(isset($_GET['spot_id']))
{
    $spot_id=$_GET['spot_id'];//get the spot id and details
    
    $sql="SELECT * FROM tbl_tourist_spots WHERE id=$spot_id";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    
    //check whether the data is available or not
    if($count==1)
    {
        $row=mysqli_fetch_assoc($res);
        $title=$row['title'];
        $price=$row['price'];
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

   <form action="" method="post" id="booking_form">
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
                     <img src="<?php echo SITEURL;?>Tourist-spot/<?php echo $image_name;?>" class="img-responsive img-curve">
                    <?php
                    }
                    
                    ?>
                    
                   
                </div>

                <div class="destination-menu-desc">
                    <h4><?php echo $title;?></h4>
                    <input type="hidden" name="title" value="<?php echo $title;?>">
                    <p class="destination-price"><?php echo "BDT $price";?></p>
                    <input type="hidden" name="price" value="<?php echo $price;?>">
                    <br>
                </div>
           </div>
       
       
       </fieldset>
       <fieldset>
       <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_traveller1_details">Traveller 1</a>
     </li>
        <li class="nav-item">
      <a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_traveller2_details">Traveller 2</a>
     </li>
        <li class="nav-item">
      <a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_traveller3_details">Traveller 3</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_traveller4_details" style="border:1px solid #ccc">Traveller 4</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_location_details" style="border:1px solid #ccc">Location</a>
     </li>
    </ul>
    </fieldset>
       <fieldset>
       <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="traveller1_details">
      <div class="panel panel-default">
       <div class="panel-heading">Traveller 1</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name1" id="first_name1" class="form-control" />
         <span id="error_first_name1" class="text-danger"></span>
        </div>
        
           <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email1" id="email1" class="form-control" />
         <span id="error_email1" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender1" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender1" value="female"> Female
         </label>
        </div>
           <div class="form-group">
           <label>Enter Address</label>
         <textarea name="address1" id="address1" class="form-control"></textarea>
         <span id="error_address1" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no1" id="mobile_no1" class="form-control" />
         <span id="error_mobile_no1" class="text-danger"></span>
        </div>
          <div class="form-group">
         <label>Enter Passport No.</label>
         <input type="text" name="passport_no1" id="passport_no1" class="form-control" />
         <span id="error_passport_no1" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="btn_traveller1_details" id="btn_traveller1_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
         </div>
     </div>
     
         <div class="tab-pane fade" id="traveller2_details">
      <div class="panel panel-default">
       <div class="panel-heading">Traveller 2</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name2" id="first_name2" class="form-control" />
         <span id="error_first_name2" class="text-danger"></span>
        </div>
        
           <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email2" id="email2" class="form-control" />
         <span id="error_email2" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender2" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender2" value="female"> Female
         </label>
        </div>
           <div class="form-group">
           <label>Enter Address</label>
         <textarea name="address2" id="address2" class="form-control"></textarea>
         <span id="error_address2" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no2" id="mobile_no2" class="form-control" />
         <span id="error_mobile_no2" class="text-danger"></span>
        </div>
          <div class="form-group">
         <label>Enter Passport No.</label>
         <input type="text" name="passport_no2" id="passport_no2" class="form-control" />
         <span id="error_passport_no2" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_traveller2_details" id="previous_btn_traveller2_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_traveller2_details" id="btn_traveller2_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
             </div>
     </div>
     
         <div class="tab-pane fade" id="traveller3_details">
      <div class="panel panel-default">
       <div class="panel-heading">Traveller 3</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name3" id="first_name3" class="form-control" />
         <span id="error_first_name3" class="text-danger"></span>
        </div>
        
           <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email3" id="email3" class="form-control" />
         <span id="error_email3" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender3" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender3" value="female"> Female
         </label>
        </div>
           <div class="form-group">
           <label>Enter Address</label>
         <textarea name="address3" id="address3" class="form-control"></textarea>
         <span id="error_address3" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no3" id="mobile_no3" class="form-control" />
         <span id="error_mobile_no3" class="text-danger"></span>
        </div>
          <div class="form-group">
         <label>Enter Passport No.</label>
         <input type="text" name="passport_no3" id="passport_no3" class="form-control" />
         <span id="error_passport_no3" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_traveller3_details" id="previous_btn_traveller3_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_traveller3_details" id="btn_traveller3_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
             </div>
     </div>
     
     <div class="tab-pane fade" id="traveller4_details">
      <div class="panel panel-default">
       <div class="panel-heading">Traveller 4</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name4" id="first_name4" class="form-control" />
         <span id="error_first_name4" class="text-danger"></span>
        </div>
        
           <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email4" id="email4" class="form-control" />
         <span id="error_email4" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender4" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender4" value="female"> Female
         </label>
        </div>
           <div class="form-group">
           <label>Enter Address</label>
         <textarea name="address4" id="address4" class="form-control"></textarea>
         <span id="error_address4" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no4" id="mobile_no4" class="form-control" />
         <span id="error_mobile_no4" class="text-danger"></span>
        </div>
          <div class="form-group">
         <label>Enter Passport No.</label>
         <input type="text" name="passport_no4" id="passport_no4" class="form-control" />
         <span id="error_passport_no4" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_traveller4_details" id="previous_btn_traveller4_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_traveller4_details" id="btn_traveller4_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
         </div>
      
     </div>
     <div class="tab-pane fade" id="location_details">
      <div class="panel panel-default">
       <div class="panel-heading">Location</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Pickup Address</label>
         <textarea name="pickup_address" id="pickup_address" class="form-control"></textarea>
         <span id="error_pickup_address" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Drop Address</label>
         <textarea name="drop_address" id="drop_address" class="form-control"></textarea>
         <span id="error_drop_address" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Destination</label>
               <select name="spot_id">
                  <?php 
                //sql query to get all active categories from db
                $sql3="SELECT * from tbl_tourist_spots WHERE active='Yes' ";
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
                <option value="0">No spot found</option>
               
                <?php
                }
                
                
                
                
                ?>
               
               </select>       
           </div>
        
        <br />
        <div align="center">
         <button type="button" name="previous_btn_location_details" id="previous_btn_location_details" class="btn btn-default btn-lg">Previous</button>
        <button type="button" name="btn_location_details" id="btn_location_details" class="btn btn-success btn-lg">Submit</button>
            
        </div>
        <br/>
       </div>
      </div>
     </div>
       </div></fieldset>
    
   </form>
     

  </div>
     
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_traveller1_details').click(function(){
  
  var error_first_name = '';
  var error_email = '';
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  var error_passport_no = '';
  var passport_validation = /^\d{10}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#first_name1').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name1').text(error_first_name);
   $('#first_name1').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name1').text(error_first_name);
   $('#first_name1').removeClass('has-error');
  }
  
  
  
  if($.trim($('#email1').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email1').text(error_email);
   $('#email1').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email1').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email1').text(error_email);
    $('#email1').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email1').text(error_email);
    $('#email1').removeClass('has-error');
   }
  }
if($.trim($('#address1').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address1').text(error_address);
   $('#address1').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address1').text(error_address);
   $('#address1').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no1').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no1').text(error_mobile_no);
   $('#mobile_no1').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no1').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no1').text(error_mobile_no);
    $('#mobile_no1').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no1').text(error_mobile_no);
    $('#mobile_no1').removeClass('has-error');
   }
  }
     if($.trim($('#passport_no1').val()).length == 0)
  {
   error_passport_no = 'Passport Number is required';
   $('#error_passport_no1').text(error_passport_no);
   $('#passport_no1').addClass('has-error');
  }
  else
  {
   if (!passport_validation.test($('#passport_no1').val()))
   {
    error_passport_no = 'Invalid Passport Number';
    $('#error_passport_no1').text(error_passport_no);
    $('#passport_no1').addClass('has-error');
   }
   else
   {
    error_passport_no = '';
    $('#error_passport_no1').text(error_passport_no);
    $('#passport_no1').removeClass('has-error');
   }
  }
  
  if(error_first_name != '' || error_mobile_no != '' || error_address != '' || error_email != '' || error_passport_no != '')
  {
   return false;
  }
  else
  {
   $('#list_traveller1_details').removeClass('active active_tab1');
   $('#list_traveller1_details').removeAttr('href data-toggle');
   $('#traveller1_details').removeClass('active');
   $('#list_traveller1_details').addClass('inactive_tab1');
   $('#list_traveller2_details').removeClass('inactive_tab1');
   $('#list_traveller2_details').addClass('active_tab1 active');
   $('#list_traveller2_details').attr('href', '#traveller2_details');
   $('#list_traveller2_details').attr('data-toggle', 'tab');
   $('#traveller2_details').addClass('active in');
  }
 });
    $('#previous_btn_traveller2_details').click(function(){
  $('#list_traveller2_details').removeClass('active active_tab1');
  $('#list_traveller2_details').removeAttr('href data-toggle');
  $('#traveller2_details').removeClass('active in');
  $('#list_traveller2_details').addClass('inactive_tab1');
  $('#list_traveller1_details').removeClass('inactive_tab1');
  $('#list_traveller1_details').addClass('active_tab1 active');
  $('#list_traveller1_details').attr('href', '#traveller1_details');
  $('#list_traveller1_details').attr('data-toggle', 'tab');
  $('#traveller1_details').addClass('active in');
 });
    
 $('#btn_traveller2_details').click(function(){
  
  var error_first_name = '';
  
  var error_email = '';
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  var error_passport_no = '';
  var passport_validation = /^\d{10}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#first_name2').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name2').text(error_first_name);
   $('#first_name2').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name2').text(error_first_name);
   $('#first_name2').removeClass('has-error');
  }
  
  
  
  if($.trim($('#email2').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email2').text(error_email);
   $('#email2').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email2').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email2').text(error_email);
    $('#email2').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email2').text(error_email);
    $('#email2').removeClass('has-error');
   }
  }
if($.trim($('#address2').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address2').text(error_address);
   $('#address2').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address2').text(error_address);
   $('#address2').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no2').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no2').text(error_mobile_no);
   $('#mobile_no2').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no2').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no2').text(error_mobile_no);
    $('#mobile_no2').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no2').text(error_mobile_no);
    $('#mobile_no2').removeClass('has-error');
   }
  }
     if($.trim($('#passport_no2').val()).length == 0)
  {
   error_passport_no = 'Passport Number is required';
   $('#error_passport_no2').text(error_passport_no);
   $('#passport_no2').addClass('has-error');
  }
  else
  {
   if (!passport_validation.test($('#passport_no2').val()))
   {
    error_passport_no = 'Invalid Passport Number';
    $('#error_passport_no2').text(error_passport_no);
    $('#passport_no2').addClass('has-error');
   }
   else
   {
    error_passport_no = '';
    $('#error_passport_no2').text(error_passport_no);
    $('#passport_no2').removeClass('has-error');
   }
  }
  
  if(error_first_name != '' || error_mobile_no != '' || error_address != '' || error_email != '' || error_passport_no != '')
  {
   return false;
  }
  else
  {
   $('#list_traveller2_details').removeClass('active active_tab1');
   $('#list_traveller2_details').removeAttr('href data-toggle');
   $('#traveller2_details').removeClass('active');
   $('#list_traveller2_details').addClass('inactive_tab1');
   $('#list_traveller3_details').removeClass('inactive_tab1');
   $('#list_traveller3_details').addClass('active_tab1 active');
   $('#list_traveller3_details').attr('href', '#traveller3_details');
   $('#list_traveller3_details').attr('data-toggle', 'tab');
   $('#traveller3_details').addClass('active in');
  }
 });
 $('#previous_btn_traveller3_details').click(function(){
  $('#list_traveller3_details').removeClass('active active_tab1');
  $('#list_traveller3_details').removeAttr('href data-toggle');
  $('#traveller3_details').removeClass('active in');
  $('#list_traveller3_details').addClass('inactive_tab1');
  $('#list_traveller2_details').removeClass('inactive_tab1');
  $('#list_traveller2_details').addClass('active_tab1 active');
  $('#list_traveller2_details').attr('href', '#traveller2_details');
  $('#list_traveller2_details').attr('data-toggle', 'tab');
  $('#traveller2_details').addClass('active in');
 });
 
 $('#btn_traveller3_details').click(function(){
  var error_first_name = '';
  
  var error_email = '';
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  var error_passport_no = '';
  var passport_validation = /^\d{10}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#first_name3').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name3').text(error_first_name);
   $('#first_name3').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name3').text(error_first_name);
   $('#first_name3').removeClass('has-error');
  }
  
  
  
  if($.trim($('#email3').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email3').text(error_email);
   $('#email3').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email3').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email3').text(error_email);
    $('#email3').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email3').text(error_email);
    $('#email3').removeClass('has-error');
   }
  }
if($.trim($('#address3').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address3').text(error_address);
   $('#address3').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address3').text(error_address);
   $('#address3').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no3').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no3').text(error_mobile_no);
   $('#mobile_no3').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no3').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no3').text(error_mobile_no);
    $('#mobile_no3').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no3').text(error_mobile_no);
    $('#mobile_no3').removeClass('has-error');
   }
  }
     if($.trim($('#passport_no3').val()).length == 0)
  {
   error_passport_no = 'Passport Number is required';
   $('#error_passport_no3').text(error_passport_no);
   $('#passport_no3').addClass('has-error');
  }
  else
  {
   if (!passport_validation.test($('#passport_no3').val()))
   {
    error_passport_no = 'Invalid Passport Number';
    $('#error_passport_no3').text(error_passport_no);
    $('#passport_no3').addClass('has-error');
   }
   else
   {
    error_passport_no = '';
    $('#error_passport_no3').text(error_passport_no);
    $('#passport_no3').removeClass('has-error');
   }
  }
  
  if(error_first_name != '' || error_mobile_no != '' || error_address != '' || error_email != '' || error_passport_no != '')
  {
   return false;
  }
  else
  {
   $('#list_traveller3_details').removeClass('active active_tab1');
   $('#list_traveller3_details').removeAttr('href data-toggle');
   $('#traveller3_details').removeClass('active');
   $('#list_traveller3_details').addClass('inactive_tab1');
   $('#list_traveller4_details').removeClass('inactive_tab1');
   $('#list_traveller4_details').addClass('active_tab1 active');
   $('#list_traveller4_details').attr('href', '#traveller4_details');
   $('#list_traveller4_details').attr('data-toggle', 'tab');
   $('#traveller4_details').addClass('active in');
  }
 });
 
 $('#previous_btn_traveller4_details').click(function(){
  $('#list_traveller4_details').removeClass('active active_tab1');
  $('#list_traveller4_details').removeAttr('href data-toggle');
  $('#traveller4_details').removeClass('active in');
  $('#list_traveller4_details').addClass('inactive_tab1');
  $('#list_traveller3_details').removeClass('inactive_tab1');
  $('#list_traveller3_details').addClass('active_tab1 active');
  $('#list_traveller3_details').attr('href', '#traveller3_details');
  $('#list_traveller3_details').attr('data-toggle', 'tab');
  $('#traveller3_details').addClass('active in');
 });
 
 $('#btn_traveller4_details').click(function(){
  var error_first_name = '';
  
  var error_email = '';
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  var error_passport_no = '';
  var passport_validation = /^\d{10}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#first_name4').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name4').text(error_first_name);
   $('#first_name4').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name4').text(error_first_name);
   $('#first_name4').removeClass('has-error');
  }
  
  
  
  if($.trim($('#email4').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email4').text(error_email);
   $('#email4').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email4').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email4').text(error_email);
    $('#email4').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email4').text(error_email);
    $('#email4').removeClass('has-error');
   }
  }
if($.trim($('#address4').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address4').text(error_address);
   $('#address4').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address4').text(error_address);
   $('#address4').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no4').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no4').text(error_mobile_no);
   $('#mobile_no4').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no4').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no4').text(error_mobile_no);
    $('#mobile_no4').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no4').text(error_mobile_no);
    $('#mobile_no4').removeClass('has-error');
   }
  }
     if($.trim($('#passport_no4').val()).length == 0)
  {
   error_passport_no = 'Passport Number is required';
   $('#error_passport_no4').text(error_passport_no);
   $('#passport_no4').addClass('has-error');
  }
  else
  {
   if (!passport_validation.test($('#passport_no4').val()))
   {
    error_passport_no = 'Invalid Passport Number';
    $('#error_passport_no4').text(error_passport_no);
    $('#passport_no4').addClass('has-error');
   }
   else
   {
    error_passport_no = '';
    $('#error_passport_no4').text(error_passport_no);
    $('#passport_no4').removeClass('has-error');
   }
  }
  
  if(error_first_name != '' || error_mobile_no != '' || error_address != '' || error_email != '' || error_passport_no != '')
  {
   return false;
  }
  else
  {
   $('#list_traveller4_details').removeClass('active active_tab1');
   $('#list_traveller4_details').removeAttr('href data-toggle');
   $('#traveller4_details').removeClass('active');
   $('#list_traveller4_details').addClass('inactive_tab1');
   $('#list_location_details').removeClass('inactive_tab1');
   $('#list_location_details').addClass('active_tab1 active');
   $('#list_location_details').attr('href', '#location_details');
   $('#list_location_details').attr('data-toggle', 'tab');
   $('#location_details').addClass('active in');
  }
 });
 
 $('#previous_btn_location_details').click(function(){
  $('#list_location_details').removeClass('active active_tab1');
  $('#list_location_details').removeAttr('href data-toggle');
  $('#location_details').removeClass('active in');
  $('#list_location_details').addClass('inactive_tab1');
  $('#list_traveller4_details').removeClass('inactive_tab1');
  $('#list_traveller4_details').addClass('active_tab1 active');
  $('#list_traveller4_details').attr('href', '#traveller4_details');
  $('#list_traveller4_details').attr('data-toggle', 'tab');
  $('#traveller4_details').addClass('active in');
 });
 
 $('#btn_location_details').click(function(){
  var error_address1 = '';
  var error_address2 = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if($.trim($('#pickup_address').val()).length == 0)
  {
   error_address1 = 'Address is required';
   $('#error_pickup_address').text(error_address1);
   $('#pickup_address').addClass('has-error');
  }
  else
  {
   error_address1 = '';
   $('#error_pickup_address').text(error_address1);
   $('#pickup_address').removeClass('has-error');
  }
     if($.trim($('#drop_address').val()).length == 0)
  {
   error_address2 = 'Address is required';
   $('#error_drop_address').text(error_address2);
   $('#drop_address').addClass('has-error');
  }
  else
  {
   error_address2 = '';
   $('#error_drop_address').text(error_address2);
   $('#drop_address').removeClass('has-error');
  }
  
  
  
  if(error_address1 != '' || error_address2 != '')
  {
   return false;
  }
  else
  {
   $('#btn_location_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#booking_form").submit();
  }
  
 });
 
});
</script>
