<?php

class Uploader
{
    public $name;
    public function __construct($name)
    {
        $this->name = $_FILES['myfile'];
    }

    public function isUploaded() {
        if (isset($_FILES['myfile'])) {
            if (0 == $_FILES['myfile']['error']) {
                if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
                    return true;
                }
            }
        }
    }

    public function Upload() {
        if (true == $this->isUploaded()) {
            copy(
                $_FILES['myfile']['tmp_name'],
                __DIR__ . '/../files/' . $_FILES['myfile']['name']
            );
        }
    }
}