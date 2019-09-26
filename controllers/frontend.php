<?php 
function home()
{   
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
    ob_start();
    include('views/frontend/indexBlogView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}

function blogArticles()
{   
    ob_start();
    include('views/frontend/articlesView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}

function blogPortraits()
{   
    ob_start();
    include('views/frontend/portraitsView.php');
    $content = ob_get_clean();
    require("views/frontend/blogTemplate.php");
}