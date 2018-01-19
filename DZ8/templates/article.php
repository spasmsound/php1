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

<article>
    <h1><?php echo $article[0]['Title']?></h1>
    <p><?php echo $article[0]['Text']?></p>
    <hr>
    <p>Автор: <?php echo $article[0]['Author']?></p>
</article>

</body>
</html>