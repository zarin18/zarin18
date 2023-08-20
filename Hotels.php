<?php
   include ('menu-original.php'); 
?>
<style>
        body
        {    
          background-image: url('Kuramathi%20Island%20MALDIVES.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    opacity: 0.8;
}
    </style>
<div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                <div class="imageholder" style=""></div>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <h2 class="text-center"> Hotel Details</h2>
                </div>
            </div>        
            <div class="row mt-4">
                <?php
                $query="SELECT * FROM `tbl_hotel_resort`";
                $query_run=mysqli_query($conn,$query);
                $check_hotel =mysqli_num_rows($query_run)>0;

                if($check_hotel)
                {
                    while($row=mysqli_fetch_array($query_run))
                    {
                        $id=$row['id'];
                        $image_name=$row['image_name'];
                        $contact_no=$row['contact_no'];
                        $room_type=$row['room_type'];
                        $price_range=$row['price_range'];
                        ?>
                 
                        <div class="col-md-4">
                            <div class="card">
                                <a href="<?php echo SITEURL;?>hotelbookingform.php?hotel_id=<?php echo $id;?>"><img src="<?php echo SITEURL;?>Hotel/<?php echo $image_name;?>" width="300px" height="200px" ></a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                    
                                    <p class="card-text">
                                        <?php echo $row['details']; ?><br/><br/>
                                        
                                    <?php echo $row['address']; ?><br/>
                                    <?php echo "To contact us dial $contact_no"; ?><br>
                                    <?php echo $room_type; ?><br>
                                    <?php echo "Price range $price_range"; ?><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                
                        <?php
                        
                    }
                }
                else
                {
                    echo"No hotel is available";
                }
                ?>
                    
                </div> 
</div>
                
