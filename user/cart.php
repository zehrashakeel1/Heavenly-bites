<?php
include("header.php");
include('../admin/connection.php');

if(!isset($_SESSION['FRONT'])){
    echo "<script>window.location.href='login.php'</script>";
    }
//Removing
if (isset($_POST['remove'])){
    foreach($_SESSION["shopping_cart"] as &$value){
           
              if($value['id'] === $_POST["id"]){
                $key=$value['name'];
                unset($_SESSION["shopping_cart"][$key]);
                echo "<script>alert('Item Removed')</script>";
                if(empty($_SESSION["shopping_cart"]))
                    unset($_SESSION["shopping_cart"]);
                break; // Stop the loop after we've found the product
            
                        }		
                    }
            
    }
    
    
    //Plus
    if (isset($_POST['add_quantity'])){
        foreach($_SESSION["shopping_cart"] as &$value){
          if($value['id'] === $_POST["id"]){
              $value['quantity'] +=1;
              break; // Stop the loop after we've found the product
          }
      }
    }
    
    //Minus
    if (isset($_POST['sub_quantity'])){
     
        foreach($_SESSION["shopping_cart"] as &$value){
            if($value['quantity']>1){
                if($value['id'] === $_POST["id"]){
                    $value['quantity'] -=1;
                    break; // Stop the loop after we've found the product
                }
            }
    
            if($value['quantity']==1){
              if($value['id'] === $_POST["id"]){
                $key=$value['name'];
                unset($_SESSION["shopping_cart"][$key]);
                echo "<script>alert('Item Removed')</script>";
                if(empty($_SESSION["shopping_cart"]))
                    unset($_SESSION["shopping_cart"]);
                break; // Stop the loop after we've found the product
            }
                        }		
                    }
    }
    

?>
 
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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                    <?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>                     
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Add</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
     <?php foreach ($_SESSION["shopping_cart"] as $product){ ?>                        
                            <tbody>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src='../admin/<?php echo $product["image"]; ?>' />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                        <?php echo $product["name"]; ?>
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo "$".$product["price"]; ?></p>
                                    </td>
                                    <td >
                                    <form method='post' action=''>
                                 <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
                                 <div class="quantity">
                                        <button class="ml-auto btn hvr-hover "name="sub_quantity" type="submit">&minus;</button>
                                        <input type="text" class="form-control text-center" value="<?php echo $product["quantity"]; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                        <button class="ml-auto btn  hvr-hover " name="add_quantity" type="submit">&plus;</button>
                                        </div>
                                 </form>
     </td>
                                 
                                    <td class="total-pr">
                                    <?php echo "$".$product["price"]*$product["quantity"]; ?>
                                    </td>
                                   

                                      <!-- Removing -->
                      <form method='post' action=''>
                    <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
                                    <td> <button   type='submit' name="remove" class="remove-pr- btn  hvr-hover ">
                                        <a >
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                    </form>
<!-- Removing -->
                                </tr>
                                <?php
$total_price += ($product["price"]*$product["quantity"]);
} //Loop Ended
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

         

            <div class="row ">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="order-box">
                        <h1>Order summary</h1>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"><?php echo "$".$total_price; ?></div>
                        </div>
                      
                
    
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                      
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box">
                    <a href="checkout.php?p=<?php echo $total_price?>" class="ml-auto btn hvr-hover">PROCEED TO CHECKOUT</a> </div>
            </div>

        </div>
    </div>
    <?php
            
        } //If Ended
        else{
            echo "<h3>Your cart is empty!</h3>";
            }
        ?>
                </form>
            </div>
    <!-- End Cart -->
    <?php
include("footer.php");
?>