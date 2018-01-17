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
        foreach ($lines as $key => $value) {
            $key = $key + 1;//айди новости должен начаться с единицы
            $newsContent = explode('###', $value);
            $this->data[$key] = new Article($newsContent[0], $newsContent[1]);
        }
    }

    public function getAllNews() {
        return $this->data;
    }
}