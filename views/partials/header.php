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
                        <li><a href="<?= URL ?>pages/home.php">Galdric Dupont</a></li>
                        <li class="point">.</li>
                    </div>
                </div>
                <div class="menu">
                    <li><a href="parcours_scolaire.html">Parcours scolaire</a></li>
                    <li><a href="experience.html">Expérience</a></li>
                    <li><a href="projets">Projets</a></li>
                    <li><a href="veilles">Veilles</a></li>
                    <li><a href="contact">Contact</a></li>
                </div>
            </ol>
        </nav>
    </div>
</header>