<?php
function connect(): PDO
{
    $user = 'root';
    $pass = 'root';
    $db = 'niris';
    return new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
}
