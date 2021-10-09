<?php
/**
 * Функция подключения к базе данных.
 * Если подключение установить не удалось - сообщает об этом
 * (без кода ошибки, но можно и это реализовать).
 * @param string $user - имя пользователя базы данных
 * @param string $pass - пароль
 * @param string $db - имя базы данных
 * @return PDO
 */
function connect($user = 'root', $pass = 'root', $db = 'niris'): PDO
    {
        try {
            return new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
        } catch (PDOException $e) {
            echo "Ошибка подключения к базе данных";
            die();
        }
    }
