<?php 
function admin()
{   
    ob_start();
    include('views/backend/admin.php');
    $content = ob_get_clean();
    require("views/backend/template.php");
}
