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
        public static function deleteArticle(){

        }
        // Редактирование статьи
        public static function editArticle(){

        }
        // Отдать все статьи в формате JSON
        public static function getArticles(){

        }
        // Отдать одну статью по ID
        public static function getArticle(){

        }
    }