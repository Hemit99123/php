<?php 
    // Output (good for debugging similar to console.log or print)
    echo "I love PHP!<br>";

    // Variable
    $name = "Hemit Patel";
    $food = "Pizza";
    $email = "hemit4282@gmail.com";
    $age = 16;

    echo "Hello {$name}.<br>";
    echo "You like the food: {$food}.<br>";
    echo "Your email: {$email}<br>";
    echo "You are {$age} years old <br>";

    // This is a comment 
    /* 
        This is a multi-line comment
    */

    $counter = 0;
    $counter = $counter + 1;

    // A much cleaner way to increment/decrement(js-like)
    $counter++;
    $counter--;

    // Custom amount of increment/decrement
    $counter+=2;
    $counter-=2;
    
    // The . allows for string concatenation

    echo $counter . "<br>";

    // chain of if statements

    if ($age >= 18) {
        echo "You may enter this site <br>";
    } 
    
    else if($age >= 100) {
        echo "You are too old to enter this site <br>";
    }

    else if ($age <= 0) {
        echo "{$age} wasn't a valid age <br>";
    }
    
    else {
        echo "You may not enter this site <br>";
    }

    // boolean value conditions

    $adult = true;

    if ($adult) {
        echo "You are an adult";
    } else {
        echo "You are a kid";
    }

    // switch => much more cleaner way to express MANY MANY else if statements
    
    $grade = "A";

    switch ($grade) {
        case "A":
            echo "You did great";
        case "B":
            echo "You did good";
        case "C":
            echo "You did okay";
        case "D":
            echo "You did poorly";
        case "F":
            echo "You failed";
        // a fall back in case all cases don't match (like else statement)
        default:
            echo "{$grade} is not valid";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    
    <h1>ORDER SOMETHING:</h1> 
    <br> 

    <form action="index.php" method="post">
        <label>quantity: </label>
        <input type="text" name="quantity">
        
        <label>food: </label>
        <input type="password" name="food_item">

        <input type="submit" value="Submit">
    </form>

</body>
</html>

<?php 
    // handle a post request (get works the same way)
    // the input name is accessible server side from html code

    $price = 5.99;
    $quantity = $_POST["quantity"];
    $food_item = $_POST["food_item"];
    $total = $price * $quantity;

    echo "You have ordered {$quantity} x {$food_item}/s <br>";
    echo "Your total is : \${$total}";
?>
