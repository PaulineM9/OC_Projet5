<?php $title = 'SUPER! Le Blog' ?>

<section class="blog_presentation_container">
    <h4>Le blog SUPER! ce sont des articles sur la <strong>reconversion professionnelle</strong> et <strong>l'entreprenariat</strong> pour tous mais pour les femmes en particulier,
        ce sont de bons conseils pour préparer et lancer son <strong>projet</strong>, un accompagnement pour faire vivre votre <strong>entreprise</strong>,
        le partage de témoignages de reconvertis-entrepreneurs et le récit de mon quotidien de freelance.
    </h4>
</section>

<div class="content_container">
    <section class="lasts_contents">
        <hr>
        <div class="lasts_portraits">
        <h5><img class="img_portraits" alt="image_portrait" src="public/images/img_portraits copie.gif"></h5>
            <?php if (!empty($portraits)):
                foreach ($portraits as $cle => $elements): ?>
                    <div class="last_portrait_published">
                        <h3><?= $elements->getTitle() ?></h3>
                        <a class="lire_plus" href="index.php?action=portraits&id=<?= $elements->getId() ?>">Lire plus...</a><!-- ajouter le lien actif -->
                        <p> Publié le <?= $elements->getDatePortrait() ?></p>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
        <hr>
        <div class="lasts_articles">
            <h5><img class="img_articles" alt="image_articles" src="public/images/img_articles copie.gif"></h5>
                <?php if (!empty($articles)):
                    foreach ($articles as $cle => $elements): ?>
                        <div class="last_article_published">
                            <h3><?= $elements->getTitle() ?></h3>
                            <a class="lire_plus" href="index.php?action=articles&id=<?= $elements->getId() ?>">Lire plus...</a><!-- ajouter le lien actif -->
                            <p> Publié le <?= $elements->getDateArticle() ?></p>
                        </div>
                    <?php endforeach;
            endif; ?>
        </div>
    </section>

    <aside class="archives_container">
        <div class="archives_portraits">
            <h6>Archives des portraits</h6>
            <?php if (!empty($tree_portraits)):
                foreach ($tree_portraits as $cle => $elements): ?>
                    <div class="last_tree_portraits">
                        <a href="index.php?action=portraits&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
        <div class="archives_articles">
            <h6>Archives des articles</h6>
            <?php if (!empty($tree_articles)):
                foreach ($tree_articles as $cle => $elements): ?>
                    <div class="last_tree_articles">
                        <a href="index.php?action=articles&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
    </aside>
</div>