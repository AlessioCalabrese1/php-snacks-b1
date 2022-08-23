<?php
$basketballGames = [
    [
        "homeTeam" => "Los Angeles Lakers",
        "homeTeamScore" => "60",
        "visitingTeam" => "Golden State Warriors",
        "visitingTeamScore" => "42",
    ],
    [
        "homeTeam" => "Los Angeles Lakers",
        "homeTeamScore" => "60",
        "visitingTeam" => "Golden State Warriors",
        "visitingTeamScore" => "42",
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
            echo $basketballGames[$i]["homeTeam"] . " Score:" . " ";
            echo $basketballGames[$i]["homeTeamScore"];
            echo " " . $basketballGames[$i]["visitingTeam"] . " Score:" . " ";
            echo $basketballGames[$i]["visitingTeamScore"];
            ?>
        </p>
    <?php
    }
    ?>
</body>

</html>