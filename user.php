<?php
session_start();
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

$user_id = $_SESSION["user_id"];
$user_img = $_SESSION["user_img"];
$user_fName =  $_SESSION["user_fName"];
$user_lName = $_SESSION["user_lName"];
$user_name = $user_fName . ' ' . $user_lName;
$user_email = $_SESSION["user_email"];
$user_phone = $_SESSION["user_phone"] ? $_SESSION["user_phone"] :  "Not Entered";
$user_mobile = $_SESSION["user_mobile"] ? $_SESSION["user_mobile"] :  "Not Entered";
$user_address = $_SESSION["user_address"] ? $_SESSION["user_address"] :  "Not Entered";
$user_twitter = $_SESSION["user_twitter"] ? $_SESSION["user_twitter"] :  "Not Entered";
$user_instagram = $_SESSION["user_instagram"] ? $_SESSION["user_instagram"] :  "Not Entered";
$user_facebook = $_SESSION["user_facebook"] ? $_SESSION["user_facebook"] :  "Not Entered";

$count = count($_SESSION["pages"]);
if ($count >= 10)
  array_shift($_SESSION["pages"]);
array_push($_SESSION["pages"], "Super Experience: User");

// Update tracking array in db
$session_info = serialize($_SESSION["pages"]);
$query = "UPDATE users SET tracking = '$session_info' WHERE id='$user_id'";
mysqli_query($connection, $query);

// Get the tracking data from db
$query = "SELECT tracking FROM users WHERE id='$user_id'";
$result_pages = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result_pages);
if (count($row) > 0) {
  $session_array = unserialize($row['tracking']);
  $session_array = array_reverse($session_array);

  $query = "SELECT rating, comments, products.company_name,products.product_name, products.image_url FROM reviews
          JOIN products on reviews.product_id = products.id   
          WHERE user_id='$user_id'";
  $review_results = mysqli_query($connection, $query);
  $reviews = mysqli_fetch_all($review_results, MYSQLI_ASSOC);
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
  <title>User - Super Experience</title>
  <meta property="og:title" content="User - Super Experience">
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

  <!-- <link rel="stylesheet" href="css/user_styles.css"> -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <script type="application/javascript" src="/user.875bceb7.js"></script>
</head>

<style>
  body {
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
  }

  .main-body {
    padding: 15px;
  }

  .card {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
  }

  .card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
  }

  .gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
  }

  .gutters-sm>.col,
  .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
  }

  .mb-3,
  .my-3 {
    margin-bottom: 1rem !important;
  }

  .bg-gray-300 {
    background-color: #e2e8f0;
  }

  .h-100 {
    height: 100% !important;
  }

  .shadow-none {
    box-shadow: none !important;
  }

  .modalLabel {
    display: block;
  }

  .modalInput {
    margin-bottom: 20px;
  }

  .mb-0 {
    font-weight: bold
  }
</style>

