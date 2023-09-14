<?php
include("header.php") ;

$querry2="SELECT * FROM `about_us` WHERE id='2';";
$run2=mysqli_query($con, $querry2);

$querry1="SELECT * FROM `footer_con`;";
$run1=mysqli_query($con, $querry1);

?>


<!-- Start All Title Box -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                        <form  action=""  method="post" >
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="InputName" class="mb-0"> Name</label>
                                <input type="text" name="name"  class="form-control"  placeholder="First Name"> </div>
                            <div class="form-group col-md-12">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" name="email" class="form-control"  placeholder="Enter Email"> </div>
                            <div class="form-group col-md-12">
                                <label for="Inputsubject" class="mb-0">Subject </label>
                                <input type="text" name="subject"  class="form-control"  placeholder="subject "> </div>
                            <div class="form-group col-md-12">
                                <label for="Inputmessage" class="mb-0">Message</label>
                                <input type="text" name="message" class="form-control" placeholder="message"> </div>
                        </div>
						
                        <button class="btn hvr-hover" name="sub"  type="submit">Send Message</button>
                    </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left"style="height: 85vh; width:100%;">
                    <?php while ($data=mysqli_fetch_assoc($run2)){?>    
                    <h2>CONTACT INFO</h2>
                        <p><?php  echo $data['detail'] ?>. </p>
                        <?php } ?>

                        <ul>
                        <?php while ($data=mysqli_fetch_assoc($run1)){?>   
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address:  <?php  echo $data['address'] ?> </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <?php  echo $data['phone'] ?> </a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email:  <?php  echo $data['email'] ?> </a></p>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

    <?php
include("footer.php") ;
include('connection.php');
if(isset($_POST['sub'])){
    $n =$_POST['name'];
    $e =$_POST['email'];
    $s =$_POST['subject'];
    $m =$_POST['message'];
    
$querry = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES ('$n','$e','$s','$m')";
$run=mysqli_query($con, $querry);
if($run==true){
    echo "<script> alert('Thank you for cantacting us'); window.location.href='index.php'</script>";

}
else{
    echo "mysqli_error($con)";
}

}
