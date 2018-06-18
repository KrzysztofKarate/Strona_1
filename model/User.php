<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 18.06.18
 * Time: 21:36
 */

namespace model;
use database\DB;

class User
{
    private static $tableName = "users";

    private $id;
    private $name;
    private $surname;

    public function __construct($array, $id = null){
        $this->fill($array);
        $this->id = $id;
    }

    private function fill($array){
        $this->name = $array['name'];
        $this->surname = $array['surname'];
    }

    public static function getCreateTableSql() {
        $sql = "CREATE TABLE IF NOT EXISTS " . self::$tableName . " (";
        $sql .= " id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
        $sql .= " name VARCHAR(50) NOT NULL,";
        $sql .= " surname VARCHAR(50) NOT NULL";
        $sql .= ")";
        return $sql;
    }

    public static function getAll() {
        return DB::query("SELECT * FROM " . self::$tableName);
    }

    public function save(){
        if($this->id == null){
            $params = $this->asArray();
            unset($params['id']);
            DB::execute($this->getInsertSql(), $params);
        }else{
            DB::execute($this->getUpdateSql(), $this->asArray());
        }
    }

    public function asArray(){
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname
        );
    }

    private function getInsertSql(){
        $sql = "INSERT INTO " . self::$tableName;
        $sql .= " (name, surname) ";
        $sql .= "VALUES ( :name, :surname)";
        return $sql;
    }

    private function getUpdateSql(){
        $sql = "UPDATE " . self::$tableName .  " SET ";
        $sql .= " name = :name";
        $sql .= ", surname = :surname";
        return $sql;
    }
}