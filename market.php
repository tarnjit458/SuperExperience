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
array_push($_SESSION["pages"], "Super Experience: Market");

$query = "SELECT company_name, product_name, total_visits FROM products ORDER BY total_visits DESC LIMIT 5";
$result = mysqli_query($connection, $query);

// Update tracking array in db
$userid = $_SESSION["user_id"];
$session_info = serialize($_SESSION["pages"]);
$query = "UPDATE users SET tracking = '$session_info' WHERE id='$userid'";
mysqli_query($connection, $query);

// Get the tracking data from db
$query = "SELECT tracking FROM users WHERE id='$userid'";
$result_pages = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result_pages);
$session_array = unserialize($row['tracking']);
$session_array = array_reverse($session_array);
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
    <title>Market Place - Super Experience</title>
    <meta property="og:title" content="Market Place - Super Experience">
    <meta property="og:description" content="">
    <meta property="og:image" content="/s/cdn/v1.0/i/m?url=">
    <meta property="og:type" content="website">
    <meta property="og:image:height" content="630">
    <meta property="og:image:width" content="1200">
    <link prefetch="" prerender="/cmpe-272-labs">
    <link prefetch="" prerender="/news">
    <link prefetch="" prerender="/products-services">
    <link prefetch="" prerender="/about">
    <link prefetch="" prerender="/">
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Mulish:300|Open+Sans:400" rel="stylesheet">

    <link rel="stylesheet" href="css/market_styles.css">

    <script type="application/javascript" src="/market.764abaa6.js"></script>
</head>

