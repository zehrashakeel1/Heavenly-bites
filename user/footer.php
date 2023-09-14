<?php
$querry1="SELECT * FROM `footer_con`;";
$run1=mysqli_query($con, $querry1);


$querry2="SELECT * FROM `about_us` WHERE id='2';";
$run2=mysqli_query($con, $querry2);



?>
<!-- Start Footer  -->
<footer>
        <div class="footer-main">
       
            <div class="container">
            <?php while ($data=mysqli_fetch_assoc($run1)){?>
				<div class="row">
                    
                
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li><?php  echo $data['mon_to_fri'] ?></li>
                                 <li><?php  echo $data['sat'] ?></li> 
                                 <li><?php  echo $data['close'] ?></li>
							</ul>
						</div>
					</div>

                   
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.google.com/"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.rss.com/"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
              
				<hr>
                <div class="row">
                  
                    <div class="col-lg-4 col-md-12 col-sm-12">
                    
                    <div class="footer-link-contact">
                   
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: <?php  echo $data['address'] ?> </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <?php  echo $data['phone'] ?></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email:<?php  echo $data['email'] ?></p>
                            </li>
                        </ul>
                       
                    </div>
                    <?php } ?>
                   
                </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>

                  
                    <div class="col-lg-4 col-md-12 col-sm-12">
                    <?php while ($data=mysqli_fetch_assoc($run2)){?>
                        <div class="footer-widget">
                            <h4>About Heavenly Bites</h4>
                            <p><?php  echo $data['detail'] ?>.</p> 
							
                        </div>
                        <?php } ?>

                    </div>

                  


                </div>
            </div>

        
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>