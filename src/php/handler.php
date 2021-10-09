<?php

    require_once __DIR__ . "/connection.php";

    /*
     * Обработка отравки запроса из формы.
     * Если передаваемый параметр отсутствует - return.
     * Иначе - добавляет в таблицу введенное название города и обновляет данные на странице.
     * $dbh = null - закрытие соединения.
     */
    if (!$_POST["city"]) {
        return;
    }
    $city = $_POST["city"];
    $dbh = connect();
    $statement = $dbh->prepare("INSERT INTO cities (cityName) VALUES (:cityName)");
    $statement->execute([
        'cityName' => $city,
    ]);
    $dbh = null;
    header("Location: /");


