<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Axtra HTML5 Template">

  <title>Visual Graphics</title>

  <!-- Fav Icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/logo/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/logo/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/logo/favicon-16x16.png">
<link rel="manifest" href="assets/imgs/logo/site.webmanifest">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <link rel="stylesheet" href="style.css">
</head>


<body>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Team Cursor -->
  <div class="cursor" id="team_cursor">Drag</div>


  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__icon" style="width:auto;height:auto;background:black;">
    <div class="switcher__btn mode-type" style="border-radius: 40%;">
      <button id="mode_toggle" style="border-radius: 40%;" class="active" data-mode="dark">
        <i class="fa-solid fa-moon"></i> 
      </button>
    </div>
  </div>
  <!-- Switcher Area End -->


  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  <header class="header__area">
    <div class="header__inner">
      <div class="header__logo">
        <a href="index.html">
          <img class="logo-primary" src="assets/imgs/logo/vert-logo-dark.png" style="
    max-width: 90%;" alt="Site Logo">
          <img class="logo-secondary" src="assets/imgs/logo/logo-dark.png" style="max-width: 318%;" alt="Mobile Logo">
        </a>
      </div>
      <div class="header__nav-icon">
        <button id="open_offcanvas"><img src="assets/imgs/icon/menu-white.png" alt="Menubar Icon"></button>
      </div>
      <div class="header__support">
        <p>Call Us Now <a href="tel:+918459708755">+91-8459708755</a></p>
      </div>
    </div>
  </header>
  <!-- Header area end -->
     <!-- Offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__body">
      <div class="offcanvas__left">
        <div class="offcanvas__logo">
          <a href="index.html"><img src="assets/imgs/logo/logo-dark.png" alt="Offcanvas Logo"></a>
        </div>
        <div class="offcanvas__social">
          <h3 class="social-title">Follow Us</h3>
          <ul>
            <li><a href="https://www.instagram.com/visualgraphics94/">Instagram</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">YouTube</a></li>
          </ul>
        </div>
        <div class="offcanvas__links">
          <ul>
            <!-- <li><a href="about.php">About</a></li> -->
            <li><a href="contact.php">contact</a></li>
            <li></li>
            <!-- <li><a href="blog.php">blog</a></li> -->
          </ul>
        </div>
      </div>
      <div class="offcanvas__mid">
        <div class="offcanvas__menu-wrapper">
          <nav class="offcanvas__menu">
            <ul class="menu-anim">
              <li><a href="index.html">home</a>
              </li>
              <!-- <li><a href="about.php">about</a></li> -->
              <li>
                  <a href="service.php">Service</a>
                  <ul>
                    <li><a href="graphic-design.php">Graphic Design</a></li>
                    <li><a href="web-design.php">Website Development</a></li>
                    <li><a href="video-edit.php">Video Editing</a></li>
                  </ul>
              </li>
                 
              <li><a href="contact.php">contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__search">
          <form action="#">
            <input type="text" name="search" placeholder="Search keyword">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
        <div class="offcanvas__contact">
          <h3>Get in touch</h3>
          <ul>
            <li><a href="tel:+918459708755">+91 8459708755</a></li>
            <li><a href="mailto:info@extradesign.com">info@visualgraphics.com</a></li>
            <!-- <li>230 Norman Street New York, QC (USA) H8R 1A1</li> -->
          </ul>
        </div>
        <img src="assets/imgs/shape/11.png" alt="shape" class="shape-1">
        <img src="assets/imgs/shape/12.png" alt="shape" class="shape-2">
      </div>
      <div class="offcanvas__close">
        <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
  </div>
  <!-- Offcanvas area end -->