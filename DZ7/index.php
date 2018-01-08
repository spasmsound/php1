<?php
//подключить шаблон
include __DIR__ . '/templates/index.php';
include __DIR__ . '/classes/GuestBook.php';
include __DIR__ . '/classes/Uploader.php';
?>
<b>ЗАПИСИ ГОСТЕВОЙ КНИГИ:</b><br>
<?php
$GuestBook = new GuestBook(__DIR__ . '/data/guest.txt');

foreach ($GuestBook->getData() as $string) {
    echo $string . '<br>';
}
$GuestBook->append($_POST['text_comment']);
$GuestBook->save();
?>
<br>
<form name="comment" action="/" method="post" id="comment">
    <label>Добавить комментарий:</label>
    <br>
    <textarea name="text_comment" cols="30" rows="10"></textarea><br><br>
    <button type="submit" form="comment" value="Submit">Отправить</button>
</form>

<hr>

<p>Загружать на сервер можно только файлы формата JPEG или PNG!</p>
<form action="/" enctype="multipart/form-data" method="post">
    <input type="file" name="myfile"><br><br>
    <input type="submit" value="Отправить">

<?php
$uploader = new Uploader($_FILES['myfile']);
$uploader->isUploaded();
$uploader->Upload();
?>