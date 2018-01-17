<?php


class Article
{

    public $title;//заголовок
    public $article;//статья

    public function __construct($title, $article)
    {
        $this->title = $title;
        $this->article = $article;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function getShortArticle()
    {
        return mb_substr($this->article, 0, 60) . '...';
    }
}