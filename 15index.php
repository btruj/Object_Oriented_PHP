<?php
//Lesson 15

//Regular class

include_once "classes/simpleclass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();

//Anonymous class- object gets deleted after use

$newObj = new class() {
    public function helloWorld() {
        echo "Hello World";
    }
};

$newObj->helloWorld();