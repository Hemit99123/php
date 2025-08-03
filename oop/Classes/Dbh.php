<?php
// Database Handler Class

class Dbh {
    private $sqlite;

    // Only child classes can access this method. Objects of this class cannot access it.
    protected function connect() {
        // Create a new SQLite3 database connection (any db connection can be used here)
        $this->sqlite = new SQLite3("user.db", SQLITE3_OPEN_READONLY);
        // This method can be used to establish a connection to the database
        if (!$this->sqlite) {
            throw new Exception("Could not connect to the database.");
        }
        return $this->sqlite;
    }

}