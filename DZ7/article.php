<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/News.php';

$article = (new News())->getAllNews()[$_GET['id']];


$view = new View();
$view->assign('article', $article)->display(__DIR__ . '/templates/article.php');