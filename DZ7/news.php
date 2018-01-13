<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/News.php';
$view = new View();
$news = new News();
$view->assign('news', $news);
$view->display(__DIR__ . '/templates/newsTemplate.php');