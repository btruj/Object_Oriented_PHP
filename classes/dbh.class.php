<?php
// Create a class called Dbh to manage database connections
class Dbh {
    // Declare private properties for the database connection details
    private $host = "localhost";
    private $user = "admin";
    private $pwd = "1234";
    private $dbName = "oopphp16";

    // Define a protected method called connect() to establish a connection to the database
    protected function connect() {
        // Create a Data Source Name (DSN) string using the connection details
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;

        // Create a new PDO object using the DSN, username, and password
        $pdo = new PDO($dsn, $this->user, $this->pwd);

        // Set the fetch mode of the PDO object to associative arrays
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Return the PDO object to be used by other classes
        return $pdo;
    }
}
