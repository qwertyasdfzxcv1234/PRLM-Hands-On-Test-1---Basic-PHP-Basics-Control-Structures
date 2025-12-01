<?php
$name = "Rafael";
$greeting = "Welcome back";
if ($name) {
    $greeting = $greeting . ", " . $name . ".";
}
$product = "LOLLIPOP";
$cost = 1.92;

for ($i = 1; $i <=10; $i++ ) {
    $subtotal=$i*$cost;
    $divi = $cost/100;
    $discount=$divi*$i;
    $totals = [$subtotal-$discount];
}
    


?>

<!DOCTYPE html>
<html>
    <header>
            <link rel="stylesheet" href="css/styles.css">    
    </header>
    <?php include "header.php";
     ?>
      
     <body>
        <p>
        <?php
        echo $greeting;
        ?>
        </p>
        <h2><?php echo $product . " DISCOUNTS" ?></h2>
        <table>
            <th>Packs
            </th>
            
            <th>Price</th>
            
        </table>
        <table>
            <td>
            <?php
            for ($i = 0; $i< 10; $i++){
                echo $i+1 . " packs <br>";
            }
            ?>
            </td>
            <td>
            <?php
            for ($i = 0; $i<10; $i++)
                echo "$ ". ($cost*$i)-$discount . "<br>";
            ?>
            </td>
        </table>

     </body>
     <?php include "footer.php";
     ?>
</html>