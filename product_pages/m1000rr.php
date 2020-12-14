<?php
session_start();
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");

if (!isset($_COOKIE['bmwm1000rr_count'])) {
    $cookie = 1;
    setcookie("bmwm1000rr_count", $cookie, time() + (86400 * 365));
} else {
    $cookie = ++$_COOKIE['bmwm1000rr_count'];
    setcookie("bmwm1000rr_count", $cookie, time() + (86400 * 365));
}
setcookie("BMW_M1000RR", time(), time() + (86400 * 365));

if (isset($_POST['submit'])) {
    $server = "cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com";
    $username = "sunny";
    $password = "sunnyD777";
    $db = "bb";
    $conn = new mysqli($server, $username, $password, $db);

    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $userid = $_SESSION['user_id'];
    $sql = "INSERT INTO reviews(user_id, product_id, rating, comments) VALUES ('$userid','4','$rating','$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "You have successfully added a review!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$query = "UPDATE products SET total_visits = total_visits + '1' WHERE id = '4'";
mysqli_query($connection, $query);


$userid = $_SESSION["user_id"];
$query = "SELECT rating, comments FROM reviews WHERE user_id='$userid' AND product_id='4'";
$result = mysqli_query($connection, $query);

$query = "SELECT rating, comments, users.fName, users.lName, users.img, DATE_FORMAT(date, '%b %D,%Y %l:%i %p') AS 'posted_on' FROM reviews
          JOIN users on reviews.user_id = users.id
          WHERE product_id=4";
$review_results = mysqli_query($connection, $query);
$reviews = mysqli_fetch_all($review_results, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://s3-media1.fl.yelpcdn.com/assets/srv0/styleguide/4cba6b79f4b9/assets/css/styleguide-pkg.css">
    <title>BMW M 1000RR</title>
</head>

<body style="background-color:lightgray">
    <br>
    <a href="../products-services.php">Return</a>
    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center">BMW M 1000RR</h1>
    <div style="margin-left:auto; margin-right:auto; width:80%;">
        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/p90400049-highres-the-new-bmw-m-1000-r-1601013870.jpg?resize=980:*" width="40%" height="40%">
        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/p90400311-highres-the-new-bmw-m-1000-r-1601014401.jpg?resize=768:*" width="40%" height="40%">
    </div>
    <p>Your competitive spirit drives you. Your passion dominates and challenges you. The search for more defines every millisecond: pure motorsport. High performance, high-tech materials, the highest-quality workmanship and exclusivity down to the last detail: The M RR is the first M model from BMW Motorrad. Its genes come directly from professional racing. The M RR and M RR with M Competition package offers pure racing technology for the highest performance demands in motorsport and for adrenalin-driven perfectionists on the road. Because #NeverStopChallenging is more than a promise. It’s a commitment. <cite><a href="https://www.bmwmotorcycles.com/en/models/sport/m1000rr.html#/section-resistance-irresistible">source</a></cite></p>

    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center"><u>Add a review</u></h1>
    <div style="display:flex; justify-content:center;">

        <form action="m1000rr.php" method="post">
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