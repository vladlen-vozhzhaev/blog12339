<?php
    session_start();
    $path = $_SERVER['REQUEST_URI'];
    $pathArr = explode("/", $path); // Делим по слешу и получаем массив
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
    }else if($path == '/getArticles'){
        exit(Blog::getArticles());
    }else if($path == '/logout'){
        exit(User::logout());
    }else if($pathArr[1] == 'blog' && $method == "GET"){
        $content = file_get_contents('views/blog.html');
    }else if($path == '/getArticle' && $method == "POST"){
        exit(Blog::getArticle());
    }else if($pathArr[1] == 'deleteArticle'){ // $pathArr = ['/', 'deleteArticle', '2'];
        exit(Blog::deleteArticle($pathArr[2]));
    }else if($pathArr[1] == 'editArticle' && $method == 'GET'){
        $content = file_get_contents('views/editArticle.html');
    }else if($pathArr[1] == 'editArticle' && $method == 'POST'){
        exit(Blog::editArticle($pathArr[2]));
    }
    require_once 'views/template.php';