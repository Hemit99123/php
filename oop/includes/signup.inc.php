<?php

use Oop\Classes\Car;

if ($SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
}