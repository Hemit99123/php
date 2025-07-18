<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>

    <h1 id="message">Nothing to see here 👀</h1>
    <button onclick="goBackHome()">Go back home</button>
    <script>
        // pass php superglobal variables to frontend thru javascript
        const successMsg = <?php echo json_encode($_GET['success'] ?? null); ?>;
        const errorMsg = <?php echo json_encode($_GET['error'] ?? null); ?>;

        // dom manipulation to pass variable into html page
        const messageElement = document.getElementById("message");

        if (errorMsg) {
            messageElement.innerText = errorMsg;
            messageElement.style.color = 'red';
        } else if (successMsg) {
            messageElement.innerText = successMsg;
            messageElement.style.color = 'green';
        } else {
            messageElement.innerText = 'No available messages. Contact tech support if this is a mistake.';
            messageElement.style.color = 'grey';
        }

        function goBackHome() {
            window.location.href = "/website/user.php"
        }
    </script>
</body>
</html>