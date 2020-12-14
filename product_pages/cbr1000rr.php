<?php
session_start();
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");

if (!isset($_COOKIE['cbr1000rr_count'])) {
    $cookie = 1;
    setcookie("cbr1000rr_count", $cookie, time() + (86400 * 365));
} else {
    $cookie = ++$_COOKIE['cbr1000rr_count'];
    setcookie("cbr1000rr_count", $cookie, time() + (86400 * 365));
}
setcookie("Honda_CBR1000RR", time(), time() + (86400 * 365));

if (isset($_POST['submit'])) {
    $server = "cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com";
    $username = "sunny";
    $password = "sunnyD777";
    $db = "bb";
    $conn = new mysqli($server, $username, $password, $db);

    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $userid = $_SESSION['user_id'];
    $sql = "INSERT INTO reviews(user_id, product_id, rating, comments) VALUES ('$userid','6','$rating','$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "You have successfully added a review!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$query = "UPDATE products SET total_visits = total_visits + '1' WHERE id = '6'";
mysqli_query($connection, $query);


$userid = $_SESSION["user_id"];
$query = "SELECT rating, comments FROM reviews WHERE user_id='$userid' AND product_id='6'";
$result = mysqli_query($connection, $query);

$query = "SELECT rating, comments, users.fName, users.lName, users.img, DATE_FORMAT(date, '%b %D,%Y %l:%i %p') AS 'posted_on' FROM reviews
          JOIN users on reviews.user_id = users.id
          WHERE product_id=6";
$review_results = mysqli_query($connection, $query);
$reviews = mysqli_fetch_all($review_results, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://s3-media1.fl.yelpcdn.com/assets/srv0/styleguide/4cba6b79f4b9/assets/css/styleguide-pkg.css">
    <title>Honda CBR1000RR-R Fireblade SP</title>
</head>

<body style="background-color:lightgray">
    <br>
    <a href="../products-services.php">Return</a>
    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center">Honda CBR1000RR-R Fireblade SP</h1>
    <div style="margin-left:auto; margin-right:auto; width:50%;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRqUoxqO3sL1GpCEAKobflx6uF-2m_DC3tbmg&usqp=CAU" width="40%" height="40%">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRtgkG-9CmNctFo_XTx008Ki3Zb0tQfIj7hQ&usqp=CAU" width="40%" height="40%">
    </div>
    <p>EVERYTHING BUT THE FACTORY CONTRACT What you see here is the best of the best, the most exclusive, feature-rich open-class sportbike Honda has ever built under the CBR banner. Introducing the limited edition CBR1000RR-R Fireblade SP. Street legal, but track ready. Offering a degree of performance and refinement you’ve likely never experienced—unless you’ve had a factory ride. Available to only a handful of lucky riders. And it still offers Honda’s famous CBR refinement, build quality, and rideability. Get ready to find out why world champions like Marc Márquez ride red. And why you should too. <cite><a href="https://powersports.honda.com/street/supersport/cbr1000rr-r-fireblade-sp/">source</a></cite></p>

    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center"><u>Add a review</u></h1>
    <div style="display:flex; justify-content:center;">
        <form action="cbr1000rr.php" method="post">
            <h2 style='color:black;'>Overall Rating</h2>
            <input type="radio" id="1" name="rating" value="1">
            <label for="male">1</label><br>
            <input type="radio" id="2" name="rating" value="2">
            <label for="female">2</label><br>
            <input type="radio" id="3" name="rating" value="3">
            <label for="other">3</label><br>
            <input type="radio" id="4" name="rating" value="4">
            <label for="other">4</label><br>
            <input type="radio" id="5" name="rating" value="5">
            <label for="other">5</label><br>
            <h2 style='color:black;'>Add a written review</h2>
            <textarea name="comment" style="width:200px;height:80px;" placeholder="Please write your comments..."></textarea><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center"><u>Product/Service Reviews</u></h1>
    <ul>
        <?php
        foreach ($reviews as $review) {
            $rating = $review['rating'];
            $comments = $review['comments'];
            $img = $review['img'];
            $name = $review['fName'] . ' ' . $review['lName'];
            $date = $review['posted_on'];


            echo "<li style='display: flex;margin-bottom: 5vh; width: 90%; margin-left: 5%;background-color: white;border: 1px solid black;' >
              <div style='flex: 1;border-right: 1px solid black;' >
                <h1 style='font-size:20px; text-align:center'>$name</h1>    
                <img style='width:100px;height:100px;display: block;margin: auto;padding-bottom:10px ;' src='$img'>
                <div class='i-stars i-stars--large-$rating rating' style='text-align: center; margin-left: 85px;'></div>
                <h3 className='reviewDate' style='text-align:center; color:black;'>$date</h3>
              </div>
              <div style='margin-left: 0.5vw;flex: 3;text-align: justify;font-size: 20px;' >
                $comments
              </div>
            </li>";
        }
        ?>
    </ul>
</body>

</html>