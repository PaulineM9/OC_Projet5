<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="title_container">
    <div class="title_contact">
        <h1>CONTACT</h1>
    </div>
</section>

<section class="contact_container">
    <section class="form_container">
        <form class="contact_form" method="post" action="index.php?action=contact"> 
            <input class="firstname form" type="text" name="firstname" placeholder="Nom" id="firstname" required>
            <span class="error-message"></span><br/>
            <input class="lastname form" type="text" name="lastname" placeholder="Prénom" id="lastname" required>
            <span class="error-message"></span><br/>
            <input class="email form" type="email" name="email" placeholder="Email" id="email" required>
            <span class="error-message"></span><br/>
            <input class="object form" type="text" name="object" placeholder="Objet" id="object" required>
            <span class="error-message"></span><br/>
            <textarea class="content form" name="content" placeholder="Votre message" id="content" cols="30" rows="10" required></textarea>
            <span class="error-message"></span><br/>
            <input class="envoyer form" type="submit" name="submit" value="Envoyer" id="submit"><br/>
        </form>
        <div id="msg">Votre message a bien été envoyé.</div>
    </section>

    <aside class="contact_infos_container">
        <div class="mail_number">
            <h4>CONTACT</h4>
            <p><a href="mailto:contact.super.web@gmail.com">contact.super.web@gmail.com</a></p>
			<p>+33 6 18 06 19 26</p>
			<p><a href="">Formulaire de contact</a></p>
        </div>

        <div class="entreprise_infos">
            <h4>INFOS</h4>
            <p>Entreprise Individuelle Pauline MARTIN</p>
			<p>RCS 752 722 744 000 22</p>
        </div>

        <div class="reseaux_sociaux">
            <h4>SUIVEZ-MOI</h4>
			<a href=""><img class="facebook_icon" alt="icone-facebook" src="public/images/fb_bk.png" width="30px"></a>
            <a href=""><img class="instagram_icon" alt="icone-instagram" src="public/images/insta_bk.png" width="30px"></a>
            <a href=""><img class="linkedin_icon" alt="icone-linkedin" src="public/images/linkedin_bk.png" width="30px"></a>
			<a href=""><img class="github_icon" alt="icone-github" src="public/images/github_bk.png" width="30px"></a>
        </div>
    </aside>

</section>

