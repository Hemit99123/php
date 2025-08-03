<?php
require_once '../Classes/Dbh.php';
require_once '../Classes/Signup.php';

use Oop\Classes\Signup;

if ($SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);

    $signup = new Signup($username, $password);
    $signup->signUpUser();
}