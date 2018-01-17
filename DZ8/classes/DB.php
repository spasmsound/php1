<?php
$cfg = include __DIR__ . '/../config/config.php';
class DB
{

    protected $dsn;
    protected $dbh;
    protected $data;

    public function __construct()
    {
        $cfg = require __DIR__ . '/../config/config.php';
        $this->dsn = 'mysql:host=' . $cfg['host'] . ';dbname=' . $cfg['dbName'];
        $this->dbh = new PDO($this->dsn, $cfg['login'], $cfg['password']);
    }

    public function execute(string $sql)
    {
        if($this->dbh->prepare($sql)) {
            return true;
        }else return false;
    }
}