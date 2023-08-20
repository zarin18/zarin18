<?php include('menu-original.php');?>

<?php
//check whether id is passed or not
if(isset($_GET['event_cat_id']))
{
    //category id is set
    $event_cat_id=$_GET['event_cat_id'];
    //get the category title
    $sql2="SELECT title FROM tbl_event_category where id=$event_cat_id";
    //execute the query
    $res2=mysqli_query($conn,$sql2);
    //get the value from DB
    $row2=mysqli_fetch_assoc($res2);
    
    $event_cat_title=$row2['title'];
}
else 
{
    //redirect to home page as Id not passed
    header('location:'.SITEURL);
}
?>

<style>
 body
        {    
          background-image: url('DAL%20Lake.jfif');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
.destination-menu h2
{
    font-family: myFirstFont;
    color: #f5f6e7;
    font-size: 45px;
}
</style>
<section class="destination-menu">
        <div class="container">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <h2 class="text-center"><?php echo $event_cat_title;?></h2>
            <br/><br/>
            <?php
            //sql query to display destinations from database
                    $sql="SELECT * from tbl_tourist_spots WHERE event_cat_id='$event_cat_id'";
                    //Execute the query
                    $res=mysqli_query($conn,$sql);
                    //check whether the destination is available or not
                    $count=mysqli_num_rows($res);
            if($count>0)
            {
                //destination is available
                while($row=mysqli_fetch_assoc($res))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $description=$row['description'];
                            $price=$row['price'];
                            $image_name=$row['image_name'];
                            ?>
            
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
                    <p class="destination-price"><?php echo "BDT $price";?></p>
                    <p class="destination-detail">
                        <?php echo $description;?>
                    </p>
                    <br>
                    <a href="<?php echo SITEURL;?>Eventbookingform.php?spot_id=<?php echo $id;?>" class="btn btn-primary">Book Now</a>
                </div>
            </div>
            
                            <?php
            }
            }
            else
            {
                //destination not available
                echo "<div class='error'>Destination not available</div>";
            }
            
            
            ?>
            
<div class="clearfix"></div>
        </div>

    </section>

            </body>
        
</html>