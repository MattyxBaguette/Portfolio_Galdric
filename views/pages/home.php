<?php include '../views/partials/header.php' ?>

<div class="content">
<h1>Bonjour,</h1>
<div class="phrase">
    <h2>je suis Technicien</h2>
    <h2 class="colored_text">Système & Réseau.</h2>
</div>
<!--<div class="redirection">-->
<!--    <button class="about">En savoir plus<img src="--><?//= URL ?><!--assets/images/Path.svg"></button>-->
<!--</div>-->
    <form>
        <input type="button" value="En savoir plus"<img src="><?= URL ?>assets/images/Path.svg" onclick="document.location.href='<?= URL ?>about'">
    </form>
<div class="social">
    <a href="https://www.linkedin.com/in/galdric-dupont-baa8a8183/"><img src="<?= URL ?>assets/images/linkedin.svg"></a>
    <a href="#"><img src="<?= URL ?>assets/images/mail.svg"></a>
</div>
</div>

<?php include '../views/partials/footer.php' ?>
