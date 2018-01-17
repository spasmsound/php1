<?php

class DB
{

    protected $dsn;
    protected $dbh;
    protected $data;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=test';
        $this->dbh = new PDO($this->dsn, 'root', 'php1');
    }

    public function execute(string $sql)
    {
        if($this->dbh->prepare($sql)) {
            return true;
        }else return false;
    }

}