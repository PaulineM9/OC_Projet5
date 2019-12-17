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
        elseif ($_GET['action'] == 'services') {
            services();
        } 
        elseif ($_GET['action'] == 'about') {
            about();
        } 
        elseif ($_GET['action'] == 'portfolio') {
            portfolio();
        } 
        elseif ($_GET['action'] == 'contact') {
            contact();
        } 
        elseif ($_GET['action'] == 'login') {
            login();
        } 
        elseif ($_GET['action'] == 'mentions_legales') {
            mentions_legales();
        } 
    // FRONTEND BLOG
        elseif ($_GET['action'] == 'blog') {
            blog();
        } 
        elseif ($_GET['action'] == 'articles') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {   
                blogArticles();
            } else {      
                throw new Exception();   
            }
        }
        elseif ($_GET['action'] == 'portraits') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                blogPortraits();
            } else {
                throw new Exception();   
            }
        } 
    // BACKEND
        elseif ($_GET['action'] == 'sign_in') {
            signIn();
        } 
        elseif ($_GET['action'] == 'admin') {
            admin();
        } 
        elseif ($_GET['action'] == 'admin_article') {
            admin_article();
        } 
        elseif ($_GET['action'] == 'update_article') {
            update_article();
        } 
        elseif ($_GET['action'] == 'admin_portrait') {
            admin_portrait();
        } 
        elseif ($_GET['action'] == 'update_portrait') {
            update_portrait();
        } 
        elseif ($_GET['action'] == 'admin_projet') {
            admin_project();
        } 
        elseif ($_GET['action'] == 'admin_comments') {
            admin_comments();
        }
        elseif ($_GET['action'] == 'admin_profil') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                admin_profil();
            } else {
                throw new Exception();   
            }
        } else {
            throw new Exception();
        }
    } else {
        home();
    }
}
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require("views/errorPage.php");
}
