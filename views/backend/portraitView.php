<?php $title = 'SUPER! Création de sites web et blog' ?>

<header class="header_back">
    <h1>Portraits</h1>
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

<section class="admin_portrait">
    <h3>Ecrire un nouveau portrait</h3>
    <form class="portrait_form" action="index.php?action=admin_portrait" method="post">
        <input class="portrait_title" type="text" name="title" placeholder="Titre du portrait" id="title"><br />
        <textarea class="portrait" id="mytextarea" name="content" placeholder="Votre portrait" id="content" cols="30" rows="10"></textarea><br />
        <input class="submit" type="submit" name="published" placeholder="Publier" id="published"><br />
    </form>
</section>

<section class="all_portraits">
    <h3>Gérer les portraits</h3>
    <section class="manage_portraits">
        <h3 class="general_portraits">Tous les portraits</h3>
        <?php if (!empty($portraits)):
            foreach ($portraits as $cle => $elements): ?>
                <div class="portraits_published">
                    <h4><?= $elements->getTitle() ?></h4>
                    <p class="publication">Portrait publié le <?= $elements->getDatePortrait() ?></p>
                    <h5><?= $elements->getContent() ?></h5>
                    <a href="index.php?action=update_portrait&id=<?= $elements->getId() ?>">Modifier le portrait</a>
                </div>
            <?php endforeach;
        endif; ?>
    </section>

    <section class="pagePagination">
        <?php for ($i = 1; $i <= $nbPage; $i++):
            if ($i == $cPage):
                echo " $i /";
            else:
                echo " <a href=\"index.php?action=admin_portrait&p=$i\">$i</a> /";
            endif;
        endfor; ?>
    </section>
</section>