<body style="background-color: #e2e8f0;">
  <div>
    <div class="">
      <!-- <div class="kv-control-placeholder kv-_site" data-kv-control="0">&nbsp;</div> -->
      <div class="">
        <!-- <div class="kv-control-placeholder kv-_page" data-kv-control="0">&nbsp;</div> -->
        <section class="background-id_3 lahuni82" style="background-color:#243665;">
          <div class="">
            <!-- <div class="kv-control-placeholder kv-_section" data-kv-control="content">&nbsp;</div> -->
            <div class="header-container no-cover ">
              <div class="kv-fixed-header navigation-position kv-check-scroll menu-top" data-kv-scroll-offset="32">
                <div class="container-fluid navigation check-mobile">
                  <!-- <div class="kv-control-placeholder kv-_content" data-kv-control="navigation">&nbsp;</div> -->
                  <header data-dynamic-container-element="true">
                    <!-- <div class="kv-control-placeholder kv-_navigation" data-kv-control="background">&nbsp;</div> -->
                    <!-- <div class="kv-background " style="background-color: #243665;">&nbsp;</div> -->
                    <div class="logo" data-dynamic-navigation-element="logo"><a class="fit-text site-title-link" href="index.php" data-href="index.php"> <span class="logo" tabindex="0" data-type="text" style="font-size:30px;">Super Experience</span> </a></div>

                  </header>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- <div class="kv-control-placeholder kv-_page" data-kv-control="1">&nbsp;</div> -->
        <section>
          <!-- <div class="kv-control-placeholder kv-_section" data-kv-control="background">&nbsp;</div> -->
          <!-- <div class="kv-background " style="background-color: #212121;">&nbsp;</div> -->
          <div class="">
            <!-- <div class="kv-control-placeholder kv-_section" data-kv-control="content">&nbsp;</div> -->
            <div class="">
              <div class="container">
                <div class="row">
                  <div class="">
                    <!-- User Section -->

                    <form style="display:none;" action="save.php" method="post" enctype="multipart/form-data">
                      Select image to upload:
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      <input id="img-submit" type="submit" value="Upload Image" name="submit">
                    </form>
                    <div class="container">
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 style="text-align: center;" class="modal-title">Update Profile Info</h4>
                            </div>
                            <form id="update_form" action="update.php" method="POST" name="submit" style="text-align: center;" class="modal-body">
                              <label class="modalLabel">First Name:</label>
                              <?php echo "<input value='$user_fName' class='modalInput' type='text' name='fName' />" ?>
                              <br>
                              <label class="modalLabel">Last Name:</label>
                              <?php echo "<input value='$user_lName' class='modalInput' type='text' name='lName' />" ?>
                              <br>
                              <label class="modalLabel">Email:</label>
                              <?php echo "<input value='$user_email' class='modalInput' type='text' name='email' />" ?>
                              <br>
                              <label class="modalLabel">Phone:</label>
                              <?php echo "<input value='$user_phone' class='modalInput' type='text' name='phone' />" ?>
                              <br>
                              <label class="modalLabel">Mobile:</label>
                              <?php echo "<input value='$user_mobile' class='modalInput' type='text' name='mobile' />" ?>
                              <br>
                              <label class="modalLabel">Address:</label>
                              <?php echo "<input value='$user_address' class='modalInput' type='text' name='address' />" ?>
                              <br>
                              <label class="modalLabel">Twitter:</label>
                              <?php echo "<input value='$user_twitter' class='modalInput' type='text' name='twitter' />" ?>
                              <br>
                              <label class="modalLabel">Instagram:</label>
                              <?php echo "<input value='$user_instagram' class='modalInput' type='text' name='instagram' />" ?>
                              <br>
                              <label class="modalLabel">Facebook:</label>
                              <?php echo "<input value='$user_facebook' class='modalInput' type='text' name='facebook' />" ?>
                            </form>
                            <div style="text-align: center;" class="modal-footer">
                              <button id="update" type="submit" name="submit" style="text-align: center;" type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
                            </div>
                          </div>

                        </div>
                      </div>
                      <h1 style="text-align:center;font-weight:bold">User Profile
                        <i style='margin-left:10px; cursor:pointer' class='fas fa-edit' data-toggle='modal' data-target='#myModal'></i>
                      </h1>
                      <div class="main-body">
                        <div class="row gutters-sm">
                          <div class="col-md-4 mb-3">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                  <p id="add-image" style="float:right;color:green;cursor:pointer"><i class="fas fa-plus"></i></p>
                                  <?php
                                  echo "<img src='$user_img' alt='Admin' class='rounded-circle' width='226' height='226'>";
                                  ?>
                                  <div class="mt-3">
                                    <?php
                                    echo "<h4>$user_name</h4>"
                                    ?>
                                    <?php
                                    echo "<p class='text-muted font-size-sm'>$user_address</p>"
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card mt-3">
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                      <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>Twitter</h6>
                                  <?php
                                  echo "<span class='text-secondary'>$user_twitter</span>"
                                  ?>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                  <?php
                                  echo "<span class='text-secondary'>$user_instagram</span>"
                                  ?>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                      <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook</h6>
                                  <?php
                                  echo "<span class='text-secondary'>$user_facebook</span>"
                                  ?>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="card mb-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                  </div>
                                  <?php
                                  echo "<div class='col-sm-9 text-secondary'>
                      $user_name
                    </div>"
                                  ?>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                  </div>
                                  <?php
                                  echo "<div class='col-sm-9 text-secondary'>
                      $user_email
                    </div>"
                                  ?>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                  </div>
                                  <?php
                                  echo "<div class='col-sm-9 text-secondary'>
                     $user_phone
                    </div>"
                                  ?>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                  </div>
                                  <?php
                                  echo "<div class='col-sm-9 text-secondary'>
                      $user_mobile
                    </div>"
                                  ?>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                  </div>
                                  <?php
                                  echo "<div class='col-sm-9 text-secondary'>
                      $user_address
                    </div>"
                                  ?>
                                </div>
                              </div>
                            </div>
                            <div class="row gutters-sm">
                              <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                  <div style="overflow-y:auto;height:232px;padding:0" class="card-body">
                                    <table style="margin:auto" border="5" cellspacing="0" cellpadding="10" align="center">
                                      <h3 style="text-align:center;margin: 0 0 10px 0;border-bottom:1.5px solid black; font-weight:bold;background-color:powderblue;padding:3px">History</h3>
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
                                </div>
                              </div>
                              <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                  <div style="overflow-y: auto;height:232px;padding:0" class="card-body">
                                    <table style="margin:auto" border="5" cellspacing="0" cellpadding="10" align="center">
                                      <h3 style="text-align:center;margin: 0 0 10px 0;border-bottom:1.5px solid black; font-weight:bold;background-color:indianred;padding:3px">Reviews</h3>
                                      <?php
                                      print("<tr>
            <th>Product</th>
            <th>Company</th>
            <th>Rating</th>
            <th>Comment</th>
            <th>Image</th>
          </tr>");

                                      print("<tr>");
                                      foreach ($reviews as $review) {
                                        $product_name = $review['product_name'];
                                        $company_name = $review['company_name'];
                                        $rating = $review['rating'];
                                        $comments = $review['comments'];
                                        $image_url = $review['image_url'];

                                        print("<td>$product_name</td>");
                                        print("<td>$company_name</td>");
                                        print("<td>$rating</td>");
                                        print("<td>$comments</td>");
                                        print("<td><img src='$image_url' width='50'></td>");
                                        print("</tr>");
                                      }
                                      ?>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- End of User Section -->
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
          "title": "User",
          "uriPath": "user"
        };
        // ]]>
      </script>
    </div>
  </div>
  <div class="pswp" tabindex="-1">&nbsp;</div>
  <!-- <script src="https://runtime.builderservices.io/runtime-endurance-16438/bundle.js"></script> -->

  <?php include 'inc/user_script.php'; ?>

</body>
<script>
  $(function() {
    $("#add-image").on("click", function() {
      $("#fileToUpload").trigger("click");
    })
    $("#fileToUpload").change(function() {
      $("#img-submit").trigger("click");
    });
    // $("#nav-placeholder").load("nav.html");

    $("#update").on("click", function() {
      $("#update_form").submit();
    })
  });
</script>

</html>