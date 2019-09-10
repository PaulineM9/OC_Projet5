<?php 
function home()
{   
    ob_start();
    include('views/frontend/indexView.php');
    $content = ob_get_clean();
    require("views/frontend/template.php");
}