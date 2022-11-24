<?php

require_once dirname(__FILE__)."/../../controllers/cart_controller.php";

$ticket_id = $_GET['ticket_id'];
$ticket_qty = $_GET['ticket_quantity'];


$ip_address = $_SERVER['REMOTE_ADDR'];

session_start();
$user_id = $_SESSION['user_id'];


$result = updateticketCart($ticket_id, $user_id, $ticket_qty);

if($result){
    header("location: ../../view/Subtotal.php");
}else{
    echo "<script>alert('updated failed')</script>";
}

// if (isset($_GET['addButton'])) {
//     $result = increaseItemsCartByOne_ctr($item_id, $ip_address, $user_id);
// } else if (isset($_GET['subtractButton'])) {
//     $result = decreaseItemsCartByOne_ctr($item_id, $ip_address, $user_id);
// }

?>

