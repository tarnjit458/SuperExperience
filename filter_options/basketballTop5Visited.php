<?php
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
$query1 = "SELECT product_name, total_visits FROM products WHERE company_name='Basketball Basics' ORDER BY total_visits DESC LIMIT 5";
$result1 = mysqli_query($connection, $query1);
?>
<div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
    <h2 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center">Basketball Basics Top 5 Most Visited Products </h2>
    <table border="5" cellspacing="0" cellpadding="10" align="center">
        <?php
        print("<th>Product Name</th><th>Visits</th>");
        for (
            $counter = 0;
            $row = mysqli_fetch_row($result1);
            $counter++
        ) {
            print("<tr>");
            foreach ($row as $key => $value)
                print("<td>$value</td>");
            print("</tr>");
        }
        // Free Result
        mysqli_free_result($result1);
        ?>
    </table>
</div>