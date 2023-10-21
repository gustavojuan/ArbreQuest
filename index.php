<?php

$trees = [
    [
        "id" => 1,
        "titulo" => "Pino Gigante del Parque de Cabecera",
        "descripcion" => "El Pino Gigante del Parque de Cabecera es un impresionante ejemplar que se alza majestuoso en el corazón de Valencia. Con más de 200 años de edad, este árbol es un verdadero monumento a la naturaleza.",
        "imagen" => "https://source.unsplash.com/800x600/?tree",
        "ubicacion" => [
            "latitud" => 39.4699,
            "longitud" => -0.3774
        ],
        "municipio" => "Valencia"
    ],
    [
        "id" => 2,
        "titulo" => "Olivo Centenario de Gandía",
        "descripcion" => "El Olivo Centenario de Gandía es un símbolo de resistencia y longevidad. Este antiguo olivo ha presenciado siglos de historia y es un verdadero tesoro vivo en la ciudad de Gandía.",
        "imagen" => "https://source.unsplash.com/800x600/?nature",
        "ubicacion" => [
            "latitud" => 39.4683,
            "longitud" => -0.3744
        ],
        "municipio" => "Gandía"
    ],
    [
        "id" => 3,
        "titulo" => "Roble Milenario de Alzira",
        "descripcion" => "El Roble Milenario de Alzira es una maravilla natural que ha sobrevivido al paso del tiempo. Con más de 1,000 años de antigüedad, este roble es un testigo de la historia de Alzira y sus alrededores.",
        "imagen" => "https://source.unsplash.com/800x600/?forest",
        "ubicacion" => [
            "latitud" => 39.4700,
            "longitud" => -0.3770
        ],
        "municipio" => "Alzira"
    ]
];


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
    <?php foreach ($trees

    as $tree) : ?>
    <li>
        <a href="/tree/<?= $tree['id'] ?>">
            <?= $tree['titulo']; ?> (<?= $tree['municipio'] ?>)?>
        </a>
    </li>
</ul>

<?php endforeach; ?>

</body>
</html>
