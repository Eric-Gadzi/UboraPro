<?php 
    require_once dirname(__FILE__)."/../classes/cart_class.php";

    /**
     * Items Cart Operations
     */
      function addToItemsCart_ctr($item_id,$ip_address,$user_id,$item_qty){
        $itemsCart = new Cart();
        return $itemsCart->addToItemsCart($item_id,$ip_address,$user_id,$item_qty);
      } 

      function deleteItemsCart_ctr($user_id, $ip_address,$item_id){
        $itemsCart = new Cart();
        return $itemsCart->deleteItemsCart($user_id, $ip_address,$item_id);
      }
      
      function increaseItemsCartByOne_ctr($item_id,$ip_address, $user_id){
        $itemsCart = new Cart();
        return $itemsCart->increaseItemsCartByOne($item_id,$ip_address, $user_id);
      } 

      function decreaseItemsCartByOne_ctr($item_id,$ip_address, $user_id){
        $itemsCart = new Cart();
        return $itemsCart->decreaseItemsCartByOne($item_id,$ip_address, $user_id);
      } 

      function showAPersonItemsCartT_ctr($user_id,$ip_address, $item_id){
        $itemsCart = new Cart();
        return $itemsCart->showAPersonItemsCartT($user_id,$ip_address,$item_id);
      } 

      function showAPersonItemsCartCName_ctr($user_id,$ip_address,$itemCartegory){
        $itemsCart = new Cart();
        return $itemsCart->showAPersonItemsCartCName($user_id,$ip_address,$itemCartegory);
      } 

      function showAPersonItemsCart_ctr($user_id,$ip_address){
        $itemsCart = new Cart();
        return $itemsCart->showAPersonItemsCart($user_id,$ip_address);
      }

     /**
      * Ticket Carts Operations
      */

      function addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty){
        $ticketCart = new Cart();
        return $ticketCart->addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty);
      } 

      function deleteTicketCart_ctr($ticket_id,$ip_address,$user_id,$item_qty){
        $ticketCart = new Cart();
        return $ticketCart->deleteTicketCart($ticket_id,$ip_address,$user_id,$item_qty);
      } 

      function increaseTicketCartByOne_ctr($ticket_id,$ip_address, $user_id,$ticket_qty){
        $ticketCart = new Cart();
        return $ticketCart->increaseTicketCartByOne($ticket_id,$ip_address, $user_id,$ticket_qty);
      } 

      function decreaseTicketCartByOne_ctr($ticket_id,$ip_address, $user_id,$ticket_qty){
        $ticketCart = new Cart();
        return $ticketCart->decreaseTicketCartByOne($ticket_id,$ip_address, $user_id,$ticket_qty);
      } 

      function showAPersonTicketCart_ctr($user_id,$ip_address){
        $ticketCart = new Cart();
        return $ticketCart->showAPersonTicketCart($user_id,$ip_address);
      }

      function updateticketCart($ticket_id, $ip_address, $user_id, $qty){
        $ticketCart = new Cart();
        return $ticketCart->updateticketCart($ticket_id, $ip_address, $user_id, $qty);
      }

?>