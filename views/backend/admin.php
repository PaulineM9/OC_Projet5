<?php $title = 'SUPER! Création de sites web et blog' ?>

<header class="header_back">
    <h1>Page d'accueil</h1>
</header>

<section class="admin_welcome">
    <h2 class="admin_title">
        Bonjour <!-- insérer les données de prénom de user -->, bienvenue dans votre espace administrateur.
    </h2>
</section>

<nav class="admin_navigation">
    <div class="nav_icons">
        <a class="add_article icons" href="index.php?admin_article"><img alt="icon_add_article" src="public/images/article.png"></a>
        <a class="add_portrait icons" href="index.php?admin_portrait"><img alt="icon_add_portait" src="public/images/portrait.png"></a>
        <a class="add_projet icons" href="index.php?admin_projet"><img alt="icon_add_projet" src="public/images/projet.png"></a>
        <a class="manage_comments icons" href="index.php?admin_comments"><img alt="icon_comments" src="public/images/commentaires.png"></a>
        <a class="manage_messages icons" href="index.php?admin_messages"><img alt="icon_messages" src="public/images/messagerie.png"></a>
        <a class="profil icons" href="index.php?admin_profil"><img alt="icon_manage_profil" src="public/images/user.png"></a>
    </div>
    <div class="nav_titles">
        <p>Articles</p>
        <p>Portraits</p>
        <p>Projets</p>
        <p>Commentaires</p>
        <p>Messagerie</p>
        <p>Gérer mon profil</p>
    </div>
</nav>