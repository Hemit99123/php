<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stopwatcher</title>
</head>
<body>
    <form action="stopwatch.php" method="post">
        <input type="submit" name="start" value="start">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php 
    $seconds = 0;
    $start = isset($_POST["start"]);
    $stop = isset($_POST["stop"]);

    while ($start && !$stop) {
        $seconds++;
        echo $seconds . "<br>";
        sleep(0.05);
    };

?>
