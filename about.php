<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: About");
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
  <title>About - Super Experience</title>
  <meta property="og:title" content="About - Super Experience">
  <meta property="og:description" content="">
  <meta property="og:image" content="/s/cdn/v1.0/i/m?url=">
  <meta property="og:type" content="website">
  <meta property="og:image:height" content="630">
  <meta property="og:image:width" content="1200">
  <link prefetch="" prerender="/cmpe-272-labs">
  <link prefetch="" prerender="/news">
  <link prefetch="" prerender="/contacts">
  <link prefetch="" prerender="/products-services">
  <link prefetch="" prerender="/">
  <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Mulish:300|Open+Sans:400" rel="stylesheet">

  <link rel="stylesheet" href="css/about_styles.css">

  <script type="application/javascript" src="/about.8f016fa9.js"></script>
</head>

<body>
  <div>
    <div class="kv-site kv-main" tabindex="-1">
      <a href="#ada-tab-anchor" class="skip-link" data-tag="ada-skip-link"></a>
      <div class="kv-control-placeholder kv-_site" data-kv-control="0">
      </div>
      <content class="kv-page" name="page-gallery">
        <div class="kv-page-content">
          <div class="kv-control-placeholder kv-_page" data-kv-control="0">
          </div>
          <section class="background-id_3 lahuni82" style=" position:relative;">
            <a name="section22"></a>
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
                            <a href="about.php" data-uri-path="/about" target="_self" class="active">About</a>
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
          <section class="background-id_0 qukefe53" style=" position:relative;">
            <a name="section1601410707497"></a>
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
              <div class="section section--lg kv-notify-inview align-center">
                <div class="container">
                  <div class="row v-center direction">
                    <div class="section-text column">
                      <h2 class="section-title title section-title--md" data-type="text" tabindex="0">Welcome to our website<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
                      <p class="section-description body--md" data-type="text" tabindex="0">Super Experience provides motorcycle enthusiasts and thrill seekers the chance to experience a super bike. Choose a bike from our stock and book some hours at our track!<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="2">
          </div>
          <section class="background-id_0adjacent komupe08 yilugu00 undefined" style=" position:relative;">
            <a name="section1601410782272"></a>
            <div class="kv-control-placeholder kv-_section" data-kv-control="background">
            </div>
            <div class="kv-background " style=" background-color: rgb(45,45,45);">

              <div class="kv-background-inner " style="
    
    
    
    background-color: rgb(45,45,45);
    "></div>

            </div>

            <div class="position-relative kv-content">
              <div class="kv-control-placeholder kv-_section" data-kv-control="content">
              </div>
              <div class="section section--md align-center">
                <div class="container">
                  <div class="row">
                    <div class="section-text col-12">
                      <h2 class="section-title section-title--md" data-type="text" tabindex="0">MotoGP Track<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
                      <p class="section-subtitle section-subtitle--sm" data-type="text" tabindex="0">Experience a super bike with no restrictions on our track.<span data-prop="subtitle" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                      <p class="section-description body--md" data-type="text" tabindex="0">Our track is specially designed to ensure that our customers will have the best experience while riding. Contains many straightaways for testing the speeds of the bikes and various corners to test the leaning of the bikes. The layout of the track is very spacious which ensure the safety of customers by giving them enough room in the event they go off track.<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="row row-align">
                    <div class="col-12 gutters landscape ">
                      <div class="kv-control-placeholder kv-_content" data-kv-control="list">
                      </div>
                      <div>
                        <div class="row" data-type="list">
                          <div class="kv-control-placeholder kv-_list" data-kv-control="0">
                          </div>
                          <div class="col-12 col-sm-6">
                            <div class="column">
                              <div class="image-container ">
                                <div data-type="image" data-property="image" class="content-image kv-gallery " aria-label="purple, black, and orange abstract paintin" style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe78c09fe98aa4ba18ba8b2cd33be0668&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row" data-type="swipe-list">
                          <div class="swiper-container" style="padding-bottom: 25px;">
                            <div class="swiper-wrapper">

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination" style="bottom: 0;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="3">
          </div>
          <section class="background-id_0 disisu19 disudo10 undefined" style=" position:relative;">
            <a name="section21"></a>
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
              <div class="section section--lg align-left">
                <div class="container">
                  <div class="row">
                    <div class="section-text col-12">
                      <h2 class="section-title section-title--md" data-type="text" tabindex="0">Gallery<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>


                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="row row-align">
                    <div class="col-12 gutters landscape  seamless">
                      <div class="kv-control-placeholder kv-_content" data-kv-control="list">
                      </div>
                      <div>
                        <div class="row" data-type="list">
                          <div class="kv-control-placeholder kv-_list" data-kv-control="0">
                          </div>
                          <div class="col-12 col-md-6 column">
                            <div data-type="image" data-property="image" class="content-image kv-gallery " aria-label="low angle photo of white ceiling structure of a building" style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe194787081754586bf809b6b83d4b833&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                            <div class="item-text align-left">
                              <h3 class="item-title title--md" data-type="text" tabindex="0">Kawasaki H2R<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>

                            </div>
                          </div>
                          <div class="kv-control-placeholder kv-_list" data-kv-control="1">
                          </div>
                          <div class="col-12 col-md-6 column">
                            <div data-type="image" data-property="image" class="content-image kv-gallery " aria-label="man pointing forward" style="background-position-x:99.99999999999997%;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe295ca4b281d40fd88621d9534367e52&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                            <div class="item-text align-left">
                              <h3 class="item-title title--md" data-type="text" tabindex="0">BMW HP4 Race<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>

                            </div>
                          </div>
                          <div class="kv-control-placeholder kv-_list" data-kv-control="2">
                          </div>
                          <div class="col-12 col-md-6 column">
                            <div data-type="image" data-property="image" class="content-image kv-gallery " aria-label="green and white concrete building" style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fd1b4f39d864746ceb512b0731f4587bd&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                            <div class="item-text align-left">
                              <h3 class="item-title title--md" data-type="text" tabindex="0">Ducati Panigale V4R<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>

                            </div>
                          </div>
                          <div class="kv-control-placeholder kv-_list" data-kv-control="3">
                          </div>
                          <div class="col-12 col-md-6 column">
                            <div data-type="image" data-property="image" class="content-image kv-gallery " aria-label="gray concrete building" style="background-position-x:92.90465631929041%;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fbd36d0b1a1624bdb811457227dd67243&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                            <div class="item-text align-left">
                              <h3 class="item-title title--md" data-type="text" tabindex="0">BMW M 1000RR<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>

                            </div>
                          </div>
                        </div>
                        <div class="row" data-type="swipe-list">
                          <div class="swiper-container" style="padding-bottom: 25px;">
                            <div class="swiper-wrapper">

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination" style="bottom: 0;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="4">
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
          "title": "About",
          "uriPath": "about"
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

  <?php include 'inc/about_script.php'; ?>

</body>

</html>