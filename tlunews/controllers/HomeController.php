<?php
    class HomeController{
        private $conn;

        public function __construct($db){
            $this->conn = $db;
        }
        public function index(){}

    }

?>