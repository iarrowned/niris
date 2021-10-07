<?php
    require_once __DIR__."/connection.php";

    function getCities(): array
    {
        $dbh = connect();
        $query = $dbh->query("SELECT cityName FROM cities");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    function show()
    {
        $cities = getCities();
        foreach ($cities as $city)
        {
            echo '<tr>
                    <td>'.$city['cityName'].'</td>
                </tr>';
        }
    }

