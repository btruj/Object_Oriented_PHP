<?php
 include "includes/person.inc.php";
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
 
// LESSON 6 - CONSTRUCTOR & DESTRUCTOR

$person1 = new Person("Daniel", "Blue", 28);

echo $person1->getName();//still runs because getName function is public even when property is private
//echo $person1->name;//error because it's private



// echo $person1->name;
// echo "<br>";
// echo $person1->eyeColor;
// echo "<br>";
// $person1->setName("John");
// echo $person1->name;




// LESSON 5

// $person1 = new Person();

// $person1->setName("Bryan");
// $person1->setEyeColor("Brown");
// $person1->setAge(32);

// echo $person1->name;
// echo "<br>";
// echo $person1->eyeColor;
// echo "<br>";
// echo $person1->age;


//  $person2 = new Person();

//  $person2->setName("John");
//  $person2->setEyeColor("Blue");
//  $person2->setAge(22);


//  echo $person2->name;
//  echo "<br>";
//  echo $person2->eyeColor;
//  echo "<br>";
//  echo $person2->age;


 


 //LESSON 4
 // $pet01= new Person();

    // echo $pet01->first;
?>    
    
</body>
</html>