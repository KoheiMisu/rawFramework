<?php

Class BaseModel {

    /* @var PDO　*/
    private $pdo;

    private $conf = [
        'host' => 'localhost',
        'db' => 'practice',
        'user' => 'root',
        'password' => '1212',
        'charset' => 'utf8'
    ];


    //コンストラクタをprivateにするのが肝
    private function __construct()
    {
        $dsn = "mysql:host={$this->conf['host']};dbname={$this->conf['db']};charset={$this->conf['charset']};";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        $this->pdo = new PDO($dsn, $this->conf['user'], $this->conf['password'], $options);
    }

    //外部からインスタンスを呼び出したい場合のメソッド
    final public static function getInstance()
    {
        static $instance;
        return $instance ?: $instance = new self;
    }

    //クローンを禁止する
    final public function __clone()
    {
        throw new Exception("this instance is singleton class.");
    }
}
