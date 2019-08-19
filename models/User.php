<?php
    require_once(dirname(__DIR__).'/config/database.php');
	class User {
		private $id;
		private $username;
		private $pass;

        // Constructor del modelo para registrar
		public function __construct($username, $pass) {
			$this->username = $username;
			$this->pass = $pass;
        }
		
		public function create() {
            $database = new Database();
            $db_connection = $database->connection();
            $query = 'INSERT INTO users(username, pass) VALUES ("'.$this->username.'", "'.$this->pass.'")';
            $db_connection->query($query);
            $this->id = $db_connection->insert_id;
            $db_connection->close();
            return $this->id;
        }
        
        static function get_all() {
            $database = new Database();
            $db_connection = $database->connection();
            if($db_connection->connect_error) {
                echo $db_connection->connect_error;
            } else {
                $query = 'SELECT * FROM users';
                $users = array();
                $result = $db_connection->query($query);
                while($register = $result->fetch_assoc()) {
                    array_push($users, $register);
                }
                $db_connection->close();
                return $users;
            }
        }
    }
?>