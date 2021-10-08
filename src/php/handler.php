<?php
    require_once __DIR__ . "/connection.php";
    if ($_POST["city"])
    {
        $city = $_POST["city"];
        $dbh = connect();
        $statement = $dbh->prepare("INSERT INTO cities (cityName) VALUES (:cityName)");
        $statement->execute([
            'cityName' => $city,
        ]);
        $dbh = null;
        header("Location: /");
    }


