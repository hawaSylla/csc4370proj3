<?php
session_start();
if(!isset($_SESSION['customerid'])){

header('location:index.php');
}else{
    $c_id = $_SESSION['customerid'];
    $p_id = $_GET['id'];

    $sql_check = "SELECT * FROM wishlist where pid = $p_id AND uid = $c_id";

    $result_check = mysqli_query($conn,$sql_check);

if(mysqli_num_rows($result_check) == 1){
    echo "prod already exists";
}
else{
    $insertWishlist = "INSERT INTO wishlist (pid, uid)
    VALUES ('$p_id','$c_id')";
}
    // $row_cart = mysqli_fetch_assoc($result_cart);
    // $total = $total + ($row_cart['price']);




    
    // $insertOrder = "INSERT INTO wishlist (pid, uid)
    // VALUES ('$pid','$uid')";
}
?>