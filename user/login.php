<?php

include("header.php") ;
include("connection.php") ;
?>
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Log-In Here</h2>
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
    $e =$_POST['username'];
    $p =$_POST['password'];
    
$querry="SELECT * FROM `user` WHERE username='$e' and password='$p' and role_id_FK= 4";
$run=mysqli_query($con, $querry);
$rows=mysqli_num_rows($run);
if($rows==0){
  echo "<script>alert('Login failed')</script>";
}
else{
	$data=mysqli_fetch_assoc($run);
  $_SESSION['FRONT']=$e;
  $_SESSION['FRONT_ID']=$data['id'];
  echo "<script>alert('Login Successfull');window.location.href='index.php'</script>";
}

}


?>