<?php
    require_once __DIR__ . "/connection.php";

/**
 * Функция возвращает массив уже имеющихся в базу данных городов.
 * $dbh = null - закрытие соединения с базой данных.
 * @return array
 */
function getCities(): array
    {
        $dbh = connect();
        $query = $dbh->query("SELECT cityName FROM cities");
        return $query->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
    }

/**
 * Выводит в таблицу на главной странице список всех уже добавленных городов
 * от самого последнего добавленного к самым старым.
 * Если городов нет - сообщает об этом.
 */
function show()
    {
        $cities = getCities();
        if (count($cities) != 0)
        {
            foreach (array_reverse($cities) as $city)
            {
                echo '<tr>
                    <td>'.$city['cityName'].'</td>
                </tr>';
            }
        }
        else {
            echo '<tr>
                    <td>Городов в списке нет</td>
                </tr>';
        }

    }

