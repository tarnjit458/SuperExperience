<?php
session_start();
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
if (!isset($_COOKIE['r6_count'])) {
    $cookie = 1;
    setcookie("r6_count", $cookie, time() + (86400 * 365));
} else {
    $cookie = ++$_COOKIE['r6_count'];
    setcookie("r6_count", $cookie, time() + (86400 * 365));
}
setcookie("Yamaha_R6", time(), time() + (86400 * 365));

if (isset($_POST['submit'])) {
    $server = "cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com";
    $username = "sunny";
    $password = "sunnyD777";
    $db = "bb";
    $conn = new mysqli($server, $username, $password, $db);

    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $userid = $_SESSION['user_id'];
    $sql = "INSERT INTO reviews(user_id, product_id, rating, comments) VALUES ('$userid','7','$rating','$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "You have successfully added a review!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$query = "UPDATE products SET total_visits = total_visits + '1' WHERE id = '7'";
mysqli_query($connection, $query);


$userid = $_SESSION["user_id"];
$query = "SELECT rating, comments FROM reviews WHERE user_id='$userid' AND product_id='7'";
$result = mysqli_query($connection, $query);

$query = "SELECT rating, comments, users.fName, users.lName, users.img, DATE_FORMAT(date, '%b %D,%Y %l:%i %p') AS 'posted_on' FROM reviews
          JOIN users on reviews.user_id = users.id
          WHERE product_id=7";
$review_results = mysqli_query($connection, $query);
$reviews = mysqli_fetch_all($review_results, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://s3-media1.fl.yelpcdn.com/assets/srv0/styleguide/4cba6b79f4b9/assets/css/styleguide-pkg.css">
    <title>Yamaha R6</title>
</head>

<body style="background-color:lightgray">
    <br>
    <a href="../products-services.php">Return</a>
    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center">Yamaha R6</h1>
    <img src="https://www.cycleworld.com/resizer/o1Y-2A19Eg4CBYcmrUVHl6_xl1Q=/1293x970/arc-anglerfish-arc2-prod-bonnier.s3.amazonaws.com/public/JNTBUOM2IOZD4ELCBNOUVL7CNI.jpg" width="40%" height="40%">
    <img src="https://www.cycleworld.com/resizer/jeu0Q-AfuPLf22P4saiij1ktWMA=/1293x970/arc-anglerfish-arc2-prod-bonnier.s3.amazonaws.com/public/UVVRAKBV5MQGZRANXNWSIL3T4Q.jpg" width="40%" height="40%">
    <p>It's back! The Yamaha R6 enters its third year of production but arrives unchanged this model year. Following its introduction in 2017 this latest version of the R6 has established itself as one of the most popular middleweights on the market, so Yamaha has opted to maintain the status quo until the competition finally catches up. <cite><a href="https://www.cycleworld.com/2020-yamaha-yzf-r6-first-look/">source</a></cite></p>

    <h1 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center"><u>Add a review</u></h1>
    <div style="display:flex; justify-content:center;">

        <form action="r6.php" method="post">
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