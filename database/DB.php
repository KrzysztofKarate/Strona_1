<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 20:22
 */

namespace database;

class DB {
    private static $db;

    public static function set($db){
        self::$db = $db;
    }

    public static function query($command, $params = null){
        return self::$db->query($command, $params);
    }

    public static function execute($command, $params = null){
        return self::$db->execute($command, $params);
    }

    public static function seed(){
        return self::$db->seed();
    }
}