<?php $title = 'SUPER! Création de sites web et blog' ?>

<header class="header_back">
    <h1>Gérer mes informations personnelles</h1>
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

<?php if (!isset($_GET['modif'])): ?>
<section class="profil_infos">
    <h2>Modifier mes informations personnelles</h2>
    <p>mon identifiant: <?= $_SESSION['identifiant'] ?></p><br/>
    <p>mon adresse mail: <?= $_SESSION['email'] ?></p>
</section>

<div class="modif">
    <a class="modif_profil_link" href="index.php?action=admin_profil&id=<?= $_GET['id'] ?>&modif">Modifier mon profil ou mon mot de passe</a>
<?php endif; ?>
    <?php if (isset($_GET['modif'])): ?>
    <form class="sign_in_modif" action="index.php?action=admin_profil&id=<?= $_GET['id']?>&modif" method="post">
        <input class="identifiant_admin" type="text" name="identifiant"  placeholder="Identifiant" id="identifiant" value="<?= $_SESSION['identifiant'] ?>"><br/>
        <input class="email_admin" type="email" name="email" placeholder="Votre email" id="email" value="<?= $_SESSION['email'] ?>"><br/>
        <input class="password_admin" type="password" name="password" placeholder="Nouveau mot de passe" id="password"><br/>
        <input class="check_password" type="password" name="check_password" placeholder="Confirmation du mot de passe" id="check_password"><br/>
        <input class="submit_admin" type="submit" name="submit" value="Modifier" id="submit"><br/>
    </form>
    <p id="pw_message">Le mot de passe doit contenir plus de 6 caractères <br/> dont au moins une majuscule et un caractère spécial.</p>
    <?php if(isset($_SESSION)): 
        include('views/flashMessages.php');
    endif; ?>
    <?php endif; ?>
</div>