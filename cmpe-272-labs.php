<?php
// Session storage for tracking user 
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: CMPE 272 Labs");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/industry-7/32/industry_motorbike-512.png">

  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link rel="preconnect" href="https://components.mywebsitebuilder.com/" crossorigin="">
  <link rel="preconnect" href="https://in-app.mywebsitebuilder.com/" crossorigin="">
  <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,viewport-fit=cover">
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="en">
  <title>CMPE 272 Labs - Super Experience</title>
  <meta property="og:title" content="CMPE 272 Labs - Super Experience">
  <meta property="og:description" content="">
  <meta property="og:image" content="/s/cdn/v1.0/i/m?url=">
  <meta property="og:type" content="website">
  <meta property="og:image:height" content="630">
  <meta property="og:image:width" content="1200">
  <link prefetch="" prerender="/news">
  <link prefetch="" prerender="/contacts">
  <link prefetch="" prerender="/products-services">
  <link prefetch="" prerender="/about">
  <link prefetch="" prerender="/">
  <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Mulish:300|Open+Sans:400" rel="stylesheet">

  <link rel="stylesheet" href="css/cmpe_272_labs_styles.css">

  <script type="application/javascript" src="/cmpe-272-labs.58aeec41.js"></script>
</head>

<body>
  <div>
    <div class="kv-site kv-main" tabindex="-1">
      <a href="#ada-tab-anchor" class="skip-link" data-tag="ada-skip-link"></a>
      <div class="kv-control-placeholder kv-_site" data-kv-control="0">
      </div>
      <content class="kv-page" name="page-1601154634811">
        <div class="kv-page-content">
          <div class="kv-control-placeholder kv-_page" data-kv-control="0">
          </div>
          <section class="background-id_3 lahuni82" style=" position:relative;">
            <a name="section46"></a>
            <div class="position-relative kv-content">
              <div class="kv-control-placeholder kv-_section" data-kv-control="content">
              </div>
              <div class="header-container no-cover ">
                <div class="kv-fixed-header navigation-position kv-check-scroll menu-top" data-kv-scroll-offset="32">
                  <div class="container-fluid navigation check-mobile">
                    <div class="kv-control-placeholder kv-_content" data-kv-control="navigation">
                    </div>
                    <header data-dynamic-container-element="true">
                      <div class="kv-control-placeholder kv-_navigation" data-kv-control="background">
                      </div>
                      <div class="kv-background " style=" background-color: rgb(36,54,101);">

                        <div class="kv-background-inner pattern-white-2" style="
    
    
    
    background-color: rgb(36,54,101);
    opacity: 0.5;"></div>

                      </div>

                      <div class="logo" data-dynamic-navigation-element="logo">
                        <a href="index.php" data-href="index.php" class="fit-text site-title-link">
                          <span class="logo" data-type="text" tabindex="0">Super Experience<span data-prop="global.title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></span>
                        </a>
                      </div>
                      <nav>
                        <ul class="menu menu-item-wrapper" data-dynamic-navigation-element="nav">
                          <li class="">
                            <a href="index.php" data-uri-path="/" target="_self">Home</a>
                          </li>
                          <li class="">
                            <a href="about.php" data-uri-path="/about" target="_self">About</a>
                          </li>
                          <li class="">
                            <a href="products-services.php" data-uri-path="/products-services" target="_self">Products/Services</a>
                          </li>
                          <li class="">
                            <a href="news.php" data-uri-path="/news" target="_self">News</a>
                          </li>
                          <li class="">
                            <a href="contacts.php" data-uri-path="/contacts" target="_self">Contacts</a>
                          </li>
                          <li class="">
                            <a href="user.php" data-uri-path="/user" target="_self">User</a>
                          </li>
                          <li class="">
                            <a href="market.php" data-uri-path="/market" target="_self">Market</a>
                          </li>
                          <li class="">
                            <a href="cmpe-272-labs.php" data-uri-path="/cmpe-272-labs" target="_self" class="active">CMPE 272 Labs</a>
                          </li>
                          <li class="">
                            <form method="POST" action="logout.php">
                              <button class="button-ghost-primary" type="submit" name="logout">Logout</button>
                            </form>
                          </li>
                        </ul>
                        <div class="callbutton" data-dynamic-navigation-element="calltoactionbutton">
                          <div class="custom-header-buttons">

                            <a id="custom-header-button-template" class="button-cart button-background button-primary"></a>
                          </div>
                        </div>
                        <div class="kv-menu">
                          <div class="menu-icon">
                            <div></div>
                            <div></div>
                            <div></div>
                          </div>
                        </div>
                      </nav>
                    </header>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="1">
          </div>
          <section class="background-id_0 hagopy24" style=" position:relative;">
            <a name="section1601154716222"></a>
            <div class="kv-control-placeholder kv-_section" data-kv-control="background">
            </div>
            <div class="kv-background " style=" background-color: rgb(33,33,33);">

              <div class="kv-background-inner " style="
    
    
    
    background-color: rgb(33,33,33);
    "></div>

            </div>

            <div class="position-relative kv-content">
              <div class="kv-control-placeholder kv-_section" data-kv-control="content">
              </div>
              <div class="section section--lg">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
                      <p class="section-subtitle overline title--xs" data-type="text" tabindex="0">CMPE 272 Labs<span data-prop="subtitle" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                      <h2 class="section-title section-title--md" data-type="text" tabindex="0">Lab 4 HTML5 Drawing<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
                      <div id="container">
                        <canvas id="canvas" width="400" height="400"></canvas>
                        <script>
                          const canvas = document.getElementById('canvas');
                          const body = canvas.getContext('2d');
                          const head = canvas.getContext('2d');
                          const ear = canvas.getContext('2d');
                          const trunk1 = canvas.getContext('2d');
                          const trunk2 = canvas.getContext('2d');
                          const leg1 = canvas.getContext('2d');
                          const leg2 = canvas.getContext('2d');

                          body.fillStyle = 'blue';
                          body.fillRect(45, 100, 150, 100);
                          body.moveTo(0, 0);

                          head.fillStyle = 'blue';
                          head.arc(200, 110, 40, 0, 2 * Math.PI);
                          head.stroke();
                          head.fill();

                          ear.fillStyle = 'blue';
                          ear.arc(155, 80, 25, 0, 2 * Math.PI);
                          ear.stroke();
                          ear.fill();

                          trunk1.fillStyle = 'blue';
                          trunk1.rotate(20 * Math.PI / 180);
                          trunk1.fillRect(230, 20, 100, 25);

                          trunk2.fillStyle = 'blue';
                          trunk2.rotate(-10 * Math.PI / 180);
                          trunk2.fillRect(300, 75, 50, 25);

                          leg1.fillStyle = 'blue';
                          leg1.fillRect(100, 100, 25, 100);

                          leg2.fillStyle = 'blue';
                          leg2.fillRect(180, 100, 25, 95);
                        </script>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="2">
          </div>
          <section class="background-id_1 bajigu77" style=" position:relative;">
            <a name="section16"></a>
            <div class="kv-control-placeholder kv-_section" data-kv-control="background">
            </div>
            <div class="kv-background " style=" background-color: rgb(255,255,255);">

              <div class="kv-background-inner " style="
    
    
    
    background-color: rgb(255,255,255);
    "></div>

            </div>

            <div class="position-relative kv-content">
              <div class="kv-control-placeholder kv-_section" data-kv-control="content">
              </div>
              <!-- FOOTER -->
              <?php include 'inc/footer.php' ?>
            </div>
          </section>

        </div>
      </content>
      <script>
        window._page = {
          "mainPage": false,
          "title": "CMPE 272 Labs",
          "uriPath": "cmpe-272-labs"
        };
      </script>
    </div>
  </div>
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption" style="display: none;">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://runtime.builderservices.io/runtime-endurance-16438/bundle.js"></script>

  <?php include 'inc/cmpe_272_labs_script.php'; ?>

</body>

</html>