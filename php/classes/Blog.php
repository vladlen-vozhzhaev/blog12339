<?php
    class Blog{
        // Добавление статьи
        public static function addArticle(){
            global $mysqli;
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title','$content','$author')");
            header("Location: /");
        }
        // Удаление статьи
        public static function deleteArticle($articleId){
            global $mysqli;
            $mysqli->query("DELETE FROM `articles` WHERE id = '$articleId'");
            header("Location: /");
        }
        // Редактирование статьи
        public static function editArticle($articleId){
            global $mysqli;
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $mysqli->query("UPDATE `articles` SET `title`='$title',`content`='$content',`author`='$author' WHERE id='$articleId'");
            header("Location: /blog/$articleId");
        }
        // Отдать все статьи в формате JSON
        public static function getArticles(){
            global $mysqli;
            $result = $mysqli->query("SELECT * FROM articles");
            $articles = [];
            while (($row = $result->fetch_assoc()) != null){
                $articles[] = $row;
            }
            return json_encode($articles);
        }
        // Отдать одну статью по ID
        public static function getArticle(){
            global $mysqli;
            $articleId = $_POST['id'];
            $result = $mysqli->query("SELECT * FROM articles WHERE id = '$articleId'");
            $row = $result->fetch_assoc();
            return json_encode($row);
        }
    }