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

<?php foreach($news as $article ) { ?>
    <article>
        <h1><a href="/php1/DZ8/article.php?id=<?php echo $article['id']; ?>"><?php echo $article['Title']; ?></a></h1>
        <p><?php echo $article['Text']; ?></p>
        <p>Автор: <?php echo $article['Author']; ?></p>
        <hr>
    </article>
<?php } ?>

</body>
</html>