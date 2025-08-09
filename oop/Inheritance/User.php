<?php

class User 
{
    protected string $id;
    protected string $name;
    protected string $password;

    // Simple in-memory mock "database"
    protected static array $users = [];

    public function __construct(string $id, string $name, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
    }

    public function signup(): void
    {
        // Check if user already exists
        foreach (self::$users as $user) {
            if ($user->name === $this->name) {
                echo "User already exists.\n";
                return;
            }
        }

        // Store in memory
        self::$users[] = $this;
        echo "Signed up with: id={$this->id}, name={$this->name}, password={$this->password}\n";
    }

    public function login(): void
    {
        foreach (self::$users as $user) {
            if ($user->name === $this->name && $user->password === $this->password) {
                echo "Logged into account: {$this->name}\n";
                return;
            }
        }
        echo "Login failed. Invalid username or password.\n";
    }
}
