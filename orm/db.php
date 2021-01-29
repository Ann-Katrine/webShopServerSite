<?php
    class DB{
        //properties
        public $conn;
        private $host = "lovalhost";
        private $user = "root";
        private $password = "";
        private $db = "webshopserversite";

        //Construter
        function __construct(){
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);

            if($this->conn->connect_errno != ""){
                echo '<h1>'.$this->conn->connect_error.'</h1>';
                die('der er ikke forbindelse til databasen.');
            }
            else
            {
                $this->conn->set_charset('UTF8');
            }
        }
    }
?>