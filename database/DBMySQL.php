<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 20:22
 */

namespace database;

use model\User;

class DBMySQL
{
    private $config;
    private $pdo;

    public function __construct($config, $build = false){
        $this->config = $config;

        $this->pdo = new \PDO("mysql:host=$config[server]", $config['username'], $config['password']);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        if($build) $this->pdo->query("CREATE DATABASE IF NOT EXISTS $config[name] DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci");
        $this->pdo->query("use $config[name]");
        if($build) $this->buildTables();
    }

    public function query($sql, $params = null){
        $result = null;
        if($params == null){
            $result = $this->pdo->query($sql);
        }else{
            $result = $this->pdo->prepare($sql);
            $result->execute($params);
        }
        return $result->fetchAll();
    }

    public function execute($sql, $params = null){
        if($params == null){
            $this->pdo->query($sql);
        }else{
            $result = $this->pdo->prepare($sql);
            $result->execute($params);
        }
    }

    private function buildTables(){
        $this->execute(User::getCreateTableSql());
    }

    public function seed(){

    }
}