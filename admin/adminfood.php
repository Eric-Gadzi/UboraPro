<?php
require("../functions/daiplayItemCategory.php"); 
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="100 ghc, 150 ghc, 150 ghc">
    <meta name="description" content="">
    <title>Admin Food</title>
    <link rel="stylesheet" href="./../css/nicepage.css" media="screen">
<link rel="stylesheet" href="./../css/Admin-Food.css" media="screen">
    <script class="u-script" type="text/javascript" src="./../js/jquery.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "./../images/ubora2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Admin Food">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-ef51"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
          <img src="./../images/ubora2.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./../index.php" style="padding: 10px 20px;">View as User</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./../view/voting.php" target="_blank" style="padding: 10px 20px;">Voting</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./../index.php">View as User</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-b8f2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Food Packages</h1>
        <img class="u-image u-image-default u-image-1" src="./../images/f6c419d4661fc1c4a385729a83f7727e109af29168aea2df63f51ecb9c5cffb9f2933915914b508baca080844b9c1ca122150c3fb5a3b9703a684a_1280.jpg" alt="" data-image-width="1280" data-image-height="850">
        <img class="u-image u-image-default u-image-2" src="./../images/e13f7d1c62dc8cdaf201de18ae6bcc7760b240645bb4d44dae285874f55b952c2cc5d2b4879bd22fec3ac199c3fc5821d9572659f5d775f7f0455f_1280.jpg" alt="" data-image-width="1280" data-image-height="853">
        <img class="u-image u-image-default u-image-3" src="./../images/07e4604caa54baffcb17d73bfa89eb8831cedafdb80768039ee8655070a43bf154987f6f1c64b17c42b57dee288de789b60d17eac273d5657a258c_1280.jpg" alt="" data-image-width="719" data-image-height="1280">
        <div class="u-form u-form-1">
          <form action="./../actions/items_action/create_item.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;" method="POST" enctype="multipart/form-data">
            <div class="u-form-group u-form-name">
              <label for="name-098e" class="u-label">Name of Food package</label>
              <input type="text" placeholder="Enter food package name" id="name-098e" name="item_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-098e" class="u-label">Pacakage Price</label>
              <input type="number" placeholder="Enter price in cedis" id="email-098e" name="item_price" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-7f20" class="u-label"> Item Category </label>
              <?php  getAllItemCatgory(); ?>
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-098e" class="u-label">Food Package description</label>
              <textarea placeholder="Enter description" rows="4" cols="50" id="message-098e" name="item_description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-098e" class="u-label">Keywords</label>
              <input type="text" placeholder="Enter price in cedis" id="email-098e" name="item_keywords" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-7f20" class="u-label">Category Image</label>
              <input type="file" name="item_image" accept="image/*" required>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              
              <input type="submit" value="Add food package" class="u-btn u-btn-submit u-button-style">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          </form>
        </div>
      </div>
    </section>
    <section>
      <header>
        <h2>Manage Food</h2>
        <?php getAllfoodTable_fnc("Food"); ?>
      </header>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941"><div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
        <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
      </div></footer>
  
</body></html>