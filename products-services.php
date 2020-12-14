<?php
require('database/config/config.php');
require('database/config/db.php');

// Session storage for tracking user 
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: Products/Services");

$query = "SELECT product_name, total_visits FROM products WHERE company_name='Super Experience' ORDER BY total_visits DESC LIMIT 5";
$result = mysqli_query($connection, $query);

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
  <title>Products/Services - Super Experience</title>
  <meta property="og:title" content="Products/Services - Super Experience">
  <meta property="og:description" content="">
  <meta property="og:image" content="/s/cdn/v1.0/i/m?url=">
  <meta property="og:type" content="website">
  <meta property="og:image:height" content="630">
  <meta property="og:image:width" content="1200">
  <link prefetch="" prerender="/cmpe-272-labs">
  <link prefetch="" prerender="/news">
  <link prefetch="" prerender="/contacts">
  <link prefetch="" prerender="/about">
  <link prefetch="" prerender="/">
  <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Mulish:300|Open+Sans:400" rel="stylesheet">

  <link rel="stylesheet" href="css/product_services_styles.css">

  <script type="application/javascript" src="/products-services.1443852a.js"></script>
</head>

<body>
  <div>
    <div class="kv-site kv-main" tabindex="-1">
      <a href="#ada-tab-anchor" class="skip-link" data-tag="ada-skip-link"></a>
      <div class="kv-control-placeholder kv-_site" data-kv-control="0">
      </div>
      <content class="kv-page" name="page-location">
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
                            <a href="products-services.php" data-uri-path="/products-services" target="_self" class="active">Products/Services</a>
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
          <section class="background-id_0 macuje57" style=" position:relative;">
            <a name="section1601410261914"></a>
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
              <div class="section section--lg left ">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="content-card align-left">
                        <div class="column">
                          <div data-aspect-ratio="" class="">
                            <div data-type="image" data-property="image" class="featured-image content-image " aria-label="purple, black, and orange abstract paintin" style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe78c09fe98aa4ba18ba8b2cd33be0668&amp;methods=resize%2C1000%2C5000');" data-setting="border"></div>
                          </div>
                        </div>
                        <div class="column">
                          <div class="section-text content-text">
                            <h2 class="section-title on_card section-title--sm" data-type="text" tabindex="0">MotoGP Track<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
                            <p class="section-description on_card font-scale-md body--md" data-type="text" tabindex="0">Unleash the full potential of our bikes on our custom MotoGp style race track.<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                            <a class="
     button-card button-md button undefined
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
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="2">
          </div>
          <section class="background-id_0adjacent zoduye36 hiluse82 undefined" style=" position:relative;">
            <a name="section1601167919758"></a>
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
              <div class="section section--lg align-center ">
                <div class="container titles">
                  <div class="row">
                    <div class="section-text col-12">
                      <h2 class="section-title caption-title section-title--md" data-type="text" tabindex="0">Products<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>

                      <p class="section-description body--md" data-type="text" tabindex="0">Choose a bike from our selection to rent on our track. <br><a href="product_pages/prev_visited.php">Last 5 previously visited products!</a><br>
                        <!--<a href="product_pages/most_visited.php">Top 5 most visited products!</a><span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>-->
                        <h2 class="section-title caption-title section-title--md" data-type="text" tabindex="0">Top 5 most visited products!<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h2>
                        <table border="5" cellspacing="0" cellpadding="10">
                          <?php
                          print("<th>Company Name</th><th>Visits</th>");
                          for (
                            $counter = 0;
                            $row = mysqli_fetch_row($result);
                            $counter++
                          ) {
                            print("<tr>");

                            foreach ($row as $key => $value)
                              print("<td>$value</td>");
                            print("</tr>");
                          }
                          // Free Result
                          mysqli_free_result($result);

                          // Close Connection
                          mysqli_close($connection);
                          ?>
                        </table>
                        <br>

                        <!-- -->
                    </div>
                  </div>
                </div>
                <div class="container items">
                  <div class="row position">
                    <div class="col-12 square">
                      <div class="kv-control-placeholder kv-_content" data-kv-control="list">
                      </div>
                      <!-- Start Product List -->
                      <div>
                        <div class="row" data-type="list">
                          <div class="kv-control-placeholder kv-_list" data-kv-control="0">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe194787081754586bf809b6b83d4b833&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Kawasaki H2R<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 310 hp<br>Torque: 115 lb⋅ft<br>Wet Weight: 476 lbs<br>0-60 mph: ~3 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/h2r.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="1">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:100.00000000000004%;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fe295ca4b281d40fd88621d9534367e52&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">BMW HP4 Race<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power:&nbsp;215 hp<br>Torque: 88&nbsp;lb⋅ft<br>Wet Weight: 378 lbs<br>0-60mph : ~2.9 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/hp4.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="2">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position: center center;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fd1b4f39d864746ceb512b0731f4587bd&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Ducati V4R<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 221 hp<br>Torque: 83 lb⋅ft<br>Wet Weight: 425 lbs<br>0-60 mph: ~3.2 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/v4r.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="3">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://images.builderservices.io/s/cdn/v1.0/i/m?url=https%3A%2F%2Fstorage.googleapis.com%2Fproduction-ipage-v1-0-5%2F665%2F465665%2FLDRACrHS%2Fbd36d0b1a1624bdb811457227dd67243&amp;methods=resize%2C600%2C5000');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">BMW M 1000RR<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 205 hp<br>Torque:&nbsp;83 lb⋅ft<br>Wet Weight: 374 lbs<br>0-60 mph: ~3.1 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/m1000rr.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="4">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://s3-eu-west-1.amazonaws.com/crash.net/visordown.com/2020_YAM_YZF1000R1SPL_EU_BWM2_STA_001-70560.jpg');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Yamaha R1M<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 200 hp<br>Torque:&nbsp;83 lb⋅ft<br>Wet Weight: 450 lbs<br>0-60 mph: ~2.6 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/r1m.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="5">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://i.ytimg.com/vi/T0UxKtx8lEo/hqdefault.jpg');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Honda CBR1000RR-R Fireblade SP<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 215 hp<br>Torque:&nbsp;83 lb⋅ft<br>Wet Weight: 443 lbs<br>0-60 mph: ~2.5 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/cbr1000rr.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="6">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://www.cycleworld.com/resizer/o1Y-2A19Eg4CBYcmrUVHl6_xl1Q=/1293x970/arc-anglerfish-arc2-prod-bonnier.s3.amazonaws.com/public/JNTBUOM2IOZD4ELCBNOUVL7CNI.jpg');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Yamaha R6<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 117 hp<br>Torque:&nbsp;45 lb⋅ft<br>Wet Weight: 419 lbs<br>0-60 mph: ~2.8 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/r6.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="7">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://www.webbikeworld.com/wp-content/uploads/2020/01/20ZX1002E_201BK1DRF1CG_A.high_-scaled.jpeg');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Kawasaki ZX-10R<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 200 hp<br>Torque:&nbsp;84 lb⋅ft<br>Wet Weight: 450 lbs<br>0-60 mph: ~2.9 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/zx10r.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="8">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://2yrh403fk8vd1hz9ro2n46dd-wpengine.netdna-ssl.com/wp-content/uploads/2020/09/2020-Suzuki-GSX-R1000R-100th-Anniversary-Limited-Edition-First-Look-5.jpg');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Suzuki GSX-R1000R<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 199 hp<br>Torque:&nbsp;80 lb⋅ft<br>Wet Weight: 448 lbs<br>0-60 mph: ~3 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/gsxr1000r.php">More Info</a>
                              </div>
                            </div>
                          </div>

                          <div class="kv-control-placeholder kv-_list" data-kv-control="9">
                          </div>

                          <div class="col-12 col-sm-6 dlist">
                            <div class="content-card default-card drop-shadow-md">
                              <div data-type="image" data-property="image" class="photo kv-gallery content-image " style="background-position-x:94.8132780082987%;background-image: url('https://www.cycleworld.com/resizer/dgFu_kOGtZ350cFLgMfviymuis0=/1200x628/smart/arc-anglerfish-arc2-prod-bonnier.s3.amazonaws.com/public/YZLRH2CSC5D5PKGS42T3YKRJ5U.jpg');" data-setting="border"></div>
                              <div class="bio ">
                                <h3 class="title title--xs" data-type="text" tabindex="0">Honda CBR600RR<span data-prop="title" class="ck-editable-element" data-editable="basic" style="display:none;"></span></h3>
                                <p class="description body--md" data-type="text" tabindex="0">Power: 118 hp<br>Torque:&nbsp;48 lb⋅ft<br>Wet Weight: 410 lbs<br>0-60 mph: ~3 seconds<span data-prop="description" class="ck-editable-element" data-editable="basic" style="display:none;"></span></p>
                                <a href="product_pages/cbr600rr.php">More Info</a>
                              </div>
                            </div>
                          </div>

                        </div>
                        <!-- End Products List -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="kv-control-placeholder kv-_page" data-kv-control="3">
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
          "title": "Products/Services",
          "uriPath": "products-services"
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

  <?php include 'inc/product_services_script.php'; ?>

</body>

</html>