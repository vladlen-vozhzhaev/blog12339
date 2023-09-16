<?php include 'php/header.php' ?>
    <div class="container">
        <h1 class="my-3 text-center">Добавить статью</h1>
        <div class="mx-auto col-sm-6">
            <form action="/php/handlerAddArticle.php" method="post">
                <div class="mb-3">
                    <input name="title" type="text" class="form-control" placeholder="Заголовок">
                </div>
                <div class="mb-3">
                    <textarea name="content" class="form-control" placeholder="Контетн"></textarea>
                </div>
                <div class="mb-3">
                    <input name="author" type="text" class="form-control" placeholder="Автор">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Добавить статью">
                </div>
            </form>
        </div>
    </div>
<?php include 'php/footer.php'?>