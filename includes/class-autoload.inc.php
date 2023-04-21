<?php

// Register the 'myAutoloader' function as an autoloader for loading class files
spl_autoload_register('myAutoloader');

// Define the 'myAutoloader' function to load class files automatically
function myAutoloader($className) {
    // Set the path to the directory containing the class files
    $path = "classes/";

    // Set the file extension for the class files
    $extension = ".class.php";

    // Replace the namespace separator '\' with the directory separator '/'
    $className = str_replace("\\", "/", $className);

    // Combine the path, class name, and extension to form the full file path
    $fullPath = $path . $className . $extension;

    // Check if the file exists, and if not, return false
    if (!file_exists($fullPath)) {
        return false;
    }

    // Include the class file if it exists
    include_once $path . $className . $extension;
}
