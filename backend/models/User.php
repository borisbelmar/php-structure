<?php
    require_once('Database.php');
	class User {
		private $usr_id;
        private $usr_username;
        private $usr_email;
        private $usr_pass;
        private $usr_firstname;
        private $usr_lastname;

        // Constructor del modelo para registrar
		public function __construct($username, $email, $pass, $firstname, $lastname) {
            $this->usr_username = $username;
            $this->usr_email = $email;
            $this->usr_pass = $pass;
            $this->usr_firstname = $firstname;
            $this->usr_lastname = $lastname;
        }
		
		public function create() {
            $database = new Database();
            $db_connection = $database->connection();
            $query = 'INSERT INTO users(usr_username, usr_email, usr_pass, usr_firstname, usr_lastname) VALUES ("'.$this->usr_username.'", "'.$this->usr_email.'", "'.$this->usr_pass.'", "'.$this->usr_firstname.'", "'.$this->usr_lastname.'")';
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
                $query = 'SELECT usr_id, usr_username, usr_email, usr_pass, usr_firstname, usr_lastname, usr_createDate FROM users';
                $users = array();
                $result = $db_connection->query($query);
                while($register = $result->fetch_assoc()) {
                    array_push($users, $register);
                }
                $db_connection->close();
                return $users;
            }
        }
        static function get_by_username($username) {
            $database = new Database();
            $db_connection = $database->connection();
            if($db_connection->connect_error) {
                echo $db_connection->connect_error;
            } else {
                $query = 'SELECT usr_id, usr_username, usr_email, usr_pass, usr_firstname, usr_lastname, usr_createDate, usr_level FROM users WHERE usr_username = "'.$username.'"';
                $result = $db_connection->query($query);
                $user = $result->fetch_assoc();
                $db_connection->close();
                return $user;
            }
        }
        static function get_by_id($id) {
            $database = new Database();
            $db_connection = $database->connection();
            if($db_connection->connect_error) {
                echo $db_connection->connect_error;
            } else {
                $query = 'SELECT usr_id, usr_username, usr_email, usr_pass, usr_firstname, usr_lastname, usr_createDate, usr_level FROM users WHERE usr_id = '.$id;
                $result = $db_connection->query($query);
                $user = $result->fetch_assoc();
                $db_connection->close();
                return $user;
            }
        }
        static function update_by_id($id, $email, $firstname, $lastname) {
            $database = new Database();
            $db_connection = $database->connection();
            if($db_connection->connect_error) {
                echo $db_connection->connect_error;
            } else {
                $query = "UPDATE users SET usr_email = '".$email."', usr_firstname = '".$firstname."', usr_lastname = '".$lastname."' WHERE usr_id = ".$id;
                $result = $db_connection->query($query);
                $db_connection->close();
            }
        }

        static function update_password($id, $pass) {
            $database = new Database();
            $db_connection = $database->connection();
            if($db_connection->connect_error) {
                echo $db_connection->connect_error;
            } else {
                $query = "UPDATE users SET usr_pass = '".$pass."' WHERE usr_id = ".$id;
                $result = $db_connection->query($query);
                $db_connection->close();
            }
        }

        static function delete_by_id($id) {
            $database = new Database();
            $db_connection = $database->connection();
            if($db_connection->connect_error) {
                echo $db_connection->connect_error;
            } else {
                $query = 'DELETE FROM users WHERE usr_id = '.$id;
                $result = $db_connection->query($query);
                $db_connection->close();
            }
        }
    }
?>