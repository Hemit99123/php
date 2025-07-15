<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Counter application</h1>

    <form action="counter.php" method="post">
        <label>Number you want to start with:</label>
        <input type="number" name="start">
        <br>
        <br>

        <label>Are you incrementing or decrementing</label>
        <input type="text" name="counter_type">
        <br>
        <br>

        <label>Number you want to end with:</label>
        <input type="number" name="end">
        <br>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    $start = $_POST["start"];
    $counter_type = $_POST["counter_type"];
    $end = $_POST["end"];

    // validate counter type
    if ($counter_type == "increment" || $counter_type == "decrement") {
        for ($counter = $start; $counter <= $end; $counter_type == "increment" ? $counter++ : $counter--) {
            echo $counter . "<br>";
        }
    } else {
        echo "No result. Invalid.";
    }
?>
