<?php
include('connection.php');
include('header.php');


$query = "SELECT * FROM `about_us` WHERE id='2';";
$run = mysqli_query($con, $query);


$querywe = "SELECT * FROM `about_us` ;";
$we = mysqli_query($con, $querywe);


$queryt = "SELECT * FROM `our_team` ;";
$team = mysqli_query($con, $queryt);
?>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
        <?php while ($data=mysqli_fetch_assoc($run)){?>
            <div class="row">
                
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" style="height: 90vh; width:100%;" src="../admin/<?php  echo $data['image'] ?>" alt="" />
                    </div>
                </div> 
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span>Heavenly Bites</span></h2>
                    <h1>In the beginning<h1>
                    <h2 class="text-lg-left">" <?php echo $data ['detail']?>.</h2>
                    <h2 class="text-lg-left">" <?php echo $data ['we_para']?>.</h2>
                   
					<a class="btn hvr-hover" href="#">Read More</a>
                </div>
            </div>
            <?php } ?>
            <div class="row my-5">
            <?php while ($data=mysqli_fetch_assoc($we)){?> 
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?php echo $data ['we_h']?></h3>
                        <p><?php echo $data ['we_para']?>. </p>
                    </div>
                </div>
                <?php } ?>
            
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <?php while ($data=mysqli_fetch_assoc($team)){?>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img style="height: 60vh; width:100%;"  src="../admin/<?php  echo $data['team_image'] ?>" alt="" />
                            <div class="team-content">
                                <h3 class="title"><?php echo $data ['team_name']?></h3> <span class="post"><h2><?php echo $data ['team_pro']?></h2></span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p><?php echo $data ['team_detail']?> </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End About Page -->


<?php
include('footer.php');
?>