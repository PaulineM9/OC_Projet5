<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="intro">
    <div class="intro_container">
        <h1><img class="logo_intro_container" src="public/images/logo_super!.jpg"></h1>

        <div class="intro_container_text">
            <h3>Création de sites web</h3>
            <h3>Référencement naturel</h3>
            <h3>Rédaction web</h3>
        </div>
    </div>
</section>

<section class="services_container">
    <div class="stars">
        <img alt="stars" src="public/images/etoile_pleine_bk.png" width="20px">
        <img alt="stars" src="public/images/etoile_pleine_bk.png" width="20px">
        <img alt="stars" src="public/images/etoile_pleine_bk.png" width="20px">
        <img alt="stars" src="public/images/etoile_pleine_bk.png" width="20px">
    </div>

    <div class="services_presentation">
        <h2>SERVICES</h2><br />
        <h3>CRÉATION DE SITES WEB PERSONNALISÉS</h3><br>
        <p>Un site web performant, développé pour mettre en valeur votre <strong>entreprise</strong>, vos produits et votre image.
            Un <strong>outil de communication</strong> évolutif, site vitrine, site e-commerce ou blog, en lien avec les réseaux sociaux. Un design web
            pertinent et respectueux de votre entreprise. Un véritable outil de <strong>web marketing</strong> pour développer votre entreprise et votre clientèle.</p><br>
        <h3>RÉFÉRENCEMENT NATUREL</h3><br>
        <p>Nommé aussi <strong>SEO</strong>, c'est un élément incontournable pour être en bonne position sur les moteurs de recherche et
            toucher une clientèle plus large. Créer un site internet aujourd'hui, c'est avant tout une bonne <strong>optimisation</strong> SEO pour chaque élément
            (texte, image, vidéo...) mais aussi avoir une démarche de digital marketing pour augmenter votre visibilité. </p>
        <h3>RÉDACTION WEB</h3>
        <p>En lien direct avec le SEO, la <strong>rédaction web</strong> se doit d'être parfaitement adaptée à votre activité pour optimiser votre visibilité
            et mettre en valeur votre savoir-faire. Trouver les bons mots-clés, placer les bonnes balises, des articles bien rédigés... autant de
            bonnes pratiques pour faire de votre nouveau site internet un outil marketing ultra-performant.
        </p>
        <h3>CMS OU DÉVELOPPEMENT COMPLET</h3>
        <p>Un bon site internet c'est un outil web dont les spécificités corespondent parfaitement à vos <strong>attentes</strong> et <strong>à vos besoins</strong>. Etablir
            le cahier des charges précis de votre futur projet ensemble, c'est la première démarche essentielle pour développer l'outil qu'il vous faut.</p>
        <a class="services_page_link" href="index.php?action=services">Services</a>
    </div>
</section>

<section class="portfolio_container">
    <h2>PORTFOLIO</h2>
    <div class="projects_navigation">
    <?php foreach ($projects as $project) { ?>
                <div class="projects_published">
                    <h3><?= $project->getTitle() ?></h3>
                </div>
            <?php } ?>
    </div>
    <a class="portfolio_page_link" href="index.php?action=portfolio">Mes Réalisations</a>
</section>

<section class="about_container">
    <h2>À PROPOS</h2>
    <p>Je suis Pauline, j'ai 37 ans et je souhaite vous accompagner tout au long de la réalisation de votre projet. Mon parcours
        professionnel est trés ecléctique. J'aime toucher à tout parce que je suis une grande passionnée. Mais ce que j'aime par-dessus
        tout ce sont les défis.
        Votre projet de site sera mon prochain défis et nous allons le relever ensemble.</p>
    <a class="about_page_link" href="index.php?action=about">A Propos</a>
</section>