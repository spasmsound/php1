<?php

include __DIR__ . '/Article.php';
class News
{

    protected $data;
    protected $path;

    public function __construct()
    {
        $this->path = __DIR__ . '/../data/news.txt';
        $this->load();
    }

    public function load() {
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        $this->data = [];
        foreach ($lines as $key => $line) {
            [$title, $article] = explode('###', $line);
            $this->data[] = new Article($title, $article);
        }
    }

    public function getAllNews() {
        return $this->data;
    }
}