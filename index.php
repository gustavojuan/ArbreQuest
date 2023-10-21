<?php

$trees = [
    [
        "id" => 1,
        "titulo" => "Pino Gigante del Parque de Cabecera",
        "descripcion" => "El Pino Gigante del Parque de Cabecera es un impresionante ejemplar que se alza majestuoso en el corazón de Valencia. Con más de 200 años de edad, este pino pertenece a la familia de los Pinaceae.",
        "imagen" => "https://source.unsplash.com/800x600/?tree",
        "ubicacion" => [
            "latitud" => 39.4699,
            "longitud" => -0.3774
        ],
        "municipio" => "Valencia",
        "especie" => "Pinus"
    ],
    [
        "id" => 2,
        "titulo" => "Olivo Centenario de Gandía",
        "descripcion" => "El Olivo Centenario de Gandía es un símbolo de resistencia y longevidad. Este antiguo olivo es de la especie Olea europaea.",
        "imagen" => "https://source.unsplash.com/800x600/?nature",
        "ubicacion" => [
            "latitud" => 39.4683,
            "longitud" => -0.3744
        ],
        "municipio" => "Gandía",
        "especie" => "Olea europaea"
    ],
    [
        "id" => 3,
        "titulo" => "Roble Milenario de Alzira",
        "descripcion" => "El Roble Milenario de Alzira es un impresionante ejemplar de roble de la especie Quercus robur, con más de 1,000 años de antigüedad.",
        "imagen" => "https://source.unsplash.com/800x600/?forest",
        "ubicacion" => [
            "latitud" => 39.4700,
            "longitud" => -0.3770
        ],
        "municipio" => "Alzira",
        "especie" => "Quercus robur"
    ]
];


$filteredTrees = array_filter($trees,function ($tree){
    return $tree['municipio'] === 'Gandía';
});


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Árboles Patrimoniales Provincia de València - ¡Hazte con todos!</title>
</head>
<body>




<ul>
    <?php foreach ($trees    as $tree) : ?>
    <li>
        <a href="/tree/<?= $tree['id'] ?>">
            <?= $tree['titulo']; ?> (<?= $tree['municipio'] ?>)
        </a>
    </li>

    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach ($filteredTrees   as $tree) : ?>
    <li>
        <a href="/tree/<?= $tree['id'] ?>">
            <?= $tree['titulo']; ?> (<?= $tree['municipio'] ?>)
        </a>
    </li>

    <?php endforeach; ?>
</ul>



</body>
</html>
