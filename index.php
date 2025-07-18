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
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You failed";
            break;
        // a fall back in case all cases don't match (like else statement)
        default:
            echo "{$grade} is not valid";
    }

    // for loops (similar to js)
    // best for when you know when the loop will end
    
    for ($i = 0;$i < 5;$i++) {
        echo "Hello <br>";
    }

    // while loop (similar to js)
    // best for when you don't know when the loop wil end

    $counter = 1;

    while ($counter <= 5) {
        echo $counter;
        $counter++;
    }

    // arrays

    $foods = array("Apple", "Orange", "Banana", "Coconut");
    $foods = ["Apple", "Orange", "Banana", "Coconut"];
    
    // indexing to find an element 
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";
    echo $foods[4] . "<br>";


    // set an element in an array to something else
    $foods[0] = "Pineapple";

    // adds to end of array
    array_push($foods, "Pineapple");

    // removes last element
    array_pop($foods);
    
    // removes first element
    array_shift($foods);

    // reverse an array (returns the new array)
    $reversed_foods = array_reverse($foods);
    
    // easier to get all elements in an array 
    foreach($foods as $food) {
        echo $food . "<br>";
    }

    // associative array = an array with key-value pairs (dicts in python or objects in javascript/typescript)

    $capitals = [
            "USA"=>"Washington D.C.", 
            "Japan"=>"Tokyo", 
            "South Korea"=>"Seoul", 
            "India"=>"New Dehli"
    ];

    // get the value for a key (USA)
    echo $capitals["USA"] . "<br>";

    // works as same with other arrays
    // create a new key like so...
    $capitals["Canada"] = "Ottawa";

    // loop through all values and get keys and values
    foreach ($capitals as $key => $value) {
        echo "{$value}, {$key} <br>";
    }

    // isset() returns true if variable is declared/not null

    $username = 'hemit';

    if (isset($username)) {
        echo "This variable is set";
    } else {
        echo "This variable is NOT set.";
    }


    // empty() returns true if variable is empty/NULL

    if (empty($username)) {
        echo "This variable is empty.";
    } else {
        echo "This variable is NOT empty.";
    }

    function happy_birthday($name, $age) {
        echo "Happy Birthday! <br>";
        echo "Have a great day! <br>";
        echo "Enjoy your cake! $name<br>";
        if ($age >= 18) {
            echo "You are now an adult! <br>";
        } else {
            echo "You are still a kid! <br>";
        }
    }

    happy_birthday("Spongbob Squarepants", 20);
?>

<!-- HTTP Request handling from frontend to php code -->
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

        <label>payment method:</label>
        <input type="radio" name="payment_method" value="american_express"> American Express
        <input type="radio" name="payment_method" value="visa"> Visa
        <input type="radio" name="payment_method" value="mastercard"> Mastercard
        <input type="radio" name="payment_method" value="paypal"> Paypal

        <input type="submit" name="submit" value="Order Now">
    </form>
</body>
</html>

<?php 
    // handle a post request (get works the same way)
    // the input name is accessible server side from html code

    $price = 5.99;
    $food_item = $_POST["food_item"];
    $payment_method = $_POST["payment_method"];
    $submit = $_POST["submit"];

    // santize and validate user input

    // checking if quantity is a real number
    $quantity = filter_input(INPUT_POST, "quantity", FILTER_VALIDATE_INT);

    $total = $price * $quantity;

    if (empty($quantity)) {
        echo "Quantity is not a real number";
    } 
    
    else if (!in_array($payment_method, ["american_express", "visa", "mastercard", "paypal"])) {
        echo "Invalid payment method";
    }
    
    // more reliable then isset() on btn name/value which can be manupliated 
    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "You have ordered $quantity x $food_item/s <br>";
        echo "Your total is : \$$total <br>";
        echo "You have paid with $payment_method <br>";
    } 
    
?>
