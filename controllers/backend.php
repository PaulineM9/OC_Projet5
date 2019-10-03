<?php
function AutoLoad($class)
{
    require 'models/' . $class . '.php';
}
spl_autoload_register('AutoLoad');

function admin()
{
    ob_start();
    include('views/backend/adminView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_article()
{
    // $sessionConnect = sessionConnect();

    // get an article and modifie it
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
    // $sessionConnect = sessionConnect();

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

        header('Location: index.php?action=update_article&id=' . $_GET['id']);
        exit();
    }

    ob_start();
    include('views/backend/updateArticleView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_portrait()
{
    // $sessionConnect = sessionConnect();

    // get an portrait and modifie it
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
    // $sessionConnect = sessionConnect();

    // get article title and content 
    $portraitManager = new PortraitsManager(); 
    $portraits = $portraitManager->get($_GET['id']); 

    // add changes on an article
    if (isset($_POST['title']) or isset($_POST['content'])) {
        $portraits = new Portraits([
            'id' => $_GET['id'],
            'title'  => $_POST['title'],
            'content' => $_POST['content']
        ]);
        $portraitManager = new PorletraitsManager();
        $portraitManager->update($portraits);

        header('Location: index.php?action=update_portrait&id=' . $_GET['id']);
        exit();
    }

    ob_start();
    include('views/backend/updatePortraitView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}


function admin_projet()
{
    ob_start();
    include('views/backend/projetView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_comments()
{
    ob_start();
    include('views/backend/commentsView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_messages()
{
    ob_start();
    include('views/backend/messagesView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_profil()
{
    ob_start();
    include('views/backend/profilView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}
