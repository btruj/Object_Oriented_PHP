

<?php
//LESSON 12 -YT Dani Krossing
// scope resolution operator(::)

//Here is the first class example
class FirstClass{
    //properties
    const EXAMPLE = "This is a constant-CANNOT CHANGE";

    //method
    public static function test(){
        $testing = "This is a test";
        return $testing;
    }
}

// $a = FirstClass::EXAMPLE;//outputs constant
// $b = FirstClass::test();//outputs function

// echo $a . "<br/>";
// echo $b;




//Here is the second class example
class SecondClass extends FirstClass{
    //properties
    public static $staticProperty = "a static property";

    //method
    public static function anotherTest(){
        echo parent::EXAMPLE;// parent meaning gets access from the parent class-FirstClass
        echo self::$staticProperty;//self meaning gets access from the same class that it is in
 }
}

$b = SecondClass::anotherTest();
echo $b;