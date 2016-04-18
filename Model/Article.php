<?php

class Article
{
    /* @var string */
    private static $table_name='article';

    /**
     * @param  int $id
     * @return array
     */
    public static function find($id) {
        return DB::select(self::$table_name, array('id' => $id), 1);
    }

    /**
     * @param  array  $where [description]
     * @return array
     */
    public static function findAll($where = array()) {
        return DB::select(self::$table_name, $where);
    }

    /**
     * @param  array
     * @return boolean
     */
    public static function create($values) {
        return DB::insert(self::$table_name, $values);
    }

    /**
     * @param  int $id
     * @param  array $values
     * @return boolean
     */
    public static function update($id, $values) {
        return DB::update(self::$table_name, $id, $values);
    }

    /**
     * @param  int $id
     * @return boolean
     */
    public static function delete($id) {
        return DB::delete(self::$table_name, $id);
    }
}
