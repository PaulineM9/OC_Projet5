<?php

session_start();

require("controllers/frontend.php");
require("controllers/backend.php");

function autoLoad($class)
{
    $class = str_replace('\\', '/', $class);
    $class = str_replace(__NAMESPACE__, strtolower(__NAMESPACE__), $class);

    require $class . '.php'; 
}
spl_autoload_register('autoLoad');

try {
    if (isset($_GET['action'])) {
    // FRONTEND
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
        if ($_GET['action'] == 'login') {
            login();
        } 
        if ($_GET['action'] == 'mentions_legales') {
            mentions_legales();
        } 
    // FRONTEND BLOG
        if ($_GET['action'] == 'blog') {
            blog();
        } 
        if ($_GET['action'] == 'articles') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                blogArticles();
            } else {
                throw new Exception();   
            }
        }
        if ($_GET['action'] == 'portraits') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                blogPortraits();
            } else {
                throw new Exception();   
            }
        } 
    // BACKEND
        if ($_GET['action'] == 'sign_in') {
            signIn();
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
            admin_project();
        } 
        if ($_GET['action'] == 'admin_comments') {
            admin_comments();
        }
        if ($_GET['action'] == 'admin_profil') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                admin_profil();
            } else {
                throw new Exception();   
            }
        } 
    } elseif (!isset($_GET['action'])) {
        throw new Exception();
    } elseif ($_GET['action'] != 'home' && $_GET['action'] != 'services' && $_GET['action'] != 'about' && $_GET['action'] != 'portfolio' && $_GET['action'] != 'home' &&
    $_GET['action'] != 'contact' && $_GET['action'] != 'login' && $_GET['action'] != 'mentions_legales' && $_GET['action'] != 'blog' && $_GET['action'] != 'articles' &&
    $_GET['action'] != 'portraits' && $_GET['action'] != 'sign_in' && $_GET['action'] != 'admin' && $_GET['action'] != 'admin_article' &&
    $_GET['action'] != 'admin_portrait' && $_GET['action'] != 'update_article' && $_GET['action'] != 'update_portrait' && $_GET['action'] != 'admin_projet' && 
    $_GET['action'] != 'admin_comments' && $_GET['action'] != 'admin_profil') {
        throw new Exception();
    } else {
        throw new Exception();
    }
}
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require("views/errorPage.php");
}
