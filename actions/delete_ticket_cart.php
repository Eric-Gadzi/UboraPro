<?php 
    require_once("../controllers/cart_controller.php");

    session_start();

    $ticket_id = $_GET['ticket_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $item_qty = $_GET['ticket_qty'];
    $user_id = $_SESSION['user_id'];

    $result = deleteTicketCart_ctr($ticket_id,$user_id,$item_qty);

    if($result){
        header("location: ../view/Subtotal.php");
    }else{
        echo "could not delete";
    }



?>