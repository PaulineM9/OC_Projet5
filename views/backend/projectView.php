<?php $title = 'SUPER! Création de sites web et blog' ?>

<header class="header_back">
    <h1>Projets</h1>
</header>

<nav class="nav_icons_container">
    <div class="icons_container">
        <a class="go_home icones_menu" href="index.php?action=admin"><img alt="icon_go_home" src="public/images/home.png"></a>
        <a class="add_portrait icones_menu" href="index.php?action=admin_portrait"><img alt="icon_add_portait" src="public/images/portrait.png"></a>
        <a class="add_projet icones_menu" href="index.php?action=admin_projet"><img alt="icon_add_projet" src="public/images/projet.png"></a>
        <a class="manage_comments icones_menu" href="index.php?action=admin_comments"><img alt="icon_comments" src="public/images/commentaires.png"></a>
        <a class="manage_messages icones_menu" href="index.php?action=admin_messages"><img alt="icon_messages" src="public/images/messagerie.png"></a>
        <a class="profil icones_menu" href="index.php?action=admin_profil"><img alt="icon_manage_profil" src="public/images/user.png"></a>
        <a class="arrow icones_menu" href="index.php?action=home"><img alt="icon_arrow" src="public/images/retour-fleche.png"></a>
    </div>
</nav>

<section class="projects_container">
    <div class="insert_new_project">
        <form class="new_projects_form" action="index.php?action=admin_projet&id=<?= $_GET['id'] ?>" method="post">
            <!-- insérer une photo / image dans la bdd puis l'afficher-->
            <textarea class="title" type="text" name="title" placeholder="Titre" id="title" cols="80"></textarea><br/>
            <textarea class="description" name="description" placeholder="Description du projet" id="description" cols="80" rows="10"></textarea><br/>
            <textarea class="link" name="link" placeholder="Lien vers le projet" id="comment" cols="80"></textarea><br/>
            <input class="submit" type="submit" name="submit" placeholder="Envoyer" id="submit"><br/>
        </form> 
        <!-- insérer un lien pour modifier le projet -->
    </div>
</section>