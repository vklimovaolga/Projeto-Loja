<?php
require_once("base.php");

class Sellers extends Base {

    public function register($data) {
        if(
            !empty($data["username"]) &&
            !empty($data["email"]) &&
            filter_var($data["email"], FILTER_VALIDATE_EMAIL) &&
            !empty($data["password"]) &&
            !empty($data["confirm_password"]) &&
            $data["password"] === $data["confirm_password"]

        ){
            $query = $this->db->prepare("
                INSERT INTO sellers (seller_name, email, password)
                VALUES (?, ?, ?)
            ");
            $query->execute([
                $data["username"],
                $data["email"],
                password_hash($data["password"], PASSWORD_DEFAULT)
            ]);
            return true;
        }
        else {
           print_r("erro");
        }
    }

    public function login($data) {
        if(
            !empty($data["username"]) &&
            !empty($data["password"])
        ) { 
            $query = $this->db->prepare("
                SELECT seller_id, password, seller_name
                FROM sellers
                WHERE seller_name = ?
            ");

            $query->execute([
                $data["username"]
            ]);

            $seller = $query->fetchAll( PDO::FETCH_ASSOC );

        }
        else {
            echo "erro";
        }

        if(
            !empty($seller) &&
            password_verify($data["password"], $seller[0]["password"] )
        ) {
            $_SESSION["seller_id"] = $seller[0]["seller_id"];
            return true;
        }
        else {
            return false;
            echo "erro";
        }
    }
}

?>