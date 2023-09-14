<?php

include("header.php") ;
include("connection.php") ;
$id=$_GET['user_id'];
$query="select * from user where user_id='$id'";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);


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
                            <h3>UPDATE-YOUR NEW PASSWROD HERE </h3>
                        </div>
						<form  action=""  method="post" >
                        <div class="form-row">
                        <div class="form-group col-md-12">
                                <label for="InputName" class="mb-0"> Name</label>
                                <input type="text" name="name" value="<?php echo $data['username']; ?>"  class="form-control"  placeholder=" Name"> </div>        
                          
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
    <?php include('footer.php'); 
  
  if(isset($_POST['sub'])){
    $d=$_GET['user_id'];
    $n=$_POST['name'];
      $p=$_POST['password'];
    
  
  
      $query="UPDATE `user` SET `username`='$n',`password`='$p' WHERE user_id= $d";
      $result=mysqli_query($con,$query);
      if($result){
          echo "<script>alert('your account is  Updated');window.location.href='logout.php';</script>";
      }
      else{
          echo mysqli_error($con);
      }
      }
  
  
  
  ?>