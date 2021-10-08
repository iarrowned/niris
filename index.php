<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City manager</title>
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
<?php require_once __DIR__ . '/src/php/view.php'; ?>
<section class="add">
    <div class="container">
        <form action="src/php/handler.php" method="post">
            <input onkeyup="checkParams()" autocomplete="off" id="city" type="text" name="city" placeholder="Введите название города">
            <input id="btn" type="submit" value="Добавить" disabled>
        </form>
    </div>
</section>
<section class="list">
    <div class="container">
        <table class="list">
            <tr>
                <th>Список городов</th>
            </tr>
            <?= show() ?>
        </table>
    </div>
</section>
<script src="js/script.js"></script>
</body>
</html>