<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/News.php';

$article = new News();
$article->getAllNews()[$_GET['id']];

$view = new View();
$view->assign('article', $article);
$view->display(__DIR__ . '/templates/articleTemplate.php');