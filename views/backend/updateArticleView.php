<?php $title = 'le blog de Jean Forteroche'; ?>

<section class="update admin_article">
    <h3>Modifier un article</h3>
    <form class="form_update article_form" action="index.php?action=update_article&id=<?= $_GET['id'] ?>" method="post">
        <input class="title" type="text" name="title" placeholder="Titre" id="title" value="<?= $articles->getTitle() ?>"><br/>
        <textarea class="content" id="mytextarea" name="content" id="content" cols="30" rows="10" ><?= $articles->getContent() ?></textarea><br/>
        <input class="submit" type="submit" name="published" placeholder="Publier" id="published"><br/> 
    </form>  
</section