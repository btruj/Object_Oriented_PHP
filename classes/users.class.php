<?php
//model
// Users class is responsible for interacting with the database and managing user data
class Users extends Dbh {
    protected function getUser($name) {
        // Prepare an SQL query to get user information based on the first name
        $sql = "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        // Fetch and return the user information
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstname, $lastname, $dob) {
        // Prepare an SQL query to insert a new user
        $sql = "INSERT INTO users (users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        
        // Execute the SQL query to insert the user information
        $stmt->execute([$firstname, $lastname, $dob]);
    }
}