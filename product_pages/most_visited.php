<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 most visited products</title>
</head>

<body style="background-color:lightgray">
    <a href="../products-services.php">Return</a>
    <h1>Top 5 most visited products:</h1>
    <table border="5" cellspacing="0" cellpadding="10">
        <?php
        $products = array();
        if (isset($_COOKIE["h2r_count"])) $products["Kawasaki_H2R"] = $_COOKIE["h2r_count"];
        if (isset($_COOKIE["cbr600rr_count"])) $products["Honda_CBR600RR"] = $_COOKIE["cbr600rr_count"];
        if (isset($_COOKIE["cbr1000rr_count"])) $products["Honda_CBR1000RR"] = $_COOKIE["cbr1000rr_count"];
        if (isset($_COOKIE["gsxr1000r_count"])) $products["Suzuki_GSX-R1000R"] = $_COOKIE["gsxr1000r_count"];
        if (isset($_COOKIE["hp4_count"])) $products["BMW_HP4"] = $_COOKIE["hp4_count"];
        if (isset($_COOKIE["r1m_count"])) $products["Yamaha_R1M"] = $_COOKIE["r1m_count"];
        if (isset($_COOKIE["r6_count"])) $products["Yamaha_R6"] = $_COOKIE["r6_count"];
        if (isset($_COOKIE["v4r_count"])) $products["Ducati_V4R"] = $_COOKIE["v4r_count"];
        if (isset($_COOKIE["zx10r_count"])) $products["Kawasaki_ZX10R"] = $_COOKIE["zx10r_count"];
        if (isset($_COOKIE["bmwm1000rr_count"])) $products["BMW_M1000RR"] = $_COOKIE["bmwm1000rr_count"];

        arsort($products);
        $products = array_slice($products, 0, 5);
        echo ("<tr>
                <td bgcolor=\"#FF6347\"><strong>Product</strong></td>
                <td bgcolor=\"#FF6347\"><strong>Times Visited</strong></td></tr>");
        foreach ($products as $key => $value) {
            echo ("<tr>
                    <td bgcolor=\"#F0E68C\">$key</td>
                    <td bgcolor=\"FFA500\">$value</td>
                    </tr>");
        }
        ?>
    </table>
</body>

</html>