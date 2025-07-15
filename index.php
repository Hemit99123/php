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

    $capitals = array(
            "USA"=>"Washington D.C.", 
            "Japan"=>"Tokyo", 
            "South Korea"=>"Seoul", 
            "India"=>"New Dehli"
    );

    // get the value for a key (USA)
    echo $capitals["USA"] . "<br>";

    // works as same with other arrays
    // create a new key like so...
    $capitals["Canada"] = "Ottawa";

    // loop through all values and get keys and values
    foreach ($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    // isset() returns true if variable is declared/not null

    $username = 'hemut';

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
