<?php

namespace Oop\Classes\Signup;

use Oop\Classes\Dbh;

class Signup extends Dbh {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    // Private methods only accessible within this class (not even child classes)

    private function isInputValid() {
        return isset($this->username) && isset($this->password);
    }

    private function insertUser() {
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";

        // The connect method is accessed from the parent class Dbh
        $stmt = parent::connect()->prepare($query);
        $stmt->bindValue(':username', $this->username, SQLITE3_TEXT);
        $stmt->bindValue(':password', password_hash($this->password, PASSWORD_DEFAULT), SQLITE3_TEXT);
        
        if (!$stmt->execute()) {
            throw new \Exception("Could not insert user into the database.");       
        }
    }

    public function signUpUser() {
        // Error handlers
        if ($this->isInputValid()) {
            header("Location: " . $_SERVER["DOCUMENT_ROOT"] . "/index.php");
            die();
        } 

        // If no errors, sign up user
        $this->insertUser();
        return "User signed up successfully.";
    }
}