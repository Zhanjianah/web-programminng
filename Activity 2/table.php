<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><i><b>SHOES INVENTORY</b></i></h1>
    <h3>Dynamic Table</h3>
<?php
    $products = array(
        array("name" => "NIKE", "price" => 10.50, "stock" => 12),
        array("name" => "PUMA", "price" => 5.60, "stock" => 7),
        array("name" => "ADIDAS", "price" => 17.00, "stock" => 5),
        array("name" => "ONITSUKA TIGER", "price" => 25.00, "stock" => 15),
        array("name" => "NEW BALANCE", "price" => 11.50, "stock" => 14),
        array("name" => "CONVERSE", "price" => 8.00, "stock" => 2)
    );
?>

<table>
    <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>

    <?php
        $no = 1;    
        foreach ($products as $p) {
            $style = ($p["stock"] < 10) ? 'style="color:red;"' : '';
    ?>
        <tr 
            <?php
            echo $style; ?>>
            <td><?= $no++; ?></td>
            <td><?= $p["name"] ?></td>
            <td><?= $p["price"] ?></td>
            <td><?= $p["stock"] ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>



