<?php
    function connect(): PDO
    {
        try {
            $user = 'root';
            $pass = 'root';
            $db = 'niris';
            return new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
        } catch (PDOException $e) {
            echo "Ошибка подключения к базе данных";
            die();
        }
    }
