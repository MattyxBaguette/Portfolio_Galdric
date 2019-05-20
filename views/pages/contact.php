<?php define ('URL','http://localhost:8888/Portfolio_Galdric/public/');
include '../partials/header.php' ?>

<div class="content">
    <div class="page-title">
        <h1>Vous souhaitez </h1><h1 class="colored_text">me contacter ?</h1>
    </div>
    <img src="<?= URL ?>assets/images/paper-plane.svg">
</div>
<div class="contact-me">
    <form method="post">
        <input  type="text" name="first_name" placeholder="Prénom">
        <input  type="text" name="last_name" placeholder="Nom">
        <input  type="text" name="objet" placeholder="Objet">
        <input  type="text" name="email" placeholder="Email">
        <div class="underline">
            <textarea  name="comments" placeholder="Expliquez brièvement quel est votre projet et quelles sont vos attentes.
En quoi puis-je vous aider ?"></textarea>
        </div>
        <input type="submit" value="Envoyer"<img src="<?= URL ?>assets/images/Path.svg">>
    </form>
</div>

<?php include '../partials/footer.php' ?>
