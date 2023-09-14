<?php
include('connection.php');
@$rec_data=$_POST['keyword'];
if(isset($rec_data)){
    $q="select * from product where p_name like '%$rec_data%'";
   
}
else{
    $q="SELECT * FROM `product`";
}

$run=mysqli_query($con,$q);

?>





 
