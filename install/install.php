<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Install Customer Support DB</title>
    </head>
    <body>
        <h1>Install Customer Support DB</h1>
        <form action="install.php" method="post">
            <label for="servername">servername</label>
            <input type="text" id="servername" name="servername" placeholder="localhost"><br>
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="root"><br>
            <label for="password">password</label>
            <input type="text" id="password" name="password" placeholder="password"><br>
            <label for="db_name">db_name</label>
            <input type="text" id="db_name" name="db_name" placeholder="set db name"><br>
            <input type="submit" name="register" value="Register"></button>
        </form>
    </body>
</html>

<?php
if (isset($_POST['register'])) {
    $servername = $_POST['servername'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db_name = $_POST['db_name'];
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE DATABASE IF NOT EXISTS $db_name";
        $conn->exec($sql);

        $sql = "use $db_name";
        $conn->exec($sql);

        $sql = "CREATE TABLE IF NOT EXISTS users (
            user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(50) NOT NULL,
            surname varchar(50) NOT NULL,
            email varchar(50) NOT NULL,
            username varchar(50) NOT NULL,
            create_date datetime NOT NULL,
            last_login datetime,
            is_verified int NOT NULL,
            is_admin int NOT NULL
            );";
        $conn->exec($sql);

        echo "DB created successfully";

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
