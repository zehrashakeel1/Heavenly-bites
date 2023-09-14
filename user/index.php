 <!-- Start Slider -->
 <?php
include('connection.php');
include('header.php');



$qc="SELECT * from  category ";
$runc=mysqli_query($con,$qc);


$querry1="SELECT type.type_name,category.cat_name,product.* FROM product INNER JOIN category ON category.cat_id=product.cat_id_fk INNER join type on type.type_id=category.type_id_fk  order by p_id desc limit 4;";
$run1=mysqli_query($con,$querry1);


$querry2="SELECT * FROM `testimonial`";
$test=mysqli_query($con, $querry2);

$querry3="SELECT * FROM `product` ";
$insta=mysqli_query($con, $querry3);

$d="SELECT * FROM `product` WHERE p_id='20'; ";
$deal=mysqli_query($con,$d);
$d=mysqli_fetch_assoc($deal);

$d1="SELECT * FROM `product` WHERE p_id='21'; ";
$del=mysqli_query($con,$d1);
$t=mysqli_fetch_assoc($del);
?>
 <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/b1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/b2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/b3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
            <?php while($cat=mysqli_fetch_assoc($runc)) { ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="height: 70vh; width:100%;" src="../Admin/<?php echo $cat['cat_image'] ?>" alt="" />
                         
                        <a class="btn hvr-hover" href="shop.php?cat_id=<?php echo $cat ['cat_id']?>"><?php echo $cat['cat_name'] ?></a>
                       
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
   
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img style="height: 45vh; width:100%;"  class="img-fluid" src="../Admin/<?php echo $d['p_image'] ?>" alt="" />
					
                    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img style="height: 45vh; width:100%;"  class="img-fluid" src="../Admin/<?php echo $t['p_image'] ?>" alt="" />
					</div>
				</div>
			</div>
		</div>
        
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our New Addition</h1>
                        <p>We have the lastest products it must be exciting for you.</p>
                    </div>
                </div>
            </div>
        
            <div class="row special-list">
            <?php while ($data=mysqli_fetch_assoc($run1)){?>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img  src="../Admin/<?php echo $data['p_image'] ?>" class="img-fluid" alt="">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="shop.php">View All</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $data['p_name'] ?>"</h4>
                            <h5> <?php echo $data['p_price'] ?>"</h5>
                        </div>
                    </div>
                  
                </div>

              
                <?php } ?>
            </div>

        </div>
    </div>
    <!-- End Products  -->

   


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
        <?php while ($i=mysqli_fetch_assoc($insta)){?>
            <div class="item">
                <div class="ins-inner-box">
                <img  style="height: 45vh; width:100%;"   src="../Admin/<?php echo $i['p_image'] ?>">
                  
                    <div class="hov-in">
                        <a href="#"><i class="fa fa-birthday-cake"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- End Instagram Feed  -->
     <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->
     <!-- Start Instagram Feed  -->
     <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
        <?php while ($data=mysqli_fetch_assoc($test)){?>
            
            <div class="item " style="background-color:#efc1c1">
                <div class="ins-inner-box">
                   <h2><?php echo $data['name']?><h2>
                    <h3><?php echo $data['email']?><h3>
                   <h3><?php echo $data['message']?><h3>
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
          
            <?php } ?>
            
           
        </div>
    </div>
    <!-- End Instagram Feed  -->

    <?php

include('footer.php');
?>