<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="icon" href="./assets/images/icon.jpg">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

<header>
    <div class="custom-padding">
        <nav>
            <ol>
                <div class="logo">
                    <img src="./assets/images/Photo.png">
                    <div class="name">
                        <li><a href="<?= URL ?>">Galdric Dupont</a></li>
                        <li class="point">.</li>
                    </div>
                </div>
                <div class="menu">
                    <li><a class="<?= !empty($highlighted) ? $highlighted : '' ?>" href="<?= URL ?>school-career">Parcours scolaire</a></li>
                    <li><a class="<?= !empty($highlighted) ? $highlighted : '' ?>" href="<?= URL ?>experience">Expérience</a></li>
                    <li><a class="<?= !empty($highlighted) ? $highlighted : '' ?>" href="<?= URL ?>projects">Projets</a></li>
                    <li><a class="<?= !empty($highlighted) ? $highlighted : '' ?>" href="<?= URL ?>watch">Veilles</a></li>
                    <li><a class="<?= !empty($highlighted) ? $highlighted : '' ?>" href="<?= URL ?>contact">Contact</a></li>
                </div>
            </ol>
        </nav>
    </div>
</header>