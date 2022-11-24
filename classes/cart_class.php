<?php 
    
    require_once dirname(__FILE__)."/../settings/db_class.php";

    class Cart extends db_connection{
         
        /** 
         * Item cart Operations
        */
        
        // adds a user cart to the database
        function addToItemsCart($item_id,$ip_address,$user_id,$item_qty){
            $sql = "INSERT INTO `item_cart`(`item_id`, `ip_address`, `user_id`, `item_qty`) VALUES ('$item_id','$ip_address','$user_id','$item_qty')";

            return $this->db_query($sql);
        }

        // deletes every item from user's cart 
        function deleteItemsCart($user_id, $item_id){
            $sql = "DELETE FROM `item_cart` WHERE   `user_id`='$user_id' and `item_id`='$item_id'  ";

            return $this->db_query($sql);
        }

        // updates elements in a cart by 1
        function increaseItemsCartByOne($item_id,$ip_address, $user_id){

            $sql = "UPDATE `item_cart` SET `item_qty`=item_qty+1 WHERE `ip_address`='$ip_address' and `user_id`='$user_id' and `item_id`='$item_id' ";

            return $this->db_query($sql);
        }

        // Decerease item cart Item by 1
        function decreaseItemsCartByOne($item_id,$ip_address, $user_id){
           
            $sql = "UPDATE `item_cart` SET `item_qty`= item_qty-1 WHERE `ip_address`='$ip_address' and `user_id`='$user_id' and `item_id`='$item_id' ";

            return $this->db_query($sql);
        }

        function determine_item_in_cart($user_id, $item_id){
            $sql = "SELECT * FROM item_cart WHERE `item_id` = '$item_id' and `user_id` = '$user_id'";

            return $this->fetchAllData($sql);
        }

       // Show a person Cart Item
        function showAPersonItemsCartT($user_id,$ip_address, $item_id){
            $sql="SELECT items.item_id, items.item_cat,items.item_name,items.item_price,items.item_image, item_cart.item_qty,item_cart.user_id,item_cart.ip_address, item_cart.item_id FROM `item_cart`, `items` WHERE items.item_id=item_cart.item_id and item_cart.user_id ='$user_id' and item_cart.ip_address='$ip_address' and  item_cart.item_id='$item_id' ";
            return $this->fetchAllData($sql);
        }
        
        function showAPersonItemsCartCName($user_id,$ip_address,$itemCartegory){
            $sql="SELECT items.item_id, items.item_cat,items.item_name,items.item_price,items.item_image, item_cart.item_qty,item_cart.user_id,item_cart.ip_address, item_cart.item_id,cart.cat_name 
            FROM `item_cart`, `items`,cart 
            WHERE cart.cat_name LIKE '%$itemCartegory%'
            and items.item_id=item_cart.item_id 
            and items.item_cat=cart.cat_id  
            and item_cart.user_id ='$user_id'
            and item_cart.ip_address='$ip_address'";
            return $this->fetchAllData($sql);
        }
        function showAPersonItemsCart($user_id){
            $sql="SELECT items.item_id, items.item_cat,items.item_name,items.item_price,items.item_image, item_cart.item_qty,item_cart.user_id,item_cart.ip_address, item_cart.item_id FROM `item_cart`, `items` WHERE items.item_id=item_cart.item_id and item_cart.user_id ='$user_id' ;";
            return $this->fetchAllData($sql);

        }

        /**
         * Actions for Ticket Cart
         */

         function addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty){
            $sql="INSERT INTO `ticket_cart`(`ticket_id`, `ip_address`, `user_id`, `ticket_qty`) VALUES ('$ticket_id','$ip_address','$user_id','$ticket_qty')";
            return $this->db_query($sql);
         }

         function deleteTicketCart($ticket_id,$user_id,$item_qty){
            $sql="DELETE FROM `ticket_cart` WHERE `ticket_id`='$ticket_id' and `user_id` ='$user_id' and `ticket_qty`= '$item_qty'";
            return $this->db_query($sql);
         }

         function increaseTicketCartByOne($ticket_id,$ip_address, $user_id,$ticket_qty){
            $sql="UPDATE `ticket_cart` SET `ticket_qty`=$ticket_qty+1 WHERE `ticket_id`='$ticket_id' and `ip_address`='$ip_address' and `user_id`=' $user_id' ";
            return $this->db_query($sql);
         }

         function decreaseTicketCartByOne($ticket_id,$ip_address, $user_id,$ticket_qty){
            $sql="UPDATE `ticket_cart` SET `ticket_qty`=$ticket_qty-1 WHERE `ticket_id`='$ticket_id' and `ip_address`='$ip_address' and `user_id`=' $user_id'";
            return $this->db_query($sql);
         }

         function showAPersonTicketCart($user_id){
            $sql="SELECT ticket.ticket_id,ticket.ticket_type,ticket.ticket_price,ticket.ticket_date, ticket_cart.ip_address,ticket_cart.user_id, ticket_cart.ticket_qty FROM `ticket_cart`,ticket WHERE ticket.ticket_id=ticket_cart.ticket_id and ticket_cart.user_id='$user_id'";
            return $this->fetchOne($sql);
         }

         function updateticketCart($ticket_id, $ip_address, $user_id, $qty){
            $sql = "UPDATE `ticket_cart` SET `ticket_qty`='$qty' WHERE `ticket_id`='$ticket_id' and `ip_address`='$ip_address' and `user_id`='$user_id'";

            return $this->db_query($sql);
         }
    }



?>