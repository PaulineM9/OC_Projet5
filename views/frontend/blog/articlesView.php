<?php $title = 'SUPER! Le Blog' ?>

<section class="nav_articles">
    <section class="show_article">
        <div class="article_container">
            <h2><?= $article->getTitle() ?></h2><br/>
            <h3>Publié le <?= $article->getDateArticle() ?></h3><br/>
            <p><?= $article->getContent() ?></p><br/>
        </div>

        <div class="comments"></div>
            <section class="comments_article">
                <h3>COMMENTAIRES</h3>
                <div class="comment_container">
                    <div class="signal_message">
                        <?php if(isset($_SESSION)) :
                            include('views/flashMessages.php');
                        endif; ?>  
                    </div> 
                    <?php if (!empty($commentedArticle)) :
                        foreach ($commentedArticle as $cle => $elements) : ?>
                            <p>Publié le <?= $elements->getDateComment() ?> Par <?= $elements->getPseudo() ?> (<a href="index.php?action=articles&id=<?= $article->getId() ?>&idComment=<?= $elements->getId() ?>&signaled" class="signal">Signaler</a>): </p><br/> 
                            <p class="comment_published"><?= $elements->getContent() ?><br />                  
                        <?php endforeach;                   
                    endif; ?> 
                </div>
                <hr>    
            </section>
            
            <section class="create_comments_article">
                <h3>Postez votre commentaire</h3>
                <h4>Faites nous part de vos <strong>expériences</strong>, de vos remarques ou posez-moi vos questions en lien avec cet article</h4>
                <form class="comments_form" action="index.php?action=articles&id=<?= $_GET['id'] ?>" method="post">
                    <input class="pseudo" type="text" name="pseudo" placeholder="Pseudo" id="pseudo" required>
                    <span class="error-message"></span><br/>
                    <input class="mail" type="email" name="mail" placeholder="Email" id="mail" required>
                    <span class="error-message"></span><br/>
                    <textarea class="content" name="content" placeholder="Votre commentaire" id="content" cols="30" rows="10" required></textarea><br/>
                    <input class="submit" type="submit" name="submit" placeholder="Envoyer" id="submit"><br/>
                </form> 
            </section>
        </div>
    </section>

    <section class="all_articles_list">
        <h5>Archives des articles</h5>
            <?php if (!empty($allArticles)):
                foreach ($allArticles as $cle => $elements): ?>
                    <div class="all_articles">
                        <a href="index.php?action=articles&id=<?= $elements->getId() ?>">
                            <h3>- <?= $elements->getTitle() ?></h3>
                        </a>
                    </div>
                <?php endforeach;
        endif; ?>
    </section>
</section>