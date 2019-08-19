<?php
	class Database {
        private $host;
        private $user;
        private $pass;
        private $database;
        
        public function __construct() {
            $this->host = 'localhost';
            $this->user = 'boris';
            $this->pass = 'boris123';
            $this->database = 'test_db';
        }

        public function connection() {
            $connection = new mysqli($this->host, $this->user, $this->pass, $this->database);
            if($connection->connect_errno) {
                echo $connection->connect_error;
            }
            return $connection;
        }
    }
?>