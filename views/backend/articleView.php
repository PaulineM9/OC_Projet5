<?php $title = 'SUPER! Création de sites web et blog' ?>

<header class="header_back">
    <h1>Articles</h1>
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

<section class="admin_article">
    <h3>Ecrire un nouvel article</h3>
    <form class="article_form" action="index.php?action=admin_article" method="post">
        <input class="article_title" type="text" name="title" placeholder="Titre de l'article" id="title"><br />
        <!-- <input class="file" type="file" id="UploadPics"><br /> -->
        <textarea class="article" id="mytextarea" name="content" placeholder="Votre article" id="content" cols="30" rows="10"></textarea><br />
        <input class="submit" type="submit" name="published" placeholder="Publier" id="published"><br />
    </form>
</section>

<section class="all_articles">
    <h3>Gérer les articles</h3>
    <section class="manage_articles">
        <h3 class="general_articles">Tous les articles</h3>
        <?php if (!empty($articles)) {
            foreach ($articles as $cle => $elements) { ?>
                <div class="articles_published">
                    <p class="image_article"></p> <!-- permet d'afficher l'image -->
                    <h4><?= $elements->getTitle() ?></h4>
                    <p class="publication">Article publié le <?= $elements->getDateArticle() ?></p>
                    <h5><?= $elements->getContent() ?></h5>
                    <a href="index.php?action=update_article&id=<?= $elements->getId() ?>">Modifier l'article</a>
                </div>
        <?php }
        } ?>
    </section>

    <section class="pagePagination">
        <?php for ($i = 1; $i <= $nbPage; $i++) {
            if ($i == $cPage) {
                echo " $i /";
            } else {
                echo " <a href=\"index.php?action=admin_article&p=$i\">$i</a> /";
            }
        } ?>
    </section>
</section>