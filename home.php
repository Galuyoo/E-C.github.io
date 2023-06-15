<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/php/conn.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>

        <link rel="stylesheet" href="style.css" />
        <title>Home Page</title>
    </head>
    <body>
        <h1>Hello <?= $user["name"] ?></h1>

        <h1>Welcome to the Home Page!XD</h1>

        <p><a href="./php/logout.php">WANA LOGOUT?</a></p>

    </body>
</html>
