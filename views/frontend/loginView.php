<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="connexion_container">
    <?php if(isset($_SESSION)) { 
        include('views/flashMessages.php');
    } ?>
    <form class="connexion_form" action="index.php?action=login" method="post"> 
        <input class="identifiant connex_form" type="text" name="identifiant" placeholder="Identifiant" id="identifiant" required><br/>
        <input class="password connex_form" type="password" name="password" placeholder="Mot de passe" id="password" required><br/>
        <input class="connexion connex_form" type="submit" name="connexion" placeholder="Connexion" id="connexion"><br/>
    </form>
</section>