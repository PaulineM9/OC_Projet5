<?php $title = 'SUPER! Le Blog' ?>

<section class="nav_articles">
    <section class="show_article">
        <div class="article_container">
            <p><!--insérer la photo de l'article --></p>
            <h2><?= $article->getTitle() ?></h2><br/>
            <h3>Publié le <?= $article->getDateArticle() ?></h3><br/>
            <p><?= $article->getContent() ?></p><br/>
        </div>

        <div class="comments"></div>
            <section class="comments_article">
                <h3>COMMENTAIRES</h3>
                <!-- commentaires dans une fenêtre dédidée active en JS au click => affiche les commentaires ds l'ordre de parution avec pagination -->
                <div class="comment_container">
                    <?php if (!empty($commentedArticle))
                        { foreach ($commentedArticle as $cle => $elements) { ?>
                            <p>Publié le <?= $elements->getDateComment() ?> Par <?= $elements->getPseudo() ?> (<a href="index.php?action=article&id=<?= $article->getId() ?>&idComment=<?= $elements->getId() ?>&signaled" class="signal">Signaler</a>): </p><br/> 
                            <p class="comment_published"><?= $elements->getContent() ?><br />                       
                            <div class="signal_message">
                                <?php if (isset($_GET['signaled']) AND $elements->getSignaled() == 1)  { echo $message; } ?>   
                            </div> 
                        <?php }                    
                    } ?> 
                </div>
                <hr>    
            </section>
            
            <section class="create_comments_article">
                <h3>Postez votre commentaire</h3>
                <h4>Faites nous part de vos <strong>expériences</strong>, de vos remarques ou posez-moi vos questions en lien avec cet article</h4>
                <form class="comments_form" action="index.php?action=articles&id=<?= $_GET['id'] ?>" method="post">
                    <input class="pseudo" type="text" name="pseudo" placeholder="Pseudo" id="pseudo" required><br/>
                    <input class="mail" type="email" name="mail" placeholder="Email" id="mail" required><br/>
                    <textarea class="content" name="content" placeholder="Votre commentaire" id="content" cols="30" rows="10" required></textarea><br/>
                    <input class="submit" type="submit" name="submit" placeholder="Envoyer" id="submit"><br/>
                </form> 
            </section>
        </div>
    </section>

    <section class="all_articles_list">
        <h5>Archives des articles</h5>
            <?php if (!empty($allArticles)) {
                foreach ($allArticles as $cle => $elements) { ?>
                    <div class="all_articles">
                        <a href="index.php?action=articles&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
            <?php }
        } ?>
    </section>
</section>