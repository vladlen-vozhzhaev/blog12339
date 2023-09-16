<?php
    session_start();
    $path = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    $mysqli = new mysqli('127.0.0.1', 'root', '',  'blog12339');
    require_once('php/classes/User.php');
    require_once('php/classes/Blog.php');
    $content =  "Страница не существует 404";
    if($path == "/login" && $method=='GET'){
        $content = file_get_contents('views/login.html');
    }else if($path == "/login"  && $method=='POST'){
        exit(User::handlerLogin());
    }else if($path == "/reg" && $method=='GET'){
        $content = file_get_contents('views/reg.html');
    }else if($path == "/reg" && $method=='POST'){
        exit(User::handlerReg());
    }else if ($path == "/"){
        $content = file_get_contents('views/mainPage.html');
    }else if($path == '/profile'){
        $content = file_get_contents('views/profile.html');
    }else if($path == '/getCurrentUser'){
        exit(User::getCurrentUser());
    }else if($path == '/uploadUserAvatar'){
        exit(User::uploadUserAvatar());
    }else if($path == '/addArticle' && $method == 'GET'){
        $content = file_get_contents('views/addArticle.html');
    }else if($path == '/addArticle' && $method == 'POST'){
        exit(Blog::addArticle());
    }
    require_once 'views/template.php';