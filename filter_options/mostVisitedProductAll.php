<?php
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
$query2 = "SELECT company_name, product_name, total_visits FROM products ORDER BY total_visits DESC LIMIT 5";
$result2 = mysqli_query($connection, $query2);
?>
<div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
    <br>
    <h2 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center">Top 5 most visited products from all companies!</h2>
    <table border="5" cellspacing="0" cellpadding="10" align="center">
        <?php
        print("<th>Company Name</th><th>Product/Service</th><th>Visits</th>");
        for (
            $counter = 0;
            $row = mysqli_fetch_row($result2);
            $counter++
        ) {
            print("<tr>");
            foreach ($row as $key => $value)
                print("<td>$value</td>");
            print("</tr>");
        }
        // Free Result
        mysqli_free_result($result2);

        // Close Connection
        mysqli_close($connection);
        ?>
    </table>
</div>