<?php
// Session storage for tracking user 
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: News");
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
  <title>News - Super Experience</title>
  <meta property="og:title" content="News - Super Experience">
  <meta property="og:description" content="">
  <meta property="og:image" content="/s/cdn/v1.0/i/m?url=">
  <meta property="og:type" content="website">
  <meta property="og:image:height" content="630">
  <meta property="og:image:width" content="1200">
  <link prefetch="" prerender="/cmpe-272-labs">
  <link prefetch="" prerender="/contacts">
  <link prefetch="" prerender="/products-services">
  <link prefetch="" prerender="/about">
  <link prefetch="" prerender="/">
  <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Mulish:300|Open+Sans:400" rel="stylesheet">

  <link rel="stylesheet" href="css/news_styles.css">

  <script type="application/javascript" src="/news.c5a55ef4.js"></script>
</head>

<body>
  <div>
    <div class="kv-site kv-main" tabindex="-1">
      <a href="#ada-tab-anchor" class="skip-link" data-tag="ada-skip-link"></a>
      <div class="kv-control-placeholder kv-_site" data-kv-control="0">
      </div>
      <content class="kv-page" name="page-1601154489452">
        <div class="kv-page-content">
          <div class="kv-control-placeholder kv-_page" data-kv-control="0">
          </div>
          <section class="background-id_3 lahuni82" style=" position:relative;">
            <a name="section26"></a>
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
                            <a href="news.php" data-uri-path="/news" target="_self" class="active">News</a>
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
                            <a href="cmpe-272-labs.php" data-uri-path="/cmpe-272-labs" target="_self">CMPE 272 Labs</a>
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
          <section class="background-id_0 tixoru73 fuweno94 undefined undefined" style=" position:relative;">
            <a name="section1601168055019"></a>
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
              <div class="section section--lg  left">
                <div class="container">
                  <div class="row">
                    <div class="section-text col-12">
                      <h2 class="section-title section-title--md" data-type="text" tabindex="0">Latest News<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>


                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row positioning">
                    <div class="col-12">
                      <div class="kv-control-placeholder kv-_content" data-kv-control="list">
                      </div>
                      <div>
                        <div class="row" data-type="list">
                          <div class="kv-control-placeholder kv-_list" data-kv-control="0">
                          </div>
                          <div class="col-12 col-sm-6 dlist content">
                            <div>
                              <div class="crop landscape drop-shadow">
                                <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe78c09fe98aa4ba18ba8b2cd33be0668&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              </div>
                              <div class="bio left">
                                <h3 class="title--sm" data-type="text" tabindex="0">MotoGP Track resurfaced!<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>

                                <hr class="line">
                                <p class="" data-type="text" tabindex="0">We have just resurfaced our track to ensure that you get the best experience! Using latest edge technology for the track pavement, you can be assured that your tires will grip the track better than ever! ​​​​​​​<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                              </div>
                            </div>
                          </div>
                          <div class="kv-control-placeholder kv-_list" data-kv-control="1">
                          </div>
                          <div class="col-12 col-sm-6 dlist content">
                            <div>
                              <div class="crop landscape drop-shadow">
                                <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:88.12499999999997%;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fbd36d0b1a1624bdb811457227dd67243&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              </div>
                              <div class="bio left">
                                <h3 class="title--sm" data-type="text" tabindex="0">New Bike Added!<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>

                                <hr class="line">
                                <p class="" data-type="text" tabindex="0">We have finally got our hands on the new BMW M 1000RR and are excited to bring it to all of our valuable customers!<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                              </div>
                            </div>
                          </div>
                        </div>
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
          "title": "News",
          "uriPath": "news"
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

  <?php include 'inc/news_script.php'; ?>

</body>

</html>