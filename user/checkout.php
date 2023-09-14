<?php
include("header.php") ;
include("connection.php") ;
$pr=$_GET['p'];
?>


<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Account Login</h3>
                    </div>
                    
                    <h5><a  href="login.php" >Click here to Log-In</a></h5>
                   
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                    <h5><a  href="register.php" >Click here to Register</a></h5>
                 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form action="#" method="post" class="needs-validation" novalidate>
                            <div class="row">
                            
                            </div>
                            <div class="mb-3">
                                <label for="username">Username *</label>
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" id="username" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="text">Contact *</label>
                                <input type="text" class="form-control"  name="con" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" name="add"  id="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                           
                        
                           
                        
                            <button type="submit" name="sub" class="col-12 d-flex shopping-box ml-auto btn hvr-hover">Place Order</button>
                            
                            <hr class="mb-1"> </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                      
                 
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> <?php echo "Rs".$pr; ?> </div>
                                </div>
                               
                              
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                               
                                <hr> </div>
                       
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
    <?php
include("footer.php");
if(isset($_POST['sub'])){
$d=date("Y-m-d");
$n =$_POST['name'];
$a =$_POST['add'];
$c =$_POST['con'];
  
$q1="INSERT INTO `order`(`order_date`, `total_price`, `username`, `address`, `contact`,`status`) VALUES ('$d','$pr','$n',' $a','$c','Pending')";

$res1=mysqli_query($con,$q1);
$or=mysqli_insert_id($con);
    foreach($_SESSION["shopping_cart"] as $value){


        $q=$value['quantity'];
        $idd=$value['id'];
 $q="INSERT INTO `item`( `order_id_fk`, `product_id_fk`, `quantity`) VALUES ('$or','$idd','$q')";
  $res=mysqli_query($con,$q);
    }
    unset($_SESSION["shopping_cart"]);
   echo "<script>alert('Your order has been placed');window.location.href='order.php'</script>";

}
?>
