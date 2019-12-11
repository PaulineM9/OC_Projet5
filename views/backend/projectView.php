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
        <a class="profil icones_menu" href="index.php?action=admin_profil&id=<?= $_SESSION['user'] ?>"><img alt="icon_manage_profil" src="public/images/user.png"></a>
        <a class="arrow icones_menu" href="index.php?action=home"><img alt="icon_arrow" src="public/images/retour-fleche.png"></a>
    </div>
</nav>

<section class="projects_container">
    <div class="insert_new_project">
        <form class="new_projects_form" action="index.php?action=admin_projet&id=<?= $_GET['id'] ?>" method="post">
            <textarea class="title" type="text" name="title" placeholder="Titre" id="title" cols="80"></textarea><br/>
            <textarea class="image" id="mytextarea" name="image" placeholder="Image" id="image" cols="80" rows="30"></textarea><br/>
            <!-- format de l'image à insérer: largeur = 200 -->
            <textarea class="description" id="mytextarea" name="description" placeholder="Description" id="content" cols="80" rows="30"></textarea><br/>
            <textarea class="link" id="textarea" name="link" placeholder="Lien vers le projet" cols="80"></textarea><br/>
            <input class="submit" type="submit" name="submit" placeholder="Envoyer" id="submit"><br/>
        </form> 
    </div>
</section>