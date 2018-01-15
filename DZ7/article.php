<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/News.php';

if (empty($_GET['id'])) {
    die;
}

$article = (new News())->getAllNews()[$_GET['id']];


$view = new View();
$view->assign('article', $article)->display(__DIR__ . '/templates/article.php');