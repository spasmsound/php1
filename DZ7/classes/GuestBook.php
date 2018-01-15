<?php
include __DIR__ . '/GuestBookRecord.php';
class GuestBook
{
    protected $path;
    protected $data;

    public function __construct()
    {
        $this->path = __DIR__ . '/../data/guest.txt';
        $this->load();
    }

    public function load()
    {
        $this->data = [];
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }
    }

    public function getAllRecords()
    {
        return $this->data;
    }

    public function add($record)
    {
        $this->data[] = $record;
    }

    public function save() {
        $lines = [];
        foreach ($this->data as $record) {
            $lines[] = $record->getMessage();
        }
        file_put_contents($this->path, implode(PHP_EOL, $lines));
    }
}