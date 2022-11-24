<?php 
  require_once("../functions/subtotal_ticket_function.php");
  require_once("../functions/items_functions.php");
  
  session_start();

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Confirm your Order!​, Product 1 Title, Product 2 Title, Product 3 Title">
  <meta name="description" content="">
  <title>Subtotal</title>
  <link rel="stylesheet" href="./../css/nicepage.css" media="screen">
  <link rel="stylesheet" href="./../css/Subtotal.css" media="screen">
  <script class="u-script" type="text/javascript" src="./../js/jquery.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <script src="https://js.paystack.co/v1/inline.js"></script>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/ubora2.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Subtotal">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header u-white u-header" id="sec-ef51">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
        <img src="./../images/ubora2.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">View as User</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" target="_blank" style="padding: 10px 20px;">Tickets</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" target="_blank" style="padding: 10px 20px;">Voting</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <section class="u-clearfix u-section-1" id="sec-85f6">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h1 class="u-text u-text-default u-text-1">Confirm your Order! </h1>
          <div class="u-cart u-expanded-width u-cart-1">
            <div class="u-cart-products-table u-expanded-width u-table u-table-responsive">
              
              <form action="./../actions/cart_action/update_item_cart.php">
                <table class="u-table-entity">
                  <colgroup>
                    <col width="65%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                  </colgroup>
                  <thead class="u-palette-1-base u-table-header u-table-header-1">
                    <tr style="height: 46px;">
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Product </th>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Price </th>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Quantity </th>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Subtotal </th>
                    </tr>
                  </thead>
                  <tbody class="u-table-body">
                    <?php
                      $total = 0;
                      $user_id = $_SESSION['user_id'];
                      $ip_address = $_SERVER['REMOTE_ADDR'];
                      $total += subtotalTicket($user_id);
                      $total += item_subtotal($user_id);
                    
                      $_SESSION['total'] = $total;
                     ?>
                    
                  </tbody>
                </table>
            </div>
            <div class="u-cart-button-container">
              <a href="./Tickets.php" class="u-active-none u-btn u-button-style u-cart-continue-shopping u-hover-none u-none u-text-body-color u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <g>
                      <g>
                        <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712    L143.492,221.863z"></path>
                      </g>
                    </g>
                  </svg><img></span>&nbsp;Continue Shopping
              </a>
              <button type="submit" class="u-border-none u-btn u-button-style u-cart-update u-grey-5 u-hover-palette-1-base">
                Update Cart
              </button>
              <!-- <a href="./../actions/cart_action/update_item_cart.php" class="u-border-none u-btn u-button-style u-cart-update u-grey-5 u-hover-palette-1-base">Update Cart</a> -->
            </div>
            </form>
            <div class="u-cart-blocks-container">
              <div class="u-cart-block u-indent-30">
                <div class="u-cart-block-container u-clearfix">
                  <h5 class="u-cart-block-header u-text">Promotion Code</h5>
                  <div class="u-cart-block-content u-text">
                    <div class="u-cart-form u-form">
                      <form action="#" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form" source="custom" name="form">
                        <div class="u-form-group">
                          <label for="name-5861" class="u-form-control-hidden u-label">Coupon code</label>
                          <input type="text" placeholder="Coupon code" id="name-5861" name="coupon" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                        </div>
                        <div class="u-align-left u-form-group u-form-submit">
                          <a href="#" class="u-border-none u-btn u-btn-submit u-button-style">Apply Coupon</a>
                          <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                        <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                        <input type="hidden" value="" name="recaptchaResponse">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-cart-block u-cart-totals-block u-indent-30">
                <div class="u-cart-block-container u-clearfix">
                  <h5 class="u-cart-block-header u-text">Cart Totals</h5>
                  <div class="u-align-right u-cart-block-content u-text">
                    <div class="u-cart-totals-table u-table u-table-responsive">
                      <table class="u-table-entity">
                        <colgroup>
                          <col width="50%">
                          <col width="50%">
                        </colgroup>
                        <tbody class="u-align-right u-table-body">
                          <!-- Subtotal table here -->
                          <tr>
                            <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-17">Subtotal</td>
                            <!-- Subtotal amount here -->
                            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">ghc <?php echo $total; ?></td>
                          </tr>
                          <tr>
                            <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-19">Total</td>
                            <!-- Actual total amount here -->
                            <td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-20">ghc <?php echo $total; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a href="checkout.php" onclick="" class="u-border-none u-btn u-button-style u-cart-checkout-btn u-btn-4">Proceed to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941">
        <div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
          <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
        </div>
      </footer>

</body>
</html>