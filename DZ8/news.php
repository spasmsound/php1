<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/DB.php';
$view = new View();
$dataBase = new DB();

$news = $dataBase->query('SELECT id, Title, Text, Author FROM news ORDER BY id DESC');

$view->assign('news', $news);
$view->display(__DIR__ . '/templates/news.php');