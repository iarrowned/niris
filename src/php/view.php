<?php
    require_once __DIR__ . "/connection.php";

    function getCities(): array
    {
        $dbh = connect();
        $query = $dbh->query("SELECT cityName FROM cities");
        return $query->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
    }
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

