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