<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/DB.php';

if (empty($_GET['id'])) {
    die;
}
$dataBase = new DB;
$article = $dataBase->query('SELECT * FROM news WHERE id=:id', [':id' => $_GET['id']]);

$view = new View();
$view->assign('article', $article)->display(__DIR__ . '/templates/article.php');