<body>
    <div>
        <div class="kv-site kv-main" tabindex="-1">
            <div class="kv-control-placeholder kv-_site" data-kv-control="0">&nbsp;</div>
            <div class="kv-page-content">
                <div class="kv-control-placeholder kv-_page" data-kv-control="0">&nbsp;</div>
                <section class="background-id_3 lahuni82" style="position: relative;"><a name="section29"></a>
                    <div class="position-relative kv-content">
                        <div class="kv-control-placeholder kv-_section" data-kv-control="content">&nbsp;</div>
                        <div class="header-container no-cover ">
                            <div class="kv-fixed-header navigation-position kv-check-scroll menu-top" data-kv-scroll-offset="32">
                                <div class="container-fluid navigation check-mobile">
                                    <div class="kv-control-placeholder kv-_content" data-kv-control="navigation">&nbsp;</div>
                                    <header data-dynamic-container-element="true">
                                        <div class="kv-control-placeholder kv-_navigation" data-kv-control="background">&nbsp;</div>
                                        <div class="kv-background " style="background-color: #243665;">&nbsp;</div>
                                        <div class="logo" data-dynamic-navigation-element="logo"><a class="fit-text site-title-link" href="index.php" data-href="index.php"> <span class="logo" tabindex="0" data-type="text">Super Experience</span> </a></div>
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
                                                    <a href="market.php" data-uri-path="/market" target="_self" class="active">Market</a>
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
                                            <div class="callbutton" data-dynamic-navigation-element="calltoactionbutton">&nbsp;</div>
                                            <div class="kv-menu">&nbsp;</div>
                                        </nav>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="kv-control-placeholder kv-_page" data-kv-control="1">&nbsp;</div>
                <section class="background-id_0 hagopy24" style="position: relative;"><a name="section1601168213107"></a>
                    <div class="kv-control-placeholder kv-_section" data-kv-control="background">&nbsp;</div>
                    <div class="kv-background " style="background-color: #212121;">&nbsp;</div>
                    <div class="position-relative kv-content">
                        <div class="kv-control-placeholder kv-_section" data-kv-control="content">&nbsp;</div>
                        <div class="section section--lg">
                            <div class="container align-items-center">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
                                        <!-- Market Section -->
                                        <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center"><u>Market Section</u></h1>
                                        <div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
                                        </div>
                                        <div class="row">
                                            <table borderless cellpadding="3" cellspacing="2" style="text-align:center; width:50%; float:left" width="100">
                                                <tr>
                                                    <td>Super Experience</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/e194787081754586bf809b6b83d4b833" alt="filler" width="400" height="400"></td>
                                                </tr>
                                                <tr>
                                                    <td>Super Experience provides motorcycle enthusiasts and thrill seekers the chance to experience a super bike. Choose a bike from our stock and book some hours at our track!</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "<a href='https://super-experience.herokuapp.com/login.php?id=$userid'" ?>>Super Experience</a></td>
                                                </tr>
                                            </table>
                                            <table borderless cellpadding="3" cellspacing="2" style="text-align:center; width:50%; float:right" width="100">
                                                <tr>
                                                    <td>E&L Realty</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://yelp273.s3-us-west-1.amazonaws.com/buying-or-selling-house.jpg" alt="filler" width="400" height="400"></td>
                                                </tr>
                                                <tr>
                                                    <td>E&L started out with two man who's sole mission is to share the benefits of real estate to the world. Engaging in real estate can be a time consuming and confusing matter. Here at E&L Realty, we strive to help you along the way in your real estate business, whether it's turning your house to a rental to buy/selling your home. Our staff have some of the best real estate agents in Pleasanton and have helped many customers.</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "<a href='https://el-realty.herokuapp.com/login.php?id=$userid'" ?>>E&L Realty</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <table borderless cellpadding="3" cellspacing="2" style="text-align:center; width:50%; float:left" width="100">
                                                <tr>
                                                    <td>Daily Fresh</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://yelp273.s3-us-west-1.amazonaws.com/Asian+Pear.jpg" alt="filler" width="400" height="400"></td>
                                                </tr>
                                                <tr>
                                                    <td>We sell fresh fruit, meat, and seafood.</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "<a href='https://evening-journey-52003.herokuapp.com/login.php?id=$userid'>Daily Fresh</a>" ?></td>
                                                </tr>
                                            </table>
                                            <table borderless cellpadding="3" cellspacing="2" style="text-align:center; width:50%; float:right" width="100">
                                                <tr>
                                                    <td>Basketball Basics</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://yelp273.s3-us-west-1.amazonaws.com/logo.png" alt="filler" width="400" height="400"></td>
                                                </tr>
                                                <tr>
                                                    <td>We are a service that offer basketballs, cones, pumps, and other basketball related equipment.</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "<a href='https://cmpe-272.herokuapp.com/login.php?id=$userid'>Basketball Basics</a>" ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <br><br>

                                <form style="text-align:center" method="POST" action="">
                                    <label for="tableFilter">Choose table filter:</label>
                                    <select id="tableFilter" name="tableFilter">
                                        <option value="top5Review">Top Review (All)</option>
                                        <option value="mostVisitedProduct">Most Visited (All)</option>
                                        <option value="mostVisitedProduct_elrealty">Most Visited (E&L Realty)</option>
                                        <option value="mostVisitedProduct_superexperience">Most Visited (Super Experience)</option>
                                        <option value="mostVisitedProduct_basketball">Most Visited (Basketball Basics)</option>
                                        <option value="mostVisitedProduct_dailyfresh">Most Visited (Daily Fresh)</option>

                                        <option value="topProduct_elrealty">Top 5 Review (E&L Realty)</option>
                                        <option value="topProduct_superexperience">Top 5 Review(Super Experience)</option>
                                        <option value="topProduct_basketball">Top 5 Review (Basketball Basics)</option>
                                        <option value="topProduct_dailyfresh">Top 5 Review (Daily Fresh)</option>
                                    </select>
                                    <button class="btn btn-sm btn-secondary" name="TABLE_FILTER">Filter</button>
                                </form>

                                <?php
                                echo "<br>";
                                // curl call
                                $link = "https://super-experience.herokuapp.com/filter_options/topFiveReviewsAllCo.php";

                                if (isset($_POST["TABLE_FILTER"])) {
                                    if ($_POST['tableFilter'] == "top5Review") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/topFiveReviewsAllCo.php";
                                    } else if ($_POST['tableFilter'] == "mostVisitedProduct") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/mostVisitedProductAll.php";
                                    } else if ($_POST['tableFilter'] == "mostVisitedProduct_elrealty") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/elRealtyTop5Visited.php";
                                    } else if ($_POST['tableFilter'] == "mostVisitedProduct_superexperience") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/superExperienceTop5Visited.php";
                                    } else if ($_POST['tableFilter'] == "mostVisitedProduct_basketball") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/basketballTop5Visited.php";
                                    } else if ($_POST['tableFilter'] == "mostVisitedProduct_dailyfresh") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/dailyFreshTop5Visited.php";
                                    } else if ($_POST['tableFilter'] == "topProduct_elrealty") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/elrealtyTop5Review.php";
                                    } else if ($_POST['tableFilter'] == "topProduct_superexperience") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/superExperienceTop5Review.php";
                                    } else if ($_POST['tableFilter'] == "topProduct_basketball") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/basketballTop5Review.php";
                                    } else if ($_POST['tableFilter'] == "topProduct_dailyfresh") {
                                        $link = "https://super-experience.herokuapp.com/filter_options/dailyFreshTop5Review.php";
                                    }
                                }

                                $ch = curl_init();
                                //$ch = curl_init("http://localhost:8000/topFiveReviewsAllCo.php");
                                //curl_setopt($ch, CURLOPT_FILE, $fp);
                                curl_setopt($ch, CURLOPT_URL, $link);
                                curl_setopt($ch, CURLOPT_HEADER, 0);

                                curl_exec($ch);
                                curl_close($ch);
                                ?>


                                <br>

                                <div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
                                    <br>
                                    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center"><u>User Marketplace tracking!</u></h1>

                                    <table border="5" cellspacing="0" cellpadding="10" align="center">
                                        <?php
                                        print("<th>Last 10 Pages Visited</th>");

                                        print("<tr>");
                                        foreach ($session_array as $value) {
                                            print("<td>$value</td>");
                                            print("</tr>");
                                        }
                                        ?>
                                    </table>
                                </div>


                                <!-- End of Market Section -->
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <div class=" kv-control-placeholder kv-_page" data-kv-control="2">&nbsp;</div>
            <section class="background-id_1 bajigu77" style="position: relative;"><a name="section16"></a>
                <div class="kv-control-placeholder kv-_section" data-kv-control="background">&nbsp;</div>
                <div class="kv-background " style="background-color: #ffffff;">&nbsp;</div>
                <div class="position-relative kv-content">
                    <div class="kv-control-placeholder kv-_section" data-kv-control="content">&nbsp;</div>
                    <!-- FOOTER -->
                    <?php include 'inc/footer.php' ?>
                </div>
            </section>
        </div>
        <script>
            // <![CDATA[
            window._page = {
                "mainPage": false,
                "title": "Market",
                "uriPath": "market"
            };
            // ]]>
        </script>
    </div>
    </div>
    <div class="pswp" tabindex="-1">&nbsp;</div>
    <script src="https://runtime.builderservices.io/runtime-endurance-16438/bundle.js"></script>

    <?php include 'inc/market_script.php'; ?>

</body>

</html>