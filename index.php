<?php
$username = "Rafael";
$greeting = "Hello";
$offer = ["Chocolate", 5, 25, 20];
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $offer_price - $usual_price;
?>


<DOCTYPE html>
<html>
<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <br>
    <h2>MULTI-BUY OFFER</h2>
    <br>
    <p>
<?php
    echo $greeting. ", ". $username . ".";
    ?>
    </p>
    <div class = "button">
    <?php
    echo "Save $" . $offer[1];
    ?>
    </div>
    <p>
        <?php 

        echo "<p>Buy ". $offer[1] ." packs of " .  $offer[0]. "for $". $offer[3]. 
        "<br>(usual price of $". $offer[2] .")</p>"
        ?>
    </p>


</body>

</html>
