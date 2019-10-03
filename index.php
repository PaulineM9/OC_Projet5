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
    if ($_GET['action'] == 'contact') {
        contact();
    }
    if ($_GET['action'] == 'blog') {
        blog();
    }
    if ($_GET['action'] == 'articles') {
        blogArticles();
    }
    if ($_GET['action'] == 'portraits') {
        blogPortraits();
    }
    if ($_GET['action'] == 'admin') {
        admin();
    }
    if ($_GET['action'] == 'admin_article') {
        admin_article();
    }
    if ($_GET['action'] == 'update_article') {
        update_article();
    }
    if ($_GET['action'] == 'admin_portrait') {
        admin_portrait();
    }
    if ($_GET['action'] == 'update_portrait') {
        update_portrait();
    }
    if ($_GET['action'] == 'admin_projet') {
        admin_projet();
    }
    if ($_GET['action'] == 'admin_comments') {
        admin_comments();
    }
    if ($_GET['action'] == 'admin_messages') {
        admin_messages();
    }
    if ($_GET['action'] == 'admin_profil') {
        admin_profil();
    }
} else {
    home();
}
