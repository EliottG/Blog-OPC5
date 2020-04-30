<?php
$title = 'Utilisateur'
?>
<div class="container">

    <h1 class='text-center mt-4'>Utilisateur</h1>
    <a href="<?= ROOT_DIR ?>administration"><button class='btn btn-dark mb-3'>Revenir à l'espace administration</button></a>
    <h3>Nom: <?= $data['user']['name'] ?></h3>
    <h3>Prénom: <?= $data['user']['firstname'] ?></h3>
    <h3>Pseudo: <?= $data['user']['pseudo'] ?></h3>
    <h3>Rôle: <?= $data['user']['role'] ?></h3>
    <?php if ($data['user']['role'] == 'Admin') : ?>
        <form action="<?= ROOT_DIR ?>utilisateur/<?= $data['user']['ID'] ?>" method="POST">
            <button value="<?= $data['user']['ID'] ?>" type="submit" name="unset" class='btn btn-primary mt-3'>Enlever le rôle Administrateur</button>
        </form>
    <?php else : ?>
        <form action="<?= ROOT_DIR ?>utilisateur/<?= $data['user']['ID'] ?>" method="POST">
            <button value="<?= $data['user']['ID'] ?>" type="submit" name="set" class='btn btn-primary mt-3'>Donner le rôle Administrateur</button>
        </form>
    <?php endif ?>
</div>