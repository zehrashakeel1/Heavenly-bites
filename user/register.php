<?php

include("header.php") ;
include("connection.php") ;
?>
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Register Here</h2>
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
                            <h3>WE WILL  Never Share Your Data </h3>
                        </div>
						<form  action=""  method="post" >
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="InputName" class="mb-0">First Name</label>
                                <input type="text" name="username"  class="form-control"  placeholder="First Name"> </div>
                            <div class="form-group col-md-12">
                                <label for="InputLastname" class="mb-0">Last Name</label>
                                <input type="text" name="last_name" class="form-control"  placeholder="Last Name"> </div>
                            <div class="form-group col-md-12">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" name="email"  class="form-control"  placeholder="Enter Email"> </div>
                            <div class="form-group col-md-12">
                                <label for="InputPassword1" class="mb-0">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password"> </div>
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
    $u =$_POST['username'];
    $l =$_POST['last_name'];
    $e =$_POST['email'];
    $p =$_POST['password'];
    
$querry = "INSERT INTO `user`(`username`, `last_name`, `email`, `password`, `role_id_fk`) VALUES ('$u','$l','$e','$p','4')";
$run=mysqli_query($con, $querry);
if($run==true){
    echo "<script> alert('you have succesfully registerd'); window.location.href='login.php'</script>";

}
else{
    echo "mysqli_error($con)";
}

}

?>