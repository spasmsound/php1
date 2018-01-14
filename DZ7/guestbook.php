<?php
include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/GuestBook.php';
$view = new View;
$guestBook = new GuestBook();
$view->assign('guestBook', $guestBook);
$view->display(__DIR__ . '/templates/guestbook.php');