<?php
require_once("../functions/awards_functions.php");

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Voting</title>
  <link rel="stylesheet" href="../css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../css/Voting.css" media="screen">
  <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/ubora2.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Voting">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header u-white u-header" id="sec-ef51">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
        <img src="../images/ubora2.png" class="u-logo-image u-logo-image-1">
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Tickets.php" style="padding: 10px 20px;">Tickets</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="voting.php" style="padding: 10px 20px;">Voting</a>
            </li>
          </ul>
        </div>
   
        <div class="u-custom-menu u-nav-container-collapse" >
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow" >
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2" style="color: black;">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="color: black;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Tickets.php">Tickets</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="voting.php">Voting</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <div class="u-countdown u-countdown-1" data-timer-id="6bac" data-type="to-date" data-target-date="Thu, 1 Dec 2022 10:39:48 GMT" data-for="everyone" data-direction="down" data-time-left="750m" data-target-number="100" data-start-time="Mon Nov 14 2022 16:12:21 GMT+0000 (Greenwich Standard Time)" data-frequency="1s" data-after-count="none" data-redirect-url="https://">
        <div class="u-countdown-wrapper u-spacing-20">
          <div class="u-countdown-item u-countdown-years u-hidden u-spacing-10">
            <div class="u-countdown-counter u-countdown-counter-1">
              <div class="u-countdown-number">0</div>
              <div class="u-countdown-number u-hidden">0</div>
            </div>
            <div class="u-countdown-label u-countdown-label-1">Years</div>
          </div>
          <div class="u-countdown-separator u-hidden u-countdown-separator-1">:</div>
          <div class="u-countdown-days u-countdown-item u-spacing-10">
            <div class="u-countdown-counter u-countdown-counter-2">
              <div class="u-countdown-number">17</div>
              <div class="u-countdown-number u-hidden">6</div>
              <div class="u-countdown-number u-hidden">0</div>
            </div>
            <div class="u-countdown-label u-countdown-label-2">Days</div>
          </div>
          <div class="u-countdown-separator u-countdown-separator-2">:</div>
          <div class="u-countdown-hours u-countdown-item u-spacing-10">
            <div class="u-countdown-counter u-countdown-counter-3">
              <div class="u-countdown-number">1</div>
              <div class="u-countdown-number">2</div>
            </div>
            <div class="u-countdown-label u-countdown-label-3">Hours</div>
          </div>
          <div class="u-countdown-separator u-countdown-separator-3">:</div>
          <div class="u-countdown-item u-countdown-minutes u-spacing-10">
            <div class="u-countdown-counter u-countdown-counter-4">
              <div class="u-countdown-number">3</div>
              <div class="u-countdown-number">0</div>
            </div>
            <div class="u-countdown-label u-countdown-label-4">Minutes</div>
          </div>
          <div class="u-countdown-separator u-countdown-separator-4">:</div>
          <div class="u-countdown-item u-countdown-seconds u-spacing-10">
            <div class="u-countdown-counter u-countdown-counter-5">
              <div class="u-countdown-number">0</div>
              <div class="u-countdown-number">0</div>
            </div>
            <div class="u-countdown-label u-countdown-label-5">Seconds</div>
          </div>
          <div class="u-countdown-separator u-hidden u-countdown-separator-5">:</div>
          <div class="u-countdown-item u-countdown-numbers u-hidden u-spacing-10">
            <div class="u-countdown-counter u-countdown-counter-6">
              <div class="u-countdown-number">0</div>
              <div class="u-countdown-number">0</div>
            </div>
            <div class="u-countdown-label u-countdown-label-6">Items</div>
          </div>
        </div>
        <form action="" method="get">
      <div class="input-group mb-3" style="margin-top: 20%;">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Search</button>
        <input type="text" name="award_name" class="form-control" placeholder="Search Award" aria-label="Example text with button addon" aria-describedby="button-addon1">
      </div>

    </form>
        <div class="u-countdown-message u-hidden">
          <p>Sorry, the time is up.</p>
        </div>
      </div>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-bf0a">
    
    <div class="u-clearfix u-sheet u-valign-top-sm u-sheet-1">

      <?php

      if (isset($_GET['award_name'])) {
        display_search($_GET['award_name']);
      } else {
        display_all_awards();
      }

      ?>



    </div>


  </section>


  <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941">
    <div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
      <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
    </div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="">
      <span>Website Builder Software</span>
    </a>.
  </section>

</body>

</html>