<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 18.06.18
 * Time: 21:51
 */
use database\DBMySQL;
use database\DB;

DB::set(new DBMySQL(include("db_config.php"), true));