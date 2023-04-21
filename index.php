<?php
include 'includes/class-autoload.inc.php';
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
     
// Instantiate the Test class
$testObj = new Test();
// Call the setUsersStmt() method of the Test class to insert a new user
$testObj->setUsersStmt("John", "Doe", "1984-03-02");//saves to database when reload is clicked

// Instantiate the UsersView class
$usersObj = new UsersView();
// Call the showUser() method of the UsersView class to display user information
$usersObj->showUser("Daniel");

// Instantiate the UsersContr class
$usersObj2 = new UsersContr();
// Call the createUser() method of the UsersContr class to insert a new user
$usersObj2->createUser("Jane", "Doe", "1834-05-11");//saves to database when reload is clicked
    
    ?>
    
</body>
</html>