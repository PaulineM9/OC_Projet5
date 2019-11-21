<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="title_container">
    <div class="title_contact">
        <h1>CONTACT</h1>
    </div>
</section>

<section class="contact_container">
    <p id="loadBar" style="display:none;">
		<strong>Sending Email via slick AJAX. Hold on just a sec&#8230;</strong>
		<img src="img/loading.gif" alt="Loading..." title="Sending Email" />
	</p>
	<p id="emailSuccess" style="display:none;">
		<strong style="color:green;">Success! Your Email has been sent.</strong>
	</p>
    <div id="contactFormArea">
		
	</div>
    <!-- <section class="form_container">
        <form class="contact_form" method="post"> 
            <input class="firstname form" type="text" name="firstname" placeholder="Nom" id="firstname" required><br/>
            <input class="lastname form" type="text" name="lastname" placeholder="Prénom" id="lastname" required><br/>
            <input class="email form" type="email" name="email" placeholder="Email" id="email" required><br/>
            <input class="object form" type="text" name="object" placeholder="Objet" id="object" required><br/>
            <textarea class="content form" name="content" placeholder="Votre message" id="content" cols="30" rows="10" required></textarea><br/>
            <input class="envoyer form" type="submit" name="envoyer" placeholder="Envoyer" id="envoyer"><br/>
        </form>
        <?php
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['object']) && isset($_POST['content'])) {
                $position_arobase = strpos($_POST['email'], '@');
                if ($position_arobase === false)
                    echo '<p>Votre email doit comporter un arobase.</p>';
                else {
                    $retour = mail('contact.super.web@gmail.com', 'Envoi depuis la page Contact du site SUPER!', $_POST['content'], 'From: ' . $_POST['email']);
                    if($retour)
                        echo '<p>Votre message a été envoyé.</p>';
                    else
                        echo '<p>Erreur. <br/> Merci de remplir tous les champs du formulaire.</p>';
                }
            }
        ?>
    </section> -->

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

