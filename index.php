<?php
require("controllers/frontend.php");
require("controllers/backend.php");

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        home();
    } 
    if ($_GET['action'] == 'services') {
        services();
    } 
} else {
    home();
}