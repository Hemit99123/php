<?php 

    // code for the mysql connection logic ($conn comes from this file)    
    include("sql.php");

    // static variable (does not change which is why it is fully uppercase)
    $AUTH_COOKIE_NAME = "auth_state";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // ensure that username and password don't contain xss attack scripts
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = password_hash($password, PASSWORD_BCRYPT);

        echo $username; 
        echo $password;

        // there is request theme key, but documentation/forums say it is unreliable
        // server port is reliable, and we are still able to identify protocal 

        $protocal = $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
        $host = $_SERVER["HTTP_HOST"];

        $base_url = $protocal . $host;

        if (isset($username) && isset($password)) {
            $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$hash')";

            try {
                $success_msg = "User is now registered";

                mysqli_query($conn, $sql);
                setcookie($AUTH_COOKIE_NAME, true);

                // following PRG pattern to avoid form resubmission problems
                $success_url = $base_url . "/website/redirect.php?success=$success_msg";
                header("Location: $success_url", true, 301);

                echo $success_msg;
            } catch(mysqli_sql_exception) {
                $error_msg = "Could not register user";

                // following PRG pattern to avoid form resubmission problems
                $error_url = $base_url . "/website/redirect.php?error=$error_msg";
                header("Location: $error_url", true, 301);

                echo $error_msg;
            }

            mysqli_close($conn);
        } else {
            echo "Empty username/password";
        }
        
    } 

    // by default php code runs on get REST method, so no need for the if statement

    if (isset($_COOKIE[$AUTH_COOKIE_NAME])) {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $row_nums = mysqli_num_rows($result);

        if ($row_nums > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["id"] . "<br>";
                echo $row["user"] . "<br>";
                echo $row["date_registered"] . "<br>";
            }
        } else {
            echo "No users found";
        }

        mysqli_close(($conn));
    } else {
        echo "No registered, so not authorized to see other users";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required value="">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required value="">
        <br>
        <button type="submit">Register</button>
    </form>

    <form method="get" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <button type="submit">Refresh user list</button>
    </form>
</body>
</html>