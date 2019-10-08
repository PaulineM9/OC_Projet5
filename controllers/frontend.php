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

    ob_start();
    include('views/frontend/portraitsView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}
