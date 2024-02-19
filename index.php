<?php

$partite = [
    [
        'squadraCasa' => 'Torino',
        'squadraOspite' => 'Bologna',
        'puntiCasa' => 70,
        'puntiOspite' => 64
    ],
    [
        'squadraCasa' => 'Milano',
        'squadraOspite' => 'Trieste',
        'puntiCasa' => 80,
        'puntiOspite' => 76
    ],
    [
        'squadraCasa' => 'Belluno',
        'squadraOspite' => 'Rome',
        'puntiCasa' => 64,
        'puntiOspite' => 90
    ],
    [
        'squadraCasa' => 'Verona',
        'squadraOspite' => 'Modena',
        'puntiCasa' => 350,
        'puntiOspite' => 4
    ]

    ];


foreach($partite as $partita)
    echo $partita['squadraCasa'].$partita['squadraOspite'].'|'.$partita['puntiCasa'].'-'.$partita['puntiOspite']
;

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
    
</body>
</html>