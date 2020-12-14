<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$conn = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
$userid = $_SESSION['user_id'];
// Check if is user is logged in
$sql = "SELECT isLoggedIn FROM users WHERE id='$userid'";
$query_result = mysqli_query($conn, $sql);
$isLoggedIn = mysqli_fetch_all($query_result, MYSQLI_ASSOC);
// If not logged in, go to login page
if ($isLoggedIn[0]['isLoggedIn'] == 0) {
  header("Location: login.php");
}

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: Home");
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
  <title>Home - Super Experience</title>
  <meta property="og:title" content="Home - Super Experience">
  <meta property="og:description" content="">
  <meta property="og:image" content="/s/cdn/v1.0/i/m?url=">
  <meta property="og:type" content="website">
  <meta property="og:image:height" content="630">
  <meta property="og:image:width" content="1200">
  <link prefetch="" prerender="/cmpe-272-labs">
  <link prefetch="" prerender="/news">
  <link prefetch="" prerender="/contacts">
  <link prefetch="" prerender="/products-services">
  <link prefetch="" prerender="/about">
  <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Mulish:300|Open+Sans:400" rel="stylesheet">

  <link rel="stylesheet" href="css/index_styles.css">

  <script type="application/javascript" src="/home.c3a082fe.js"></script>
</head>

<body>
  <div>
    <div class="kv-site kv-main" tabindex="-1">
      <a href="#ada-tab-anchor" class="skip-link" data-tag="ada-skip-link"></a>
      <div class="kv-control-placeholder kv-_site" data-kv-control="0">
      </div>
      <content class="kv-page" name="page-home">
        <div class="kv-page-content">
          <div class="kv-control-placeholder kv-_page" data-kv-control="0">
          </div>
          <section class="background-id_808080m16 lahuni82" style=" position:relative;">
            <a name="section20"></a>
            <div class="kv-control-placeholder kv-_section" data-kv-control="background">
            </div>
            <div class="kv-background " style=" background-color: rgb(80,80,80);">

              <div class="kv-background-inner " data-image="background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1590222741439-8fa8f2c6e699%3Fixlib%3Drb-1.2.1%26q%3D90%26fm%3Djpg%26crop%3Dentropy%26cs%3Dtinysrgb%26w%3D2000%26fit%3Dmax%26ixid%3DeyJhcHBfaWQiOjU1MTN9%26utm_source%3Dendurance-innovation%26utm_medium%3Dreferral');" style="
    background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1590222741439-8fa8f2c6e699%3Fixlib%3Drb-1.2.1%26q%3D90%26fm%3Djpg%26crop%3Dentropy%26cs%3Dtinysrgb%26w%3D2000%26fit%3Dmax%26ixid%3DeyJhcHBfaWQiOjU1MTN9%26utm_source%3Dendurance-innovation%26utm_medium%3Dreferral');
    
    
    background-color: rgb(80,80,80);
    opacity: 0.5;"></div>

            </div>

            <div class="position-relative kv-content">
              <div class="kv-control-placeholder kv-_section" data-kv-control="content">
              </div>
              <div class="header-container has-cover ">
                <div class="kv-fixed-header navigation-position kv-check-scroll menu-top">
                  <div class="container-fluid navigation check-mobile">
                    <div class="kv-control-placeholder kv-_content" data-kv-control="navigation">
                    </div>
                    <header data-dynamic-container-element="true">
                      <div class="logo" data-dynamic-navigation-element="logo">
                        <a href="index.php" data-href="index.php" class="fit-text site-title-link">
                          <span class="logo" data-type="text" tabindex="0">Super Experience<span data-prop="global.title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></span>
                        </a>
                      </div>
                      <nav>
                        <ul class="menu menu-item-wrapper" data-dynamic-navigation-element="nav">
                          <li class="">
                            <a href="index.php" data-uri-path="/" target="_self" class="active">Home</a>
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
                            <a href="cmpe-272-labs.php" data-uri-path="/cmpe-272-labs" target="_self">CMPE 272 Labs</a>
                          </li>
                          <li class="">
                            <form method="POST" action="logout.php">
                              <button class="button-ghost-tertiary" type="submit" name="logout">Logout</button>
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
                <div class="container content align-center">
                  <div class="row">
                    <div class="col-md-12 section-text">
                      <h1 class="section-title page-title--md" data-type="text" tabindex="0">Super Experience<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h1>
                      <p class="section-subtitle section-subtitle--md" data-type="text" tabindex="0">Experience the power of super bikes<span data-prop="subtitle" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>

                    </div>
                  </div>
                  <div class="row buttons">
                    <div class="col-md-8">
                      <div class="buttons">
                        <a class="
    button-md mx-2 mb-3 undefined
    button-dynamic-buttons kv-button-instant-edit
    button-ghost-tertiary
  " data-index="0" data-type="button" tabindex="0" data-href="contacts.php" href="contacts.php" data-property="buttons">


                          <div style="" class="button-has-title">Contact Us<div data-editable="button" data-prop="buttons.0.title" style="display:none;">
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="next-section-container kv-next-section kv-check-scroll menu-top">
                  <svg viewBox="0 0 48 23" width="100%" height="100%">
                    <polyline points="1.8,1.6 24,20.4 46.2,1.6 " style="fill:transparent; stroke:#fff; stroke-width:2;"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="1">
          </div>
          <section class="background-id_0 cukoza39 kv-full-page" style=" position:relative;">
            <a name="section1601407523873"></a>
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
              <div class="section align-left kv-full-page">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <div data-type="image" data-property="image" class="cover-image content-image " style="background-position-x:72.3945409429279%;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe194787081754586bf809b6b83d4b833&amp;methods=resize%2C1000%2C5000');" data-setting="border"></div>
                    </div>
                    <div class="col-md-6 text-col section--xl">
                      <div class="text">
                        <p class="cover-subtitle title--xs" data-type="text" tabindex="0">Learn more about what we do<span data-prop="subtitle" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                        <h2 class="cover-title hide-desktop section-title--md" data-type="text" tabindex="0">Welcome to our website<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
                        <p class="cover-description body--md" data-type="text" tabindex="0">Ever wanted to experience the power of a super bike?<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                      </div>
                      <div class="buttons">
                        <a class="
    button button-lg undefined
    button-dynamic-buttons kv-button-instant-edit
    undefined button-primary
  " data-index="0" data-type="button" tabindex="0" data-href="about.php" href="about.php" data-property="buttons">


                          <div style="" class="button-has-title">Read more<div data-editable="button" data-prop="buttons.0.title" style="display:none;">
                            </div>
                          </div>
                        </a>
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
          "mainPage": true,
          "title": "Home",
          "uriPath": "index"
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

  <?php include 'inc/index_script.php'; ?>

</body>

</html>