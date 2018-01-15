<?php
include __DIR__ . '/classes/GuestBook.php';
if (empty($_POST['newComment'])) {
    die;
}

$record = new GuestBookRecord($_POST['newComment']);
$guestBook = new GuestBook();
$guestBook->add($record);
$guestBook->save();
header('Location: /php1/DZ7/guestbook.php');