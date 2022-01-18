<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- <?php
$partite = [
    [
        "sqCasa" => "Los Angeles Lakers",
        "ptCasa" => 110,
        "sqOspite" => "Golden State Warriors",
        "ptOspite" => 101,
    ],
    [
        "sqCasa" => "Chicago Bulls",
        "ptCasa" => 90,
        "sqOspite" => "Miami Heat",
        "ptOspite" => 88,
    ],
    [
        "sqCasa" => "Phoenix Suns",
        "ptCasa" => 124,
        "sqOspite" => "Utah Jazz",
        "ptOspite" => 115,
    ],
];

var_dump($partite);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snack 1</title>
</head>

<body>
    <h1>Giornata 3</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($partite); $i++) { ?>
            <li>
                <?php echo $partite[$i]["sqCasa"] . " - " . $partite[$i]["sqOspite"] . " | " . $partite[$i]["ptCasa"] . "-" . $partite[$i]["ptOspite"]; ?>
            </li>
        <?php }; ?>
    </ul>
</body>

</html> -->

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
$nome = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['eta'];

if(strlen($nome) > 3 && is_numeric($age) && strpos($mail, '.') !== false && strpos($mail, '@') !== false) {
    echo "Accesso consentito";
} else {
    echo "Accesso negato";
}
?>