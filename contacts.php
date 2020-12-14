<?php
// Session storage for tracking user 
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: Contacts");

$file = 'contacts/contacts.txt';
$data = file_get_contents($file); // Read the contacts file into a string
$data = explode(PHP_EOL, $data); // Split the string into an array by each line

$contacts = array(); // Multi-dimensional array 0 => Full Name, 1 => Email, 2 => Phone Number 
foreach ($data as $row) {
  $contacts[] = explode(", ", $row);
}
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
  <title>Contacts - Super Experience</title>
  <meta property="og:title" content="Contacts - Super Experience">
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

  <link rel="stylesheet" href="css/contacts_styles.css">

  <script type="application/javascript" src="/contacts.764abda6.js"></script>
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
                          <a href="contacts.php" data-uri-path="/contacts" target="_self" class="active">Contacts</a>
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
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
                    <!-- Company Contacts -->
                    <h2 class="section-title section-title--md" tabindex="0" data-type="text"><u>Company Contacts</u></h2>
                    <p>
                      <table style="width:100%">
                        <tr>
                          <th>
                            <h2>Title</h2>
                          </th>
                          <th>
                            <h2>Name</h2>
                          </th>
                          <th>
                            <h2>Email</h2>
                          </th>
                          <th>
                            <h2>Phone Number</h2>
                          </th>
                        </tr>
                        <?php
                        foreach ($contacts as $contact) {
                        ?>
                          <tr>
                            <th><?php echo $contact[0]; ?></th>
                            <th><?php echo $contact[1]; ?></th>
                            <th><?php echo $contact[2]; ?></th>
                            <th><?php echo $contact[3]; ?></th>
                          </tr>
                        <?php
                        }
                        ?>
                      </table>
                    </p>
                    <!-- Secure Section -->
                    <div>
                      <br>
                      <h2 class="section-title section-title--md" tabindex="0" data-type="text"><u>Secure Section</u></h2>
                      <form method="post" action="passwords/password.php">
                        <label style="margin:8px">User ID</label>
                        <input type="text" name="userid">
                        <br>
                        <label>Password</label>
                        <input style="box-sizing:border-box" type="text" name="password">
                        <br><br>
                        <button class="button-ghost-primary" type="submit" name="submit">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="kv-control-placeholder kv-_page" data-kv-control="2">&nbsp;</div>
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
          "title": "Contacts",
          "uriPath": "contacts"
        };
        // ]]>
      </script>
    </div>
  </div>
  <div class="pswp" tabindex="-1">&nbsp;</div>
  <script src="https://runtime.builderservices.io/runtime-endurance-16438/bundle.js"></script>

  <?php include 'inc/contacts_script.php'; ?>

</body>

</html>