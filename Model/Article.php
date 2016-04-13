<?php

class Article
{
    /* @var string */
    private $name;

    public function __construct()
    {
        $this->name = mb_strtolower(get_class($this));
    }

    // 投稿全件取得
    public function getAllPost()
    {
        $sql = sprintf('SELECT * FROM %s', $this->name);
        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll();
        return $rows[0];
    }
}
