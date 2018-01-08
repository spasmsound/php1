<?php

class GuestBook
{
        public $path;
        protected $data;

        public function __construct($path)
        {
            $this->path = $path;
            $this->data = file($path, FILE_IGNORE_NEW_LINES);
        }

        public function getData() {
            return $this->data;
        }

        public function append($text) {
            $this->data[] = $text;
        }

        public function save() {
            file_put_contents($this->path, implode(PHP_EOL, $this->data));
        }
}
