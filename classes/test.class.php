<?php

// Create a new class called Test that extends the Dbh class
class Test extends Dbh {

    // Declare a public method called getUsers to fetch and display user data
    public function getUsers() {
        // Create an SQL query string to select all records from the 'users' table
        $sql = "SELECT * FROM users";

        // Use the connect() method from the Dbh class to establish a connection to the database
        // Then, execute the SQL query using the query() method on the PDO instance
        $stmt = $this->connect()->query($sql);

        // Loop through the fetched records using the fetch() method on the statement object
        while ($row = $stmt->fetch()) {
            // Display the user's first name followed by a line break
            echo $row['users_firstname'] . "<br>";
        }
    }

        public function getUsersStmt($firstname, $lastname) {
            $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname]);
            $names = $stmt->fetchAll();

            foreach ($names as $name) { 
                echo $name['users_firstname'] . " " . $name['users_dateofbirth'] . "<br>";
    

      }
   }


   public function setUsersStmt($firstname, $lastname, $dateofbirth) {
    $sql = "INSERT INTO users (users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";//inserts John Doe 1984-03-02 into SQL database
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname, $lastname, $dateofbirth]);

      }
    }

