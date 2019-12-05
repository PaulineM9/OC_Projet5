<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="title_container">
    <div class="title_portfolio">
        <h1>PORTFOLIO</h1>
    </div>
</section>

<section class="portfolio_projects_container">  
    <?php foreach ($projects as $project): ?>
        <?php 
             $i++; ?>
        <div class="all_projects_published"> 
            <h3><?= $project->getTitle() ?></h3>
            <h4><?= $project->getImage() ?></h4>
            <a href="http://<?= $project->getLink() ?>" target="blank"><?= $project->getLink() ?></a>
            <button class="description_btn" data-btn="<?= $i ?>">Description</button>
            <div class="modal" data-modal="<?= $i ?>">
                <div class="modal-content">
                    <span class="close" data-close="<?= $i ?>">&times;</span>
                    <h4>Description du projet</h4>
                    <h5><?= $project->getDescription() ?></h5>
                </div>
            </div>    
        </div>  
    <?php endforeach; ?>
</section>


