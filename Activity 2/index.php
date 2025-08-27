<html>
    <body>
        <h3>My first PHP program</h3>
        <h1>Hello, from ZHANJIANAH T. JAJI!</h1>
</body>
</html>

<br>

<?php
    echo "Hello, World!";
?>

<br>
<br>
<h3>Simple Arithmetic Operations</h3>
<?php
    $x = 15;
    $y = 4;
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;
    $quotient = $x / $y;

    echo "The sum is $sum. <br>";
    echo "The difference is $difference. <br>";
    echo "The product is $product. <br>";
    echo "The quotient is $quotient. <br>";

    if($x % $y == 0){
        echo "$y is a factor of $x";
    } else {
        echo "$y is not a factor of $x";
    }
?>

<br>
<br>
<h3>LOOPS</h3>
<?php
echo "mutiples of 3 and 5 are: <br>";
echo "mutiples of 3: <br>";
    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0){
        echo "$i <br>";
        }
    }

    echo "mutiples of 5 <br>";
     for($i = 1; $i <= 100; $i++){
        if($i % 5 == 0){
        echo "$i <br>";
        }
    }
?>

<br>
<h3>ARRAY</h3>
<?php
    $products = array("Product A", "Product B", "Product C");
    var_dump($products);
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    echo $products[0];
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    $products[1] = "Product D";
    var_dump($products);
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    foreach($products as $p){
        echo "$p <br>";
    }
?>

<br>
<br>

<?php
$products = array(
    array("name" => "Product A", "price" => 10.50, "stock" => 12),
    array("name" => "Product B", "price" => 5.60, "stock" => 7),
    array("name" => "Product C", "price" => 7.00, "stock" => 5)
);

foreach($products as $p){
    echo $p["name"] . " is " . $p["price"] . " pesos <br>";
}
?>