<style>
    <?php include('style.css'); ?>
</style>


<?php
    $num1 = $_POST["item1Q"];
    $num2 = $_POST["item2Q"];
    $num3 = $_POST["item3Q"];

    $password = $_POST["pw"];

    $ship = $_POST["ship"];
    $shipment = "";
    $shipfee = 0;
    $total = 0;

    if ($ship == "free") {
        $shipfee = 0;
        $shipment = "Free Shipping";
    } elseif($ship == "oneday") {
        $shipfee = 50;
        $shipment = "Over Night";
    } else {
        $shipfee = 5;
        $shipment = "3-day Shipping";
    }

    $total = 10*$num1 + 20*$num2 + 28*$num3 + $shipfee;

    echo "<body class='recipt'>";

    echo "<p>Thank you for purchasing!</p><br>";
    echo "<p>Your pass word is: <br><i>" . $password . "</i></p><br>";
    echo "<p>Here is your recipt:</p>";
    echo "<table class='recipt'>";
    echo "<thead> <tr> <th></th> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th> </tr> </thead>";
    echo "<tbody> <tr> <td><b>Health Potion</b></td> <td>" . $num1 . "</td> <td>$10.00</td> <td>$" . 10*$num1 . "</td> </tr>";
    echo "<tr> <td><b>Mega Health Potion</b></td> <td>" . $num2 . "</td> <td>$20.00</td> <td>$" . 20*$num2 . "</td> </tr>";
    echo "<tr> <td><b>Herbal Medicine</b></td> <td>" . $num3 . "</td> <td>$28.00</td> <td>$" . 28*$num3 . "</td> </tr>";
    echo "<tr> <td><b>Shipping</b></td> <td colspan='2'>" . $shipment . "</td> <td>$" . $shipfee . "</td> </tr>";
    echo "<tr> <td><b>Total Cost</b></td> <td colspan='3'>$" . $total . "</td> </tr> </tbody>";
    echo "</table>";

    echo "</body>";
?>