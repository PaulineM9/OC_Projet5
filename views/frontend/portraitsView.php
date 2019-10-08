<?php $title = 'SUPER! Le Blog' ?>

<section class="nav_portraits">
    <section class="show_portrait">
        <div class="portrait_container">
            <p><!--insérer la photo du portrait --></p>
            <h2><?= $portrait->getTitle() ?></h2><br/>
            <h3>Publié le <?= $portrait->getDatePortrait() ?></h3><br/>
            <p><?= $portrait->getContent() ?></p><br/>
        </div>

        <div class="comments"></div>
            <section class="comments_portrait">
                <h3>COMMENTAIRES</h3>
                <!-- affiche les commentaires ds l'ordre de parution avec pagination -->
            </section>
            <section class="create_comments_portrait">
                <h3>Postez votre commentaire</h3>
                <h4>Faites nous part de vos <strong>expériences</strong>, de vos remarques ou posez-moi vos questions en lien avec ce portrait</h4>
                <form class="comments_form" action="index.php?action=portrait&id=<?= $_GET['id'] ?>" method="post">
                    <input class="pseudo" type="text" name="pseudo" placeholder="Pseudo" id="pseudo"><br/>
                    <input class="mail" type="email" name="mail" placeholder="Email" id="mail"><br/>
                    <textarea class="comment" name="comment" placeholder="Votre commentaire" id="comment" cols="30" rows="10"></textarea><br/>
                    <input class="submit" type="submit" name="submit" placeholder="Envoyer" id="submit"><br/>
                </form> 
            </section>
        </div>
    </section>

    <section class="all_portraits_list">
        <h5>Archives des portraits</h5>
            <?php if (!empty($allPortraits)) {
                foreach ($allPortraits as $cle => $elements) { ?>
                    <div class="all_portraits">
                        <a href="index.php?action=portraits&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
            <?php }
        } ?>
    </section>
</section>