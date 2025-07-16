<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="is_even.php" method="post">
        
        <label>number:</label>
        <input type="number" name="number">
        <br>

        <input type="submit" value="submit to php">
    </form>

</body>
</html>

<?php 
    $number = $_POST["number"];

    function is_even() {
        global $number;

        if ($number % 2) {
            return "not even";
        } else {
            return "even";
        }
    }

    $result = is_even();

    echo $result;
?>
