<?php $title = 'SUPER! Le Blog' ?>

<section class="blog_presentation_container">
    <h4>Le blog SUPER! ce sont des articles sur la <strong>reconversion professionnelle</strong> et <strong>l'entreprenariat</strong> pour tous mais pour les femmes en particulier,
        ce sont de bons conseils pour préparer et lancer son <strong>projet</strong>, un accompagnement pour faire vivre votre <strong>entreprise</strong>,
        le partage de témoignages de reconvertis-entrepreneurs et le récit de mon quotidien de freelance.
    </h4>
</section>

<section class="navigation">
    <a href="index.php?action=portraits">
        <h3>PORTRAITS</h3>
    </a>
    <a href="index.php?action=articles">
        <h3>ARTICLES</h3>
    </a>
</section>

<div class="content_container">
    <section class="lasts_contents">
        <div class="lasts_portraits">
            <h5>Le portrait du mois</h5>
            <p></p><!-- affiche la photo, le titre du dernier portrait -->
            <?php if (!empty($portraits)) {
                foreach ($portraits as $cle => $elements) { ?>
                    <div class="last_portrait_published">
                        <h3><?= $elements->getTitle() ?></h3>
                        <p> Publié le <?= $elements->getDatePortrait() ?></p>
                        <a class="lire_plus" href="index.php?action=portraits&id=<?= $elements->getId() ?>">Lire plus...</a><!-- ajouter le lien actif -->
                    </div>
            <?php }
            } ?>
        </div>
        <div class="lasts_articles">
            <h5>Dernier article</h5>
            <p>
                <!-- affiche la photo, le titre du dernier article -->
                <?php if (!empty($articles)) {
                    foreach ($articles as $cle => $elements) { ?>
                        <div class="last_article_published">
                            <h3><?= $elements->getTitle() ?></h3>
                            <p> Publié le <?= $elements->getDateArticle() ?></p>
                            <a class="lire_plus" href="index.php?action=articles&id=<?= $elements->getId() ?>">Lire plus...</a><!-- ajouter le lien actif -->
                        </div>
                <?php }
                } ?>
            </p>
        </div>
    </section>

    <aside class="archives_container">
        <div class="archives_portraits">
            <h5>Archives des portraits</h5>
            <?php if (!empty($tree_portraits)) {
                foreach ($tree_portraits as $cle => $elements) { ?>
                    <div class="last_tree_portraits">
                        <a href="index.php?action=portraits&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
            <?php }
            } ?>
        </div>
        <div class="archives_articles">
            <h5>Archives des articles</h5>
            <?php if (!empty($tree_articles)) {
                foreach ($tree_articles as $cle => $elements) { ?>
                    <div class="last_tree_articles">
                        <a href="index.php?action=articles&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
            <?php }
            } ?>
        </div>
    </aside>
</div>