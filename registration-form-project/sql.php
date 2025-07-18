<?php 
    // connect to businessdb database
    
    $db_server = getenv("DB_SERVER");
    $db_user = getenv("DB_USER");
    $db_password = getenv("DB_PASS");
    $db_name = getenv("DB_NAME");

    // error handling in php 
    // (similar to js, but catch block takes param of the error itself instead of a general error variable)

    try {
        $conn = mysqli_connect($db_server, 
                               $db_user, 
                               $db_password, 
                               $db_name
                            );
    } catch(mysqli_sql_exception) {
        echo "Could not connect!";
    } 

    if ($conn) {
        echo "You are connected!";
    } 

?>