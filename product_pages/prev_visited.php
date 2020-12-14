<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last 5 previously visited products</title>
</head>
<body style="background-color:lightgray">
    <a href="../products-services.php">Return</a>
    <h1>Last 5 previously visited products:</h1>
    <table border="5" cellspacing="0" cellpadding="10">
        <?php
            $products = array();
            if(isset($_COOKIE["Kawasaki_H2R"])) $products["Kawasaki_H2R"] = $_COOKIE["Kawasaki_H2R"];
            if(isset($_COOKIE["Honda_CBR600RR"])) $products["Honda_CBR600RR"] = $_COOKIE["Honda_CBR600RR"];
            if(isset($_COOKIE["Honda_CBR1000RR"])) $products["Honda_CBR1000RR"] = $_COOKIE["Honda_CBR1000RR"];
            if(isset($_COOKIE["Suzuki_GSX-R1000R"]))$products["Suzuki_GSX-R1000R"] = $_COOKIE["Suzuki_GSX-R1000R"]; 
            if(isset($_COOKIE["BMW_HP4"]))$products["BMW_HP4"] = $_COOKIE["BMW_HP4"]; 
            if(isset($_COOKIE["Yamaha_R1M"]))$products["Yamaha_R1M"] = $_COOKIE["Yamaha_R1M"]; 
            if(isset($_COOKIE["Yamaha_R6"]))$products["Yamaha_R6"] = $_COOKIE["Yamaha_R6"]; 
            if(isset($_COOKIE["Ducati_V4R"]))$products["Ducati_V4R"] = $_COOKIE["Ducati_V4R"]; 
            if(isset($_COOKIE["Kawasaki_ZX10R"]))$products["Kawasaki_ZX10R"] = $_COOKIE["Kawasaki_ZX10R"]; 
            if(isset($_COOKIE["BMW_M1000RR"]))$products["BMW_M1000RR"] = $_COOKIE["BMW_M1000RR"];

            arsort($products);
            $products = array_slice($products, 0, 5);
            echo("<tr>
                <td bgcolor=\"#FF6347\"><strong>Product</strong></td>
                <td bgcolor=\"#FF6347\"><strong>Time Visited</strong></td></tr>");
            foreach($products as $key => $value) {
                echo("<tr>
                    <td bgcolor=\"#F0E68C\">$key</td>
                    <td bgcolor=\"FFA500\">");
                echo date("Y-m-d H:i:s", $value);
                echo("</td></tr>");
            }
        ?>
    </table>
</body>
</html>