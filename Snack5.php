<?php
$class = [
    [
        "name" => "Walter",
        "surname" => "White",
        "votes" => [
            "english" => 9,
            "math" => 7,
            "chemistry" => 10
        ]
    ],
    [
        "name" => "Giovanni",
        "surname" => "Giorgio",
        "votes" => [
            "english" => 8,
            "math" => 2.5,
            "chemistry" => 4
        ]
    ],
    [
        "name" => "Jessy",
        "surname" => "Pinkman",
        "votes" => [
            "english" => 8,
            "math" => 5.5,
            "chemistry" => 8.5
        ]
    ],
]
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
    <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

    <h3>La classe è composta dai seguenti alunni:</h3>
    <ul>
        <?php
        for ($i = 0; $i < count($class); $i++) {
        ?>
            <li>
                <p>
                    <?php
                        echo "Nome : " . $class[$i]["name"];
                    ?>
                </p>

                <p>
                    <?php
                        echo "Cognome : " . $class[$i]["surname"];
                    ?>
                </p>
                
                <p>
                    <?php
                        $schoolAverage = array_sum($class[$i]["votes"]) / count($class[$i]["votes"]);
                        echo "Media Scolastica : " . round($schoolAverage, 1);
                    ?>
                </p>
            </li>
        <?php
        }
        ?>
    </ul>


</body>

</html>