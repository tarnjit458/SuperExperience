<div class="col-lg-10 offset-lg-1 align-left kv-notify-inview section-text">
    <h2 class="section-title section-title--md" tabindex="0" data-type="text" style="text-align:center">E&L Realty Top 5 Rated Products</h2>
    <br>
    <table border="5" cellspacing="0" cellpadding="10" align="center">
        <?php

        $database = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");

        if (!$database) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        $sql = "SELECT `product_id`, `company_name`, `product_name`,
        AVG(rating) as `avg_rating` FROM `reviews` as T1
        INNER JOIN products as T2 on T1.product_id = T2.id and T2.company_name='EL Realty'
        GROUP BY `product_id`
        ORDER BY AVG(rating) DESC LIMIT 5";

        if ($result = mysqli_query($database, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<tr>";
                echo "<th>Company</th>";
                echo "<th>Product</th>";
                echo "<th>Rating</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['company_name'] . "</td>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['avg_rating'] . "</td>";
                    echo "</tr>";
                }

                // Free result set
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
        }

        // Close connection
        mysqli_close($database);
        ?>
    </table>
</div>