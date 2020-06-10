<?php 
    class Base {
        public $db;

        function __construct() {
            $this -> db = new PDO("mysql:host=localhost;dbname=shop;charset=utf8mb4", "root", "");
        }
    }


?>