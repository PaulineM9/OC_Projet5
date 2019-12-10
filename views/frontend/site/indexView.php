<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="intro">
    <div class="intro_container">
        <img alt="logo_super" class="logo_intro_container" src="public/images/logo_super!.jpg">

        <div class="intro_container_text">
            <h3>Création de sites web</h3>
            <h3>Référencement naturel</h3>
            <h3>Rédaction web</h3>
        </div>
    </div>
</section>

<section class="services_container">
    <h3>SERVICES</h3><br />
    <h4>CRÉATION DE SITES WEB PERSONNALISÉS</h4><br>
    <p>Un site web performant, développé pour mettre en valeur votre <strong>entreprise</strong>, vos produits et votre image.
        Un <strong>outil de communication</strong> évolutif, site vitrine, site e-commerce ou blog, en lien avec les réseaux sociaux. Un design web
        pertinent et respectueux de votre entreprise. Un véritable outil de <strong>web marketing</strong> pour développer votre entreprise et votre clientèle.</p><br>
    <h4>CMS OU DÉVELOPPEMENT COMPLET</h4>
    <p>Un bon site internet c'est un outil web dont les spécificités corespondent parfaitement à vos <strong>attentes</strong> et <strong>à vos besoins</strong>. Etablir
        le cahier des charges précis de votre futur projet ensemble, c'est la première démarche essentielle pour développer l'outil qu'il vous faut.</p>
    <h4>RÉFÉRENCEMENT NATUREL</h4><br>
    <p>Nommé aussi <strong>SEO</strong>, c'est un élément incontournable pour être en bonne position sur les moteurs de recherche et
        toucher une clientèle plus large. Créer un site internet aujourd'hui, c'est avant tout une bonne <strong>optimisation</strong> SEO pour chaque élément
        (texte, image, vidéo...) mais aussi avoir une démarche de digital marketing pour augmenter votre visibilité. </p>
    <h4>RÉDACTION WEB</h4>
    <p>En lien direct avec le SEO, la <strong>rédaction web</strong> se doit d'être parfaitement adaptée à votre activité pour optimiser votre visibilité
        et mettre en valeur votre savoir-faire. Trouver les bons mots-clés, placer les bonnes balises, des articles bien rédigés... autant de
        bonnes pratiques pour faire de votre nouveau site internet un outil marketing ultra-performant.
    </p>
    <a class="services_page_link" href="index.php?action=services">Services</a>
</section>

<section class="portfolio_container">
    <h3>PORTFOLIO</h3>
    <div class="projects_navigation">
        <?php foreach ($projects as $project) : ?>
            <div class="projects_published">
                <h3><?= $project->getTitle() ?></h3>
                <?= $project->getImage() ?>
            </div>
        <?php endforeach; ?>
        <a class="portfolio_page_link" href="index.php?action=portfolio">Mes Réalisations</a>
    </div>
</section>

<section class="about_container">
    <h3>À PROPOS</h3>
    <p>Je suis Pauline, j'ai 37 ans et je souhaite vous accompagner tout au long de la réalisation de votre projet. Mon parcours
        professionnel est trés ecléctique. J'aime toucher à tout parce que je suis une grande passionnée. Mais ce que j'aime par-dessus
        tout ce sont les défis.
        Votre projet de site sera mon prochain défis et nous allons le relever ensemble.</p>
    <a class="about_page_link" href="index.php?action=about">A Propos</a>
</section>