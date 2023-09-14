<?php
include('connection.php');
session_start();
$querry="SELECT * FROM `type`";
$run=mysqli_query($con, $querry);

$querry1="SELECT * FROM `footer_con`;";
$run1=mysqli_query($con, $querry1);
$data=mysqli_fetch_assoc($run1);
?>


 <!-- Count of cart -->
 <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
else{
    $cart_count=0 ;
}




$cate= "SELECT * FROM `category`";
$c=mysqli_query($con,$cate);



function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
  $current_page = PageName();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>The Heavenly Bites</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
      <!-- Start Main Top -->
      <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="right-phone-box">
                        <p>Call US :- <a href="contact_us.php"> <?php  echo $data['phone'] ?></a></p>
                    </div>
                    <div class="our-link">
                        <ul>

                            <li><a href="contact_us.php"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="contact_us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php if(isset($_SESSION['FRONT'])) {?> 
              
                    <div class="login-box">
                    <button class="btn hvr-hover" ><a href="login.php"> <?php echo strtoupper($_SESSION['FRONT'])?></a></button>
					</div>
                    <div class="login-box">
                    <button class="btn hvr-hover"><a href="logout.php">Log-Out</button>
					</div>
                    <div class="login-box">
                    <button class="btn hvr-hover"><a href="user_update.php">Update Your Password</button>
					</div>
                    <div class="login-box " >
                    <button class="btn hvr-hover"><a href="order.php">Your Orders </button>
					</div>
                    <?PHP } else {?>
                    <div class="login-box" >
                    <button class="btn hvr-hover" ><a href="login.php">Login</button>
				  
                </div>
                    <div class="login-box">
                    <button class="btn hvr-hover" ><a href="register.php">register</button>
					</div>
                    <?php } ?>	

                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img style="height: 18vh; width:28vh;"  src="images/logore.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item <?php echo $current_page == 'index.php' ? 'active' : NULL ?> ">
                        <a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item <?php echo $current_page == 'about.php' ? 'active' : NULL ?>">
                            <a class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="shop.php" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                            <?php while($category=mysqli_fetch_assoc($c)) { ?>
<li><a class="nav-item <?php echo $current_page == 'shop.php' ? 'active' : NULL ?>"><a class="dropdown-item" href="shop.php?cat_id=<?php echo $category['cat_id']?>"><?php echo $category['cat_name'] ?> </a></li>
                                <?php } ?>	
                            </ul>
                        </li>    
                   
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                       
                        <li class="nav-item <?php echo $current_page == 'contact_us.php' ? 'active' : NULL ?> ">
                        <a class="nav-link" href="contact_us.php">Contact-Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                       
                    
                        <li class=""><a href="cart.php">
                        <span class="badge"><?php echo $cart_count ?> </span>
                        <i class="fab fa-opencart" style="font-size:20px;">My Cart</i></a></li>
                               
                               
                       
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->

            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
   

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->