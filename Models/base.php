<?php 
    class Base {
        public $db;

        function __construct() {
            $this -> db = new PDO("mysql:host=localhost;dbname=shop;charset=utf8mb4", "root", "");
        }

        // public function teste() {
        //     $query = $this->db->prepare("
        //         SELECT teste_id, name
        //         FROM teste
        //     ");
        //     $query->execute();
        //     $teste = $query->fetchAll( PDO::FETCH_ASSOC );
        //     return $teste;
        // }
        }


?>