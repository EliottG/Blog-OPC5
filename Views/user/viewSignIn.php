<?php
$title = "Se connecter";
?>
<div class="container">
    <h3 class='text-center mt-4 mb-3'>Se connecter</h3>
    <div class="form-signin">

        <form action="<?= ROOT_DIR ?>connexion" method="POST">
            <input class='col-xl-12 form-control mb-3' required type="text" name="id" placeholder="Pseudo">
            <input class='col-xl-12 form-control mb-3' required type="password" name="password" placeholder="Mot de passe">
            <button class='col-xl-12 form-control btn btn-dark mt-3 mb-2' required type="submit" name="send" value="sended">Se connecter</button>
            <p>Je n'ai pas de compte : <a href="<?= ROOT_DIR ?>inscription">Se créer un compte</a></p>
        </form>
    </div>
    <?php if (isset($data['error'])) : ?>
        <div class="mt-2 alert alert-danger text-center"> <?= $data['error'] ?></div>
    <?php endif ?>
</div>