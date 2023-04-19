<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className){
    $path = "classes/";
    $extension = ".class.php";
    $className = str_replace("\\", "/", $className);
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}