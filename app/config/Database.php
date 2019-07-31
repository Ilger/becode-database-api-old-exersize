<?php
    class Database {
        // DB Params
        private $host = 'localhost';
        private $db_name = 'Notes'
        private $username = 'admin'
        private $password = 'UirxpPeM0FT7'
        private $conn; 
        
        // DB connenct
        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new POD('mysql:host=' . $this->host .';dbname= ' . $this->db_name,
                $this->username, $this->password);
            }   catch(PODException $e) {
                echo 'Connction Error' . $e->getMessage();
            }
        }
    }