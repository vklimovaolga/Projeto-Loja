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
}

?>