<?php
//LESSON 11
//this declares that we are using strict types
declare(strict_types=1);
include "includes/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <?php
                /* Methods
    By using type declarations, we can throw an error if wrong type is given!
    Works with:
            - class/interface namespace
            - self (used to reference to same class)
            - array
            - callable
            - boolean
            - float
            - int
            - string
            - iterable
            - object*/
            class Person {
                public $name;
                public $eyeColor;
                public $age;
            
                //we are enforcing $newName to be a string if not error will show
                public function setName(string $newName) {
                    $this->name = $newName;
            }

            public function getName() {
                return $this->name;
                }
            }
    
    $person1 = new Person();

    try {
        $person1->setName("Bryan");//line 37 ensures we use string-type safety
        //$person1->setName(2);//error not a string
        echo $person1->getName();
    } catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
        }

?>
    
</body>
</html>

