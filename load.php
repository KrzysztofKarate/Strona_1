<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 20:07
 */

spl_autoload_register(function ($className){
    $fullName = str_replace('\\', '/', $className);
    $fullName .= '.php';

    if(file_exists($fullName)){
        require_once($fullName);
    }else throw new Exception("Missing file.");
});