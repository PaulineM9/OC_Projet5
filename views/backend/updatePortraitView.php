<?php $title = 'le blog de Jean Forteroche'; ?>

<section class="update admin_portrait">
    <h3>Modifier un portrait</h3>
    <form class="form_update portrait_form" action="index.php?action=update_portrait&id=<?= $_GET['id'] ?>" method="post">
        <input class="title" type="text" name="title" placeholder="Titre" id="title" value="<?= $portraits->getTitle() ?>"><br/>
        <textarea class="content" id="mytextarea" name="content" id="content" cols="30" rows="10" ><?= $portraits->getContent() ?></textarea><br/>
        <input class="submit" type="submit" name="published" placeholder="Publier" id="published"><br/> 
    </form>  
</section>