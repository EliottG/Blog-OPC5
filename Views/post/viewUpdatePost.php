<?php

$title = 'Modifier un article';


?>
<body class='PostPage'>
<div class="container">
    <h3 class="mt-5 mb-5 text-center">Modifier mon article</h3>
    <form action="<?= htmlentities(ROOT_DIR) ?>modifier-article/<?= $data['update']['ID'] ?>" method="POST">
        <input class=' form-control mb-3' name="author" placeholder="Auteur" value="<?= htmlspecialchars($data['update']['author']) ?>">
        <input class=' form-control mb-3' name="title" placeholder="Titre" value="<?= htmlspecialchars($data['update']['title']) ?>">
        <textarea class='form-control mb-3' name="chapo" id="" cols="30" rows="4" placeholder="chapô"> <?= htmlspecialchars($data['update']['chapo']) ?></textarea>
        <textarea class='form-control mb-3' name="content" id="" placeholder="Contenu" cols="30" rows="10"><?= htmlspecialchars($data['update']['content']) ?></textarea>
        <button class='form-control btn btn-dark' type="submit" value="1" name="send">Valider les modifications</button>
    </form>
</div>
<?php

?>