<?php $title = 'SUPER! Création de sites web et blog' ?>

<header class="header_back">
    <h1>Gérer les commentaires</h1>
</header>

<nav class="nav_icons_container">
    <div class="icons_container">
        <a class="go_home icones_menu" href="index.php?action=admin"><img alt="icon_go_home" src="public/images/home.png"></a>
        <a class="add_portrait icones_menu" href="index.php?action=admin_portrait"><img alt="icon_add_portait" src="public/images/portrait.png"></a>
        <a class="add_projet icones_menu" href="index.php?action=admin_projet"><img alt="icon_add_projet" src="public/images/projet.png"></a>
        <a class="manage_comments icones_menu" href="index.php?action=admin_comments"><img alt="icon_comments" src="public/images/commentaires.png"></a>
        <a class="profil icones_menu" href="index.php?action=admin_profil"><img alt="icon_manage_profil" src="public/images/user.png"></a>
        <a class="arrow icones_menu" href="index.php?action=home"><img alt="icon_arrow" src="public/images/retour-fleche.png"></a>
    </div>
</nav>

<section class="comments_articles_portraits_container">
    <section class="container_all_articles_comments">
        <div class="all_articles_comments">
            <h3>Tous les commentaires d'articles</h3>
            <?php if (!empty($commentArticle)) {
                foreach ($commentArticle as $cle => $elements) { ?>
                    <h4 class="title_ref"><?= $elements['title'] ?></h4><br />
                    <h5>[ <?= $elements['date_comment'] ?> ] Par <?= $elements['pseudo'] ?>:
                        <a href="index.php?action=admin_comments&id=<?= $elements['id'] ?>&delete_article"><i class="fas fa-times"></i></i></a>
                    <p class="show_comment"><?= $elements['content'] ?></p><br />
            <?php }
            } ?>
        </div>
        <div class="all_articles_comments_signaled">
            <h3>Commentaires d'articles signalés</h3>
            <?php if (!empty($commentArticleSignaled)) {
                foreach ($commentArticleSignaled as $cle => $elements) { ?>
                    <h4 class="title_ref"><?= $elements['title'] ?></h4><br />
                    <h5>[ <?= $elements['date_comment'] ?> ] Par <?= $elements['pseudo'] ?>:
                        <a href="index.php?action=admin_comments&id=<?= $elements['id'] ?>&delete_article"><i class="fas fa-times"></i></i></a>
                    <p class="show_comment"><?= $elements['content'] ?></p><br />
            <?php }
            } ?>
        </div>
    </section>

    <section class="container_all_portraits_comments">
        <div class="all_portraits_comments">
            <h3>Tous les commentaires de portraits</h3>
            <?php if (!empty($commentPortrait)) {
                foreach ($commentPortrait as $cle => $elements) { ?>
                    <h4 class="title_ref"><?= $elements['title'] ?></h4><br />
                    <h5>[ <?= $elements['date_comment'] ?> ] Par <?= $elements['pseudo'] ?>:
                        <a href="index.php?action=admin_comments&id=<?= $elements['id'] ?>&delete_portrait"><i class="fas fa-times"></i></i></a>
                    <p class="show_comment"><?= $elements['content'] ?></p><br />
            <?php }
            } ?>
        </div>
        <div class="all_portraits_comments_signaled">
            <h3>Commentaires de portraits signalés</h3>
            <?php if (!empty($commentPortraitSignaled)) {
                foreach ($commentPortraitSignaled as $cle => $elements) { ?>
                    <h4 class="title_ref"><?= $elements['title'] ?></h4><br />
                    <h5>[ <?= $elements['date_comment'] ?> ] Par <?= $elements['pseudo'] ?>:
                        <a href="index.php?action=admin_comments&id=<?= $elements['id'] ?>&delete_portrait"><i class="fas fa-times"></i></i></a>
                    <p class="show_comment"><?= $elements['content'] ?></p><br />
            <?php }
            } ?>
        </div>
    </section>
</section>