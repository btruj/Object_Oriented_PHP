<?php
//controller
// UsersContr class is responsible for managing user-related operations
class UsersContr extends Users {
    public function createUser($firstname, $lastname, $dob) {
        // Call the setUser() method from the Users class to insert a new user
        $this->setUser($firstname, $lastname, $dob);
    }
}