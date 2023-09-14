<?php
include('header.php');
include('connection.php');
$query1="SELECT * FROM `order` WHERE STATUS ='Pending'";
$run1=mysqli_query($con,$query1);

$query2="SELECT * FROM `order` WHERE STATUS != 'Pending'";
$run2=mysqli_query($con,$query2);
?>
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
    <?php if(mysqli_num_rows($run1)!=0) {?>
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                <h1> Pending! ! ! ! </h1>
                    <div class="table-main table-hover">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>NAME</th>
                                  <th>CONTACT</th>
                                    <th>ADDRESS</th>
                                    <th>TOTAL-PRICE</th>
                                      <th>ORDER-DATE</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($data=mysqli_fetch_assoc($run1)) { ?>
                                <tr>
                                    <td class="name-pr"><?php echo $data['username']?></td>
                                    <td class="name-pr"><?php echo $data['contact']?></td>
                                    <td class="price-pr"> <p><?php echo $data['address']?></p>  </td>
                                    <td class="name-pr"><?php echo $data['total_price']?> </td>
                                    <td class="name-pr"><?php echo $data['order_date']?> </td>
                                    <td class="name-pr"><?php echo $data['status']?> </td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
</div>
                </div>
            </div>
 </div>
    </div>
    <!-- End order -->
    <?php } else { ?>
        <h1> You have no pending orders!!!!!
    <?php } ?>
      <!-- Start Cart  -->
      <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="title-all text-center">
                <h1> Other Orders </h1>
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>NAME</th>
                                  <th>CONTACT</th>
                                    <th>ADDRESS</th>
                                    <th>TOTAL-PRICE</th>
                                      <th>ORDER-DATE</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($data=mysqli_fetch_assoc($run2)) { ?>                 
                                <tr>
                                    <td class="name-pr"><?php echo $data['username']?></td>
                                    <td class="name-pr"><?php echo $data['contact']?> </td>
                                    <td class="price-pr"> <p><?php echo $data['address']?></p>  </td>
                                    <td class="name-pr"><?php echo $data['total_price']?></td>
                                    <td class="name-pr"><?php echo $data['order_date']?></td>
                                    <td class="name-pr"><?php echo $data['status']?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
 </div>
    </div>
    <!-- End order -->

    <?php
include('footer.php');
?>