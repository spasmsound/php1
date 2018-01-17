
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Новости</h1>
<?php foreach ($news->getAllNews() as $key => $article) { ?>
    <article>
        <a href="/php1/DZ7/article.php?id=<?php echo $key?>"><?php echo $article->getTitle(); ?></a>
        <p><?php echo $article->getShortArticle() ?></p>
        <hr>
    </article>
<?php } ?>

</body>
</html>