<?php

use Models\User;
use Models\Articles;
use Models\Projects;
use Models\Portraits;
use Models\PortraitsManager;
use Models\UserManager;
use Models\ArticlesManager;
use Models\ProjectsManager;
use Models\CommentsArticles;
use Models\CommentsPortraits;
use Models\CommentsArticlesManager;
use Models\CommentsPortraitsManager;

function signIn()
{
    // get inscription for administration
    if (isset($_POST['submit'])) {
        $validation = true;

        $identifiantAdmin = htmlspecialchars($_POST['identifiant']);
        $emailAdmin = htmlspecialchars($_POST['email']);
        $passwordAdmin = htmlspecialchars($_POST['password']);
        $checkPassword = htmlspecialchars($_POST['check_password']);
        $regex_letters = preg_match("#[A-Z]{1,}#", $passwordAdmin);
        $regex_specials = preg_match("#[\#\.\!\$\(\)\[\]\{\}\?\+\=\*\|]{1}#", $passwordAdmin);

        $acount = new UserManager();
        $newAcount = $acount->verifyUser();
        $_SESSION['flash']['danger'] = '';

        if ($newAcount != false) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Un compte administrateur a déjà été créé. Merci de contacter l'auteur." . '<br/>';
        }

        if (strlen($passwordAdmin) < 6) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Mot de passe < 6 caractères." . '<br/>';
        }

        if ($passwordAdmin != $checkPassword) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Les mots de passe ne correspondent pas." . '<br/>';
        }

        if (!$regex_specials or !$regex_letters) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Votre mot de passe doit contenir au moins 6 caractères, 1 majuscule et 1 caractère spécial." . '<br/>';
        }

        if ($validation) {
            $pass_hache = password_hash($passwordAdmin, PASSWORD_DEFAULT);

            $profil = new User([
                'identifiant' => $identifiantAdmin,
                'email' => $emailAdmin,
                'password' => $pass_hache
            ]);

            $profilManager = new UserManager();
            $profilManager->getInscription($profil);
            $_SESSION['flash']['succes'] = $_SESSION['flash']['danger'] . "Votre compte administrateur a bien été  créé." . '<br/>';

            header('Location: index.php?action=login');
            exit();
        }
    }

    include("signIn.php");
}

