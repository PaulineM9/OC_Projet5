<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="title_container">
    <div class="title_portfolio">
        <h1>PORTFOLIO</h1>
    </div>
</section>

<section class="portfolio_projects_container">   
    <?php foreach ($projects as $project) { ?>
            <div class="all_projects_published">
                <h3><?= $project->getTitle() ?></h3>
                <h4><?= $project->getImage() ?></h4>
                <a href="<?= $project->getLink() ?>">Visiter le site</a>
                <a class="description" href="">Description</a>
            </div>
    <?php } ?>  
</section>
