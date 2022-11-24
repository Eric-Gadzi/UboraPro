<?php 

    require_once dirname(__FILE__)."/../controllers/cart_controller.php";

    function tickettype($ticket_type){
        $ticket_name= "";
        if($ticket_type == 1){
            $ticket_name= "Regular";

        }
        else if($ticket_type == 2){
            $ticket_name= "Couple";

        }
        else if($ticket_type == 3){
            $ticket_name= "VIP";
        }
       return $ticket_name;
    }

    function subtotalTicket($user_id){

        $ticket_details = showAPersonTicketCart_ctr($user_id);
        $subtotal = 0;
        if($ticket_details){
        $ticket_name = tickettype($ticket_details['ticket_type']);
        $ticket_price = $ticket_details['ticket_price'];
        $ticket_qty = $ticket_details['ticket_qty'];
        $subtotal = $ticket_price * $ticket_qty;
        $ticket_id = $ticket_details['ticket_id'];
        



        display_ticket_subtotal($ticket_id, $ticket_name, $ticket_price, $ticket_qty, $subtotal);
        }
        return $subtotal;
    }

    

    function display_ticket_subtotal($ticket_id, $ticket_name, $ticket_price, $ticket_qty, $subtotal){
        echo "
        <tr style='height: 165px;'>
        <td class='u-border-1 u-border-grey-dark-1 u-first-column u-table-cell'>
          <span class='u-cart-remove-item u-icon u-icon-1'>
            <!-- Remove button in svg -->
            <a href='../actions/delete_ticket_cart.php?ticket_id=$ticket_id&ticket_qty=$ticket_qty'>
              <svg class='u-svg-content' viewBox='0 0 52 52' x='0px' y='0px' style='width: 1em; height: 1em;'>
                <g>
                  <path d='M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26
                  S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z'></path>
                  <path d='M35.707,16.293c-0.391-0.391-1.023-0.391-1.414,0L26,24.586l-8.293-8.293c-0.391-0.391-1.023-0.391-1.414,0
                  s-0.391,1.023,0,1.414L24.586,26l-8.293,8.293c-0.391,0.391-0.391,1.023,0,1.414C16.488,35.902,16.744,36,17,36
                  s0.512-0.098,0.707-0.293L26,27.414l8.293,8.293C34.488,35.902,34.744,36,35,36s0.512-0.098,0.707-0.293
                  c0.391-0.391,0.391-1.023,0-1.414L27.414,26l8.293-8.293C36.098,17.316,36.098,16.684,35.707,16.293z'></path>
                </g>
              </svg>
            </a>
          </span>
          <img class='u-cart-product-image u-image u-image-default u-product-control' src='../images/ubora4.jpeg' data-image-width='906' data-image-height='1280'>
          <h2 class='u-cart-product-title u-product-control u-text u-text-2'>
            <!-- Product Title here -->
            <a class='u-product-title-link' href='#'>$ticket_name</a>
          </h2>
        </td>
        <td class='u-border-1 u-border-grey-dark-1 u-table-cell'>
          <div class='u-cart-product-price u-product-control u-product-price'>
            <div class='u-price-wrapper'>
              <div class='u-hide-price u-old-price'></div>
              <!-- Price here -->
              <div class='u-price'>$ticket_price</div>
            </div>
          </div>
        </td>
        <td class='u-border-1 u-border-grey-dark-1 u-table-cell'>
          <div class='u-cart-product-quantity u-product-control u-product-quantity u-product-quantity-1'>
            <div class='u-hidden u-quantity-label'> Quantity </div>
            <div class='u-border-1 u-border-grey-25 u-quantity-input'>
              <a class='disabled minus u-button-style u-hidden u-quantity-button'>
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'>
                  <path d='m 4 8 h 8' fill='none' stroke='currentColor' stroke-width='1' fill-rule='evenodd'></path>
                </svg>
              </a>
              <!-- Current quantity of value in the value attribute -->
              <input class='u-border-grey-30 u-input' type='text' name = 'ticket_quantity' value='$ticket_qty' pattern='[0-9]+'>
              <input type='hidden' name = 'ticket_id'  value='$ticket_id' />
              <a class='plus u-button-style u-hidden u-quantity-button'>

              
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'>
                  <path d='m 4 8 h 8 M 8 4 v 8' fill='none' stroke='currentColor' stroke-width='1' fill-rule='evenodd'></path>
                </svg>
              </a>
            </div>
          </div>
        </td>
        <td class='u-border-1 u-border-grey-dark-1 u-table-cell'>
          <div class='u-cart-product-subtotal u-product-control u-product-price'>
            <div class='u-price-wrapper'>
              <div class='u-hide-price u-old-price'></div>
              <!-- Subtotal of product here -->
              <div class='u-price' style='font-weight: 700;'>ghc $subtotal</div>
            </div>
          </div>
        </td>
      </tr>
        ";
    }




?>