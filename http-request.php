<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering Service</title>
</head>
<body>
    
    <h1>Order your food today!</h1>
    <br>

    <form action="http-request.php" method="post">

        <label>Food:</label>
        <input type="text" name="food">
        <br>

        <label>Quantity:</label>
        <input type="number" name="quantity">
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    $food = filter_input(INPUT_POST, "food", FILTER_SANITIZE_SPECIAL_CHARS);
    $quantity = filter_input(INPUT_POST, "quantity", FILTER_VALIDATE_INT);
    $price = 5.99;

    $total = $quantity * $price;

    echo "Your {$food} is ordered at \${$total}"
?>