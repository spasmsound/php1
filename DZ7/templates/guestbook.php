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

<h1>ГОСТЕВАЯ КНИГА</h1>

<?php
    foreach ($guestBook->getAllRecords() as $record) { ?>
        <article>
             <?php echo $record->getMessage() ?>
            <hr>
        </article>
    <?php }
?>

<form action="/php1/DZ7/addRecord.php" method="post">
    <label for="newCom">Добавить комментарий:</label>
    <input type="text" name="newComment" id="newCom">
    <input type="submit">
</form>

</body>
</html>