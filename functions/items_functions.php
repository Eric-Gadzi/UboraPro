<?php 
    require_once dirname(__FILE__)."/../controllers/item_controller.php";

function item_subtotal($user_id){
    $subtotal =0;
    $total = 0;
    $item_List = showAPersonItemsCart_ctr($user_id);
    if($item_List){
    foreach($item_List as $item){
        $item_id = $item['item_id'];
        $item_name = $item['item_name'];
        $item_price = $item['item_price'];
        $item_qty = $item['item_qty'];
        $item_image = $item['item_image'];
        $subtotal = $item_price*$item_qty;
        $item_type = $item['item_cat'];
        $total += $subtotal;
        display_item_subtotal($item_id, $item_name, $item_price, $item_qty, $item_image, $subtotal, $item_type);
    }
    }
    return $total;

}


function display_item_subtotal($item_id, $item_name, $item_price, $item_qty, $item_image, $subtotal){
 
    echo "
    <tr style='height: 165px;'>
    <td class='u-border-1 u-border-grey-dark-1 u-first-column u-table-cell'>
      <span class='u-cart-remove-item u-icon u-icon-1'>
        <!-- Remove button in svg -->
        <a href='../actions/cart_action/delete_item_cart.php?item_id=$item_id&item_qty=$item_qty'>
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
      <img class='u-cart-product-image u-image u-image-default u-product-control' src='$item_image' data-image-width='906' data-image-height='1280'>
      <h2 class='u-cart-product-title u-product-control u-text u-text-2'>
        <!-- Product Title here -->
        <a class='u-product-title-link' href='#'>$item_name</a>
      </h2>
    </td>
    <td class='u-border-1 u-border-grey-dark-1 u-table-cell'>
      <div class='u-cart-product-price u-product-control u-product-price'>
        <div class='u-price-wrapper'>
          <div class='u-hide-price u-old-price'></div>
          <!-- Price here -->
          <div class='u-price'>$item_price</div>
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
          <input class='u-border-grey-30 u-input' type='text' name = 'ticket_quantity' value='$item_qty' pattern='[0-9]+' disabled>
          <input type='hidden' name = 'item_id'  value='$item_id' />
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