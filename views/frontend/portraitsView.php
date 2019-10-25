<?php $title = 'SUPER! Le Blog' ?>

<section class="nav_portraits">
    <section class="show_portrait">
        <div class="portrait_container">
            <h2><?= $portrait->getTitle() ?></h2><br/>
            <h3>Publié le <?= $portrait->getDatePortrait() ?></h3><br/>
            <p><?= $portrait->getContent() ?></p><br/>
        </div>

        <div class="comments"></div>
            <section class="comments_portrait">
                <h3>COMMENTAIRES</h3>
                <div class="comment_container">
                    <?php if (!empty($commentedPortrait))
                        { foreach ($commentedPortrait as $cle => $elements) { ?>
                            <p>Publié le <?= $elements->getDateComment() ?> Par <?= $elements->getPseudo() ?> (<a href="index.php?action=portraits&id=<?= $portrait->getId() ?>&idComment=<?= $elements->getId() ?>&signaled" class="signal">Signaler</a>): </p><br/> 
                            <p class="comment_published"><?= $elements->getContent() ?><br />                       
                            <div class="signal_message">
                                <?php if (isset($_SESSION) AND isset($_GET['signaled']) AND $elements->getSignaled() == 1)  { include('views/flashMessages.php'); } ?>   
                            </div> 
                        <?php }                    
                    } ?> 
                </div>
                <hr>   
            </section>
            
            <section class="create_comments_portrait">
                <h3>Postez votre commentaire</h3>
                <h4>Faites nous part de vos <strong>expériences</strong>, de vos remarques ou posez-moi vos questions en lien avec ce portrait</h4>
                <form class="comments_form" action="index.php?action=portraits&id=<?= $_GET['id'] ?>" method="post">
                    <input class="pseudo" type="text" name="pseudo" placeholder="Pseudo" id="pseudo" required><br/>
                    <input class="mail" type="email" name="mail" placeholder="Email" id="mail" required><br/>
                    <textarea class="content" name="content" placeholder="Votre commentaire" id="content" cols="30" rows="10" required></textarea><br/>
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