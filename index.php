<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require_once __DIR__ . '/src/php/view.php'; ?>
<section class="add">
    <div class="container">
        <form action="src/php/handler.php" method="post">
            <input type="text" name="city" placeholder="Введите название города">
            <input type="submit" value="Добавить">
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
</body>
</html>