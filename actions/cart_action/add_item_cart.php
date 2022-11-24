<?php

require_once dirname(__FILE__) . "/../../controllers/cart_controller.php";

$item_id = $_GET['item_id'];
$item_qty = 1;
$item_cat = $_GET['cat'];
$ip_address = $_SERVER['REMOTE_ADDR'];

echo $item_cat;
echo $item_id;
echo $ip_address;
echo $item_qty;


session_start();

$user_id = $_SESSION['user_id'];

echo "<br>user_id: " . $user_id;




if ($item_cat == 1) {
    $result1 = determine_item_in_cart_ctr($user_id, $item_id);
    if ($result1) {
        header("location:./../../view/transport.php");
        return;
    } else {
        $result = addToItemsCart_ctr($item_id, $ip_address, $user_id, $item_qty);

        if ($result) {
            echo "<script>alert('success')</script>";
            header("location:./../../view/transport.php");
        }
    }
} 



else if ($item_cat == 2) {
    $result1 = determine_item_in_cart_ctr($user_id, $item_id);
    if ($result1) {
        header("location:./../../view/Subtotal.php");
        return;
    }else{
        $result = addToItemsCart_ctr($item_id, $ip_address, $user_id, $item_qty);

        if ($result) {
            echo "<script>alert('success')</script>";
            header("location:./../../view/Subtotal.php");
            return;
        }
    }
    // header("location:./../../view/Subtotal.php");
    
}




// $result = addToItemsCart_ctr($item_id, $ip_address, $user_id, $item_qty);

// if ($result) {
//     echo "<script>alert('success')</script>";
//     header("location:./../../view/transport.php");
// } else {
//     echo "<script>alert('failed')</script>";
// }
