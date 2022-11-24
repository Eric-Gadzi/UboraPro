<?php 
    require_once dirname(__FILE__)."/../../controllers/cart_controller.php";

    $item_id = $_GET['item_id'];

    session_start();
    $user_id = $_SESSION['user_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];


    $result = deleteItemsCart_ctr($user_id,$item_id);

    if($result){
        echo "<script>alert('success')</script>";
        header("location: ../../view/Subtotal.php");
    }else{
        echo "<script>alert('failed')</script>";
    }

?>