<?php
// use Oc\Projet_5\Models\Articles;
use Oc\Projet_5\Models\ArticlesManager;
use Oc\Projet_5\Models\CommentsArticles;
use Oc\Projet_5\Models\CommentsArticlesManager;
use Oc\Projet_5\Models\CommentsPortraits;
use Oc\Projet_5\Models\CommentsPortraitsManager;
// use Oc\Projet_5\Models\Portraits;
use Oc\Projet_5\Models\PortraitsManager;
// use Oc\Projet_5\Models\Projects;
use Oc\Projet_5\Models\ProjectsManager;
use Oc\Projet_5\Models\User;
use Oc\Projet_5\Models\UserManager;
// use Oc\Projet_5\Models\Manager;

function home()
{
    $projectManager = new ProjectsManager();
    $projects = $projectManager->getList();

    ob_start();
    include('views/frontend/site/indexView.php');
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
}

function services()
{
    ob_start();
    include('views/frontend/site/servicesView.php');
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
}

function about()
{
    ob_start();
    include('views/frontend/site/aboutView.php');
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
}

function portfolio()
{
    // get projects
    $projectManager =  new ProjectsManager();
    $projects = $projectManager->getList();

    $i = 0;
    
    ob_start();
    include('views/frontend/site/portfolioView.php');
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
}

function contact()
{
    $e = array();
    $e['error'] = "Formulaire non valide";

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $e['email_invalide'] = "email_invalide";
    } else {
        $e['error'] = 'Ok';
        $nom = $_POST['firstname'];
        $prenom = $_POST['lastname'];
        $email = $_POST['email'];
        $object = $_POST['object'];
        $message = $_POST['content'];

        $to = 'contact.super.web@gmail.com';
        $sujet = ' Formulaire de contact From  '.$email;
        $msg = $message;
        mail($to, $sujet, $msg);
    }

echo json_encode($e);

    ob_start();
    include('views/frontend/site/contactView.php');
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
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
    include('views/frontend/blog/indexBlogView.php');
    $content = ob_get_clean();
    require("views/frontend/blog/blogTemplate.php");
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

        // $message = "Ce commentaire a été signalé à l'administrateur";
    }

    ob_start();
    include('views/frontend/blog/articlesView.php');
    $content = ob_get_clean();
    require("views/frontend/blog/blogTemplate.php");
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
    $_SESSION['flash']['danger'] = '';

    if (isset($_GET['signaled'])) {
        $comments = new CommentsPortraits([
            'id' => $_GET['idComment']
        ]);
        $commentPortrait->getSignal($comments);

        $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Ce commentaire a été signalé à l'administrateur.";
    }

    ob_start();
    include('views/frontend/blog/portraitsView.php');
    $content = ob_get_clean();
    require("views/frontend/blog/blogTemplate.php");
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

        $_SESSION['flash']['danger'] = '';

        if ($profilManager) {
            $passwordCorrect = password_verify($_POST['password'], $profilManager->getPassword());
        } else {
            $validation = false;
        }

        if (!$profilManager) {
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
    include('views/frontend/site/loginView.php');  
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
}

function mentions_legales()
{
    ob_start();
    include('views/frontend/site/mentionsLegalesView.php');  
    $content = ob_get_clean();
    require("views/frontend/site/template.php");
}
