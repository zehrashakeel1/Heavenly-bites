<?php
include('connection.php');
include('header.php');
@$id=$_GET['cat_id'];

@$type_id=$_GET['cat_id'];

if($type_id!=null){
    $query="SELECT type.type_name,category.cat_name,product.* FROM product INNER JOIN category ON category.cat_id=product.cat_id_fk INNER join type on type.type_id=category.type_id_fk  where category.cat_id=$id"; 
    if(isset($_POST['abc'])) {
        $var = $_POST['sort'];
        if($var==1){
            $query="SELECT * FROM `product` ORDER BY `product`.`p_id` DESC";
        }
        if($var==2){
            $query="SELECT * FROM `product` ORDER BY `product`.`p_price` ASC";
          }
          if($var==3){
            $query="SELECT * FROM `product` ORDER BY `product`.`p_price` DESC";
          }
         
    }
    if(isset($_POST['dev'])){
        $var = $_POST['x'];
        $query="select * from product where p_name like '%$var%'";
    }
}


else{
    $query="SELECT type.type_name,category.cat_name,product.* FROM product INNER JOIN category ON category.cat_id=product.cat_id_fk INNER join type on type.type_id=category.type_id_fk";
    if(isset($_POST['abc'])) {
        $var = $_POST['sort'];
        if($var==1){
            $query="SELECT * FROM `product` ORDER BY `product`.`p_id` DESC";
        }
        if($var==2){
            $query="SELECT * FROM `product` ORDER BY `product`.`p_price` ASC";
          }
          if($var==3){
            $query="SELECT * FROM `product` ORDER BY `product`.`p_price` DESC";
          }
         
    }
    if(isset($_POST['dev'])){
        $var = $_POST['x'];
        $query="select * from product where p_name like '%$var%'";
    }
}
    
    $run1=mysqli_query($con,$query);
    

    
    
    ?>
   
 <!-- Count of cart -->
 <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
else{
    $cart_count=0 ;
}
?>








<!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-6 text-sm-left">
                            <form method="post" action="#">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select name="sort" class="selectpicker show-tick form-control" >
									<option data-display="Select">Nothing</option>
									<option value="1">Latest</option>
									<option value="2">Low Price → High Price</option>
                                    <option value="3">High Price → High Price</option>
									
								</select>
                              
                                </div>
                              
                                <input name="abc"   type="submit" value="Sort"  class="ml-auto btn hvr-hover" > </input>
                                        
                                </form>
                               
                            </div>
                            <div class="col-12 col-sm-4 text-sm-center">
                                <div class="product-categori">
                                    <div class="search-product">
                                        <form method="post" action="#">
                                            <input name="x" class="form-control" placeholder="Search here..." type="text"/>

                                            <button type="submit" name="dev" value="search"> <i class="fa fa-search"></i> </button>   
                                        </form>
                                    </div>
                                 
                                </div>
                            </div>
                           
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                    <?php while ($data=mysqli_fetch_assoc($run1)){?>
                                        <div class="col-lg-3 col-md-6">
                                        <form method="post" action="shop_php.php">
          <input type="hidden" name="id" value="<?php echo $data['p_id']?>" />

                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img style="height:40vh;width:100%;"src="../admin/<?php echo $data['p_image']?>"  class="img-fluid"  alt="">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <input  type="submit" name="submit" value="add to cart"></input>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h1><?php echo $data['p_name']?></h1>
                                                    <h4><?php echo $data['p_description']?></h4>
                                                    <h5> <?php echo $data['p_price']?></h5>
                                                </div>
                                    </form>
                                            </div>
                                        </div>
                                        
                                         <?php } ?>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
    <?php

include('footer.php');
?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js"></script>
<script>

$('document').ready(function(){

//fetching
load();
function load(s){
    $.ajax({
url:'search_res.php',
type:"POST",
data:{'keyword':s},
success:function(data){
$('#result').html(data)
}
    })
}
//load function ended
$('#search_bar').keyup(function(){
	var vari=$(this).val();
	if(vari!= ''){
		load(vari)
	}
	else{
		load();
	}
})

})
	</script>