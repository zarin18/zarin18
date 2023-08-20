<?php include ('menu-pre-login.php');?>
<?php
if(isset($_SESSION['book']))
{
    echo $_SESSION['book'];
    unset ($_SESSION['book']);
}
?>
    <section class="header">
        <div class="container">        
        <img src="Girl%20in%20the%20sun.png">
        <a href="<?php echo SITEURL;?>New_Login/userlogin.php"><button type="button" class="login-btn">Sign in/ Sign Up</button></a>
        </div>
        
        <h1 style="padding-top: 180px">SOUTH-EAST ASIAN</h1> 
        <h2>TRAVEL</h2> 
        <h3>MANAGEMENT</h3>
        <p>"Take only memories, leave only footprints"</p>
        <pre>~ Chief Seattle</pre>
        
    
    
    </section>
    
    <section class="about" id="about">
    <div class="row">
        <div class="col50">
        <h2 class="titleText"><span>A</span>bout Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in velit ac tortor ornare volutpat. Vivamus ut porta metus, id mollis nibh. Curabitur ac nisl diam. Suspendisse accumsan auctor tempor. Etiam nunc erat, suscipit ut fringilla in, rutrum quis velit. Aliquam dolor ante, venenatis vel ante non, lacinia lacinia augue. Duis volutpat quam erat.<br><br>Phasellus lacinia quam eu nulla maximus bibendum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc lorem orci, volutpat id scelerisque scelerisque, luctus et est. Praesent pulvinar leo vitae sapien hendrerit auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam lorem tellus, molestie eu neque id, porta pellentesque nisl. Donec elit erat, sodales eget dolor ac, tincidunt efficitur nibh. Proin quis purus egestas sapien volutpat volutpat in eu risus. In hac habitasse platea dictumst.</p>       
        </div>
        <div class="col50">
        <div class="ingBx">
            <img src="Gallery/India/ooty.png">
            </div>
        </div>
        </div>
    
    
    </section>
    <div class="compass">
            <img src="clipart2269768.png">
    </div>
        <section class="popular-explorations">
            
            <h2>Popular</h2>
            <h2>Explorations</h2>
           <div class="row1">
               <div class="column">
            <div class="event-categories">
                    <?php
                    //sql query ti display categories from database
                    $sql="SELECT * from tbl_event_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
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
                                <img src="<?php echo SITEURL;?>Event-Category/<?php echo $image_name;?>" alt="Rivers" class="img-responsive">
                        <?php

                            }
                        
                        ?>
                        <div class="overlay">
                            <pre><?php echo "$title";?> <br/>Explore now </pre>
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
 
    <section class="expert" id="expert">
    <div class="title">
       
        <h2 class="titleText">Our <span>T</span>eam</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>            
        </div>
        <div class="content">
        <div class="box">
            <div class="imgBx">
            <img src="girl-shy-character_1450-155.jpg"></div>
            <div class="text">
                <h3>Someone Famous</h3>
            </div>
            </div>
            </div>
        
        <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="girl-shy-character_1450-155.jpg"></div>
            <div class="text">
                <h3>Someone Famous</h3>
            </div>
            </div>
            
        </div>
        <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="girl-shy-character_1450-155.jpg"></div>
            <div class="text">
                <h3>Someone Famous</h3>
            </div>
            </div>
            
        </div>
        
    </section>
    <section class="testimonials" id="testimonials">
    <div class="title white">
        <h2 class="titleText">They <span>S</span>aid about us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>            
        </div>
        <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="Girl1.jfif"></div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in velit ac tortor ornare volutpat. Vivamus ut porta metus, id mollis nibh. </p>
                <h3>Someone Famous</h3>
            </div>
            </div>
            
        </div>
        <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="Girl2.jpg"></div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in velit ac tortor ornare volutpat. Vivamus ut porta metus, id mollis nibh. </p>
                <h3>Someone Famous</h3>
            </div>
            </div>
            
        </div>
        <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="Girl3.jfif"></div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in velit ac tortor ornare volutpat. Vivamus ut porta metus, id mollis nibh. </p>
                <h3>Someone Famous</h3>
            </div>
            </div>
            
        </div>
        
    </section>
    <script type="text/javascript">
    window.addEventListener('scroll',function(){
        const header=document.querySelector(".header .container .main .menu .nav");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    
    </script>

        
    
    <?php include('footer.php');?>