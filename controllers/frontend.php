<?php
function home()
{
    $projectManager = new ProjectsManager();
    $projects = $projectManager->getList();

    ob_start();
    include('views/frontend/indexView.php');
    $content = ob_get_clean();
    require("views/frontend/template.php");
}

function services()
{
    ob_start();
    include('views/frontend/servicesView.php');
    $content = ob_get_clean();
    require("views/frontend/template.php");
}

function about()
{
    ob_start();
    include('views/frontend/aboutView.php');
    $content = ob_get_clean();
    require("views/frontend/template.php");
}

function portfolio()
{
    // get projects
    $projectManager =  new ProjectsManager();
    $projects = $projectManager->getList();

    ob_start();
    include('views/frontend/portfolioView.php');
    $content = ob_get_clean();
    require("views/frontend/template.php");
}

function contact()
{
    ob_start();
    include('views/frontend/contactView.php');
    $content = ob_get_clean();
    require("views/frontend/template.php");
}

function blog()
{
    // get articles
    $articleManager = new ArticlesManager();
    $articles = $articleManager->getLastOneArticle();
    $tree_articles = $articleManager->getLastTreeArticles();

    // get portraits
    $portraitManager = new PortraitsManager();
    $portraits = $portraitManager->getLastOnePortrait();
    $tree_portraits = $portraitManager->getLastTreePortraits();

    ob_start();
    include('views/frontend/indexBlogView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}

function blogArticles()
{
    $articleManager = new ArticlesManager();
    $allArticles = $articleManager->getAllArticles();
    $article = $articleManager->get($_GET['id']); 

    // create a comment about an article
    if (isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['content']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['content'])) 
    {
        $comment = new CommentsArticles([
            $_GET['id'],
            $_POST['pseudo'],
            $_POST['mail'],
            $_POST['content'],
        ]);
        $commentArticle = new CommentsArticlesManager();
        $commentArticle->getAdd($comment);
        
        header('Location: index.php?action=articles&id=' . $_GET['id']);
        exit();
    }

    // get all comments about an article clicked 
    $commentArticle = new CommentsArticlesManager();
    $commentedArticle = $commentArticle->getArticleComment($_GET['id']);

    // signal a comment to the administration
    if (isset($_GET['signaled'])) {
        $comments = new CommentsArticles([
            'id' => $_GET['idComment']
        ]);
        $commentArticle->getSignal($comments);

        $message = "Ce commentaire a été signalé à l'administrateur";
    }

    ob_start();
    include('views/frontend/articlesView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}

function blogPortraits()
{
    $portraitManager = new PortraitsManager();
    $allPortraits = $portraitManager->getAllPortraits();
    $portrait = $portraitManager->get($_GET['id']);

    // create a comment about a portrait 
    if (isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['content']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['content'])) 
    {
        $comment = new CommentsPortraits([
            $_GET['id'],
            $_POST['pseudo'],
            $_POST['mail'],
            $_POST['comment'],
        ]);
        $commentPortrait = new CommentsPortraitsManager();
        $commentPortrait->getAdd($comment);
        
        header('Location: index.php?action=portraits&id=' . $_GET['id']);
        exit();
    }

    // get all comments about a portrait clicked 
    $commentPortrait = new CommentsPortraitsManager();
    $commentedPortrait = $commentPortrait->getPortraitComment($_GET['id']);

    // signal a comment to the administration
    if (isset($_GET['signaled'])) {
        $comments = new CommentsPortraits([
            'id' => $_GET['idComment']
        ]);
        $commentPortrait->getSignal($comments);

        $message = "Ce commentaire a été signalé à l'administrateur";
    }

    ob_start();
    include('views/frontend/portraitsView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}

function login()
{
    // connexion to the administration space
    if (!empty($_POST)) {
        $validation = true;

        $profil = new User([
            'identifiant' => $_POST['identifiant'],
        ]);
        $profilAcount = new UserManager();
        $profilManager = $profilAcount->getConnect($profil);

        $passwordCorrect = password_verify($_POST['password'], $profilManager->getPassword());

        $_SESSION['flash']['danger'] = '';

        if ($profilManager === false) {
            $validation = false;
        }

        if (!$passwordCorrect) {
            $validation = false;
        }

        if ($validation === true) {
            $_SESSION['user'] = $profilManager->getId();
            $_SESSION['identifiant'] = $profilManager->getIdentifiant();
            $_SESSION['email'] = $profilManager->getEmail();
            $_SESSION['password'] = $profilManager->getPassword();

            header('Location: index.php?action=admin');
            exit();
        } else {
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "L'identifiant ou le mot de passe est incorrect." . '<br/>';
        }
    }

    ob_start();
    include('views/frontend/loginView.php');  
    $content = ob_get_clean();
    require("views/frontend/template.php");
}
