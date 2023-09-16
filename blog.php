<?php
    $articleId = $_GET['id'];
    $mysqli = new mysqli('127.0.0.1', 'root', '',  'blog12339');
    $result = $mysqli->query("SELECT * FROM articles WHERE id = '$articleId'");
    $article = $result->fetch_assoc();
    include 'php/header.php';
?>
    <div class="container">
        <h1><?= $article['title'] ?></h1>
        <div><?= $article['content'] ?></div>
        <p>Автор: <?= $article['author'] ?></p>
    </div>
<?php
    include "php/footer.php";
?>