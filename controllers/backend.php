<?php 
function admin()
{   
    ob_start();
    include('views/backend/adminView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_article()
{   
    ob_start();
    include('views/backend/articleView.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}

function admin_portrait()
{   
    ob_start();
    include('views/backend/portraitView.php');
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
