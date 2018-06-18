<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 18.06.18
 * Time: 22:24
 */

namespace utils;


class UriManager
{
    private static $root = '';

    public static function prepare($root){
        self::$root = $root;
    }

    public static function getUrl($target){
        return self::$root . $target;
    }

    private static function getHeader($target){
        return 'Location: ' . self::getUrl($target);
    }

    public static function redirect($target){
        header(self::getHeader($target));
        die();
    }
}