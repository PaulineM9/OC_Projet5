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
    if ($_GET['action'] == 'about') {
        about();
    }
    if ($_GET['action'] == 'portfolio') {
        portfolio();
    }
    if ($_GET['action'] == 'blog') {
        blog();
    }
    if ($_GET['action'] == 'contact') {
        contact();
    }

} else {
    home();
}
