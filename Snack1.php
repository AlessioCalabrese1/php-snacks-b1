<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

<?php
$basketballGames = [
    [
        "homeTeam" => "Los Angeles Lakers",
        "homeTeamScore" => "60",
        "visitingTeam" => "Golden State Warriors",
        "visitingTeamScore" => "42",
    ],
    [
        "homeTeam" => "BOSTON CELTICS",
        "homeTeamScore" => "37",
        "visitingTeam" => "BROOKLYN NETS",
        "visitingTeamScore" => "54",
    ],
    [
        "homeTeam" => "ORLANDO MAGIC",
        "homeTeamScore" => "75",
        "visitingTeam" => "WASHINGTON WIZARDS",
        "visitingTeamScore" => "20",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Partite di campionato:</h3>

    <?php
    for ($i = 0; $i < count($basketballGames); $i++) {
    ?>
        <p>
            <?php
            echo $basketballGames[$i]["homeTeam"] . " Score:" . $basketballGames[$i]["homeTeamScore"] . " / " 
            . $basketballGames[$i]["visitingTeam"] . " Score:" . " " . $basketballGames[$i]["visitingTeamScore"];
            ?>
        </p>
    <?php
    }
    ?>
</body>

</html>