function admin()
{
    $sessionConnect = sessionConnect();

    ob_start();
    include('views/backend/adminView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_article()
{
    $sessionConnect = sessionConnect();

    // get articles
    $articleManager = new ArticlesManager();
    $articles = $articleManager->getList();

    // get all informations about new articles
    if (isset($_POST['title']) && isset($_POST['content']) && !empty($_POST['title']) && !empty($_POST['content'])) {
        $articles = new Articles([
            'title' => $_POST['title'],
            'content' => $_POST['content']
        ]);
        $articleManager->addArticle($articles);

        header('Location: index.php?action=admin_article');
        exit();
    }

    // count articles into the table
    $nbArticle = $articleManager->getCount();
    $nbArt = $nbArticle;
    $perPage = 4;
    $nbPage = ceil($nbArt / $perPage);

    // pagination
    if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $nbPage) {
        $cPage = $_GET['p'];
    } else {
        $cPage = 1;
    }

    $perPage2 = (($cPage - 1) * $perPage);

    // article for pagination
    $articles = $articleManager->getArticleForPagination($perPage2, $perPage);

    ob_start();
    include('views/backend/articleView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function update_article()
{
    $sessionConnect = sessionConnect();

    // get article title and content 
    $articleManager = new ArticlesManager(); 
    $articles = $articleManager->get($_GET['id']); 

    // add changes on an article
    if (isset($_POST['title']) or isset($_POST['content'])) {
        $articles = new Articles([
            'id' => $_GET['id'],
            'title'  => $_POST['title'],
            'content' => $_POST['content']
        ]);
        $articleManager = new ArticlesManager();
        $articleManager->update($articles);

        header('Location: index.php?action=admin_article&id=' . $_GET['id']);
        exit();
    }

    ob_start();
    include('views/backend/updateArticleView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_portrait()
{
    $sessionConnect = sessionConnect();

    // get portraits
    $portraitManager = new PortraitsManager();
    $portraits = $portraitManager->getList();

    // get all informations about new portraits
    if (isset($_POST['title']) && isset($_POST['content']) && !empty($_POST['title']) && !empty($_POST['content'])) {
        $portraits = new Portraits([
            'title' => $_POST['title'],
            'content' => $_POST['content']
        ]);
        $portraitManager->addPortrait($portraits);

        header('Location: index.php?action=admin_portrait');
        exit();
    }

    // count articles into the table
    $nbPortrait = $portraitManager->getCount();
    $nbPort = $nbPortrait;
    $perPage = 4;
    $nbPage = ceil($nbPort / $perPage);

    // pagination
    if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $nbPage) {
        $cPage = $_GET['p'];
    } else {
        $cPage = 1;
    }

    $perPage2 = (($cPage - 1) * $perPage);

    // portrait for pagination
    $portraits = $portraitManager->getPortraitForPagination($perPage2, $perPage);

    ob_start();
    include('views/backend/portraitView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function update_portrait()
{
    $sessionConnect = sessionConnect();

    // get portrait title and content 
    $portraitManager = new PortraitsManager(); 
    $portraits = $portraitManager->get($_GET['id']); 

    // add changes on an portrait
    if (isset($_POST['title']) or isset($_POST['content'])) {
        $portraits = new Portraits([
            'id' => $_GET['id'],
            'title'  => $_POST['title'],
            'content' => $_POST['content']
        ]);
        $portraitManager = new PortraitsManager();
        $portraitManager->update($portraits);

        header('Location: index.php?action=admin_portrait&id=' . $_GET['id']);
        exit();
    }

    ob_start();
    include('views/backend/updatePortraitView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}


function admin_project()
{
    $sessionConnect = sessionConnect();

    // get projects
    $projectManager =  new ProjectsManager();
    $projects = $projectManager->getList();

    // get all informations about new portraits
    if (isset($_POST['title']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['link']) && !empty($_POST['title']) && !empty($_POST['image']) && !empty($_POST['description']) && !empty($_POST['link'])) {
        $projects = new Projects([
            'title' => $_POST['title'],
            'image' => $_POST['image'],
            'description' => $_POST['description'],
            'link' => $_POST['link'],
        ]);
        $projectManager =  new ProjectsManager();
        $projectManager->addProject($projects);

        header('Location: index.php?action=admin_projet');
        exit();
    }

    ob_start();
    include('views/backend/projectView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_comments()
{
    $sessionConnect = sessionConnect();
    /*----- ARTICLES -----*/
    // join tables for getting all comments and article title 
    $commentArticleManager = new CommentsArticlesManager();
    $commentArticle = $commentArticleManager->getListAllArticles();

    // get all comments with signal alert about articles
    $commentArticleSigManager = new CommentsArticlesManager();
    $commentArticleSignaled = $commentArticleSigManager->getListSignaled();

    // delete comments about articles
    if (isset($_GET['delete_article'])) {
        $commentsDelete = new CommentsArticles([
            'id' => $_GET['id']
        ]);
        $commentsArticleManager = new CommentsArticlesManager();
        $commentsArticleManager->getDelete($commentsDelete);

        header('Location: index.php?action=admin_comments');
        exit();
    }

    /*----- PORTRAITS -----*/
    // join tables for getting all comments and portrait title 
    $commentPortraitManager = new CommentsPortraitsManager();
    $commentPortrait = $commentPortraitManager->getListAllPortraits();

    // get all comments with signal alert about portraits
    $commentPortraitSigManager = new CommentsPortraitsManager();
    $commentPortraitSignaled = $commentPortraitSigManager->getListSignaled();

    // delete comments about portraits
    if (isset($_GET['delete_portrait'])) {
        $commentsDelete = new CommentsPortraits([
            'id' => $_GET['id']
        ]);
        $commentsPortraitManager = new CommentsPortraitsManager();
        $commentsPortraitManager->getDelete($commentsDelete);

        header('Location: index.php?action=admin_comments');
        exit();
    }

    ob_start();
    include('views/backend/commentView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_profil()
{
    $sessionConnect = sessionConnect();

    // get new inscription for administration
    if (isset($_POST['submit'])) {
        $validation = true;

        $identifiantAdmin = htmlspecialchars($_POST['identifiant']);
        $emailAdmin = htmlspecialchars($_POST['email']);
        $passwordAdmin = htmlspecialchars($_POST['password']);
        $checkPassword = htmlspecialchars($_POST['check_password']);
        $regex_letters = preg_match("#[A-Z]{1,}#", $passwordAdmin);
        $regex_specials = preg_match("#[\#\.\!\$\(\)\[\]\{\}\?\+\=\*\|]{1}#", $passwordAdmin);

        $acount = new UserManager();
        $newAcount = $acount->verifyUser();
        
        if ($newAcount == false) {
            throw new Exception();
        }

        $_SESSION['flash']['danger'] = '';
        $_SESSION['flash']['succes'] = '';

        if (strlen($passwordAdmin) < 6) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Mot de passe < 6 caractères." . '<br/>';
        }

        if ($passwordAdmin != $checkPassword) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Les mots de passe ne correspondent pas." . '<br/>';
        }

        if (!$regex_specials or !$regex_letters) {
            $validation = false;
            $_SESSION['flash']['danger'] = $_SESSION['flash']['danger'] . "Votre mot de passe doit contenir au moins 6 caractères, 1 majuscule et 1 caractère spécial." . '<br/>';
        }

        if ($validation) {
            $pass_hache = password_hash($passwordAdmin, PASSWORD_DEFAULT);

            $profil = new User([
                'id' => $_GET['id'],
                'identifiant'  => $_POST['identifiant'],
                'email' => $_POST['email'],
                'password' => $pass_hache
            ]);
            $profilAcount = new UserManager();
            $profilAcount->getChanges($profil);

            $_SESSION['flash']['succes'] = $_SESSION['flash']['succes'] . "Vos informations personnelles ont bien été modifiées." . '<br/>';
            $_SESSION['flash']['succes'] = $_SESSION['flash']['succes'] . 'Merci de vous reconnecter:' . '<a href="index.php? action=login" style="text-decoration: underline;">Nouvelle connexion</a>' . '<br/>';
            unset($_SESSION['user']);
            session_destroy();
        }
    }  

    ob_start();
    include('views/backend/profilView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");

}

function logout()
{
    unset($_SESSION['user']);
    session_destroy();
    header('location: index.php?action=login');
    exit();
}

function sessionConnect()
{
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?action=login');
        exit();
    }
}
