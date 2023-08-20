<?php include('menu-original.php');?>
 <style>
        body
        {    
          background-image: url('gokyo.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
    </style>
<section class="events">
<div class="row1">
               <div class="column">
                   
                   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                   <h2 class="text-center">Event Details</h2>
            <div class="event-categories">
                    <?php
                    //sql query ti display categories from database
                    $sql="SELECT * from tbl_event_category WHERE active='Yes'";
                    //Execute the query
                    $res=mysqli_query($conn,$sql);
                    //check whether the category is available or not
                    $count=mysqli_num_rows($res);
                    
                    if($count>0)
                    {
                        //event category available
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $image_name=$row['image_name'];
                            ?>
                <a href="<?php echo SITEURL;?>category-spot.php?event_cat_id=<?php echo $id;?>">
                
                    <div class="box-3 float-container">
                        
                        <?php
                            //check whether the image is available or not
                        if($image_name=="")
                        {
                            echo "<div class='error'>Image not available</div>";
                        }
                            else
                            {
                                //image is available
                                ?>
                                <img src="<?php echo SITEURL;?>Event-Category/<?php echo $image_name;?>" class="img-responsive">
                        <?php

                            }
                        
                        ?>
                        <div class="overlay">
                            <pre><?php echo "$title";?> <br/>Grab Your Seat Now</pre>
                        </div>
                    </div>
                </a>
                    <?php
                        }
                    }
                    else
                    {
                        echo "<div class='error'>Event category not available</div>";
                    }
                    
                    
                    
                    ?>
            </div>
               </div>
            </div>

</section>
            </body>
        
</html>