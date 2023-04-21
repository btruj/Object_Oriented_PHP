<?php 
//view

// UsersView class is responsible for displaying user information
class UsersView extends Users {
    public function showUser($name) {
        // Get user information using the getUser() method from the Users class
        $results = $this->getUser($name);
        
        // Display user's full name and date of birth
        echo "Full name: " . $results[0]['users_firstname'] . " " . $results[0]['users_lastname'] . "<br>";
        echo "Date of birth: " . $results[0]['users_dateofbirth'] . "<br>";
    }
}
