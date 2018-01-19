<?php

class DB
{

    protected $dsn;
    protected $dbh;
    protected $cfg;

    public function __construct()
    {
        $this->cfg = require __DIR__ . '/../config/config.php';
        $this->dsn = 'mysql:host=' . $this->cfg['host'] . ';dbname=' . $this->cfg['dbname'] . ';charset=' . $this->cfg['code'];
        $this->dbh = new PDO($this->dsn, $this->cfg['login'], $this->cfg['password']);
    }

    public function execute(string $sql)
    {
        if ($this->dbh->prepare($sql)->execute()) {
            return true;
        }else return false;
    }

    public function query(string $sql, array $data = [])
    {
        $request = $this->dbh->prepare($sql);
        if ($request->execute($data)) {
            return $request->fetchAll();
        }else return false;
    }
}
