<?php

include("header.php") ;
include("connection.php") ;
?>
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Review</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
	<div class="cart-box-main">
        <div class="container ">


<div class="row">
                <div class="col-sm-6 col-lg-6 mb-3 ">
                    <div class="checkout-address">
                        <div class="title-left">
                        <p>Send us a message, we will call back later</p>
                        </div>
						<form  action=""  method="post" >
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="InputName" class="mb-0">Your Name</label>
                                <input type="text" name="name"  class="form-control"  placeholder="First Name"> </div>
                        
                            <div class="form-group col-md-12">
                                <label for="InputEmail1"  class="mb-0">Email Address</label>
                                <input type="email" class="form-control"name="email"  placeholder="Enter Email"> </div>
                            <div class="form-group col-md-12">
                                <label for="InputPassword1" class="mb-0">Message</label>
                                <input type="Text" name="message" class="form-control" placeholder="message"> </div>
                        </div>
						
						<input type="submit"  name="sub" class="btn hvr-hover " >
                    </form>
                            
                    </div>
                </div>
              
            </div>

        </div>
    </div>
	<?php
include("footer.php") ;

include('connection.php');
if(isset($_POST['sub'])){
    $u =$_POST['name'];
 
    $e =$_POST['email'];
    $p =$_POST['message'];
    
$querry = "INSERT INTO `testimonial`(`name`, `email`, `message`) VALUES ('$u','$e','$p')";
$run=mysqli_query($con, $querry);
if($run==true){
    echo "<script> alert('Thankyou For Your Review'); window.location.href='index.php'</script>";

}
else{
    echo "mysqli_error($con)";
}

}

?>