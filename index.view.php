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
