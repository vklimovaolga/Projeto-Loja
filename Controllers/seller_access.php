<?php 
    require_once("models/sellers.php");
    require_once("models/seller_profile.php");

    $options = ["register_shop", "login_shop", "logout"];
    $option = $options[0];

    if(in_array($url_parts[3], $options)) {

        $model = new Sellers();
        
        if(isset($_POST["send"])) {
            if($url_parts[3] === "register_shop") { 
                $status = $model->register($_POST);
                if($status) {
                    header("Location: ".ROOT);
                } 
            }
            else {
                $status = $model->login($_POST);

                $model = new Sellers_Profiles();
                $data = $model->getSellerProfile($profile_id);

                if($status && $data && isset($_SESSION["seller_id"])) {
                    header("Location: ".ROOT."create_seller_profile/create_seller_profile/".$data[0]["seller_id"]);
                }
                else {
                    header("Location: ".ROOT."create_seller_profile/create_seller_profile");
                }
            }
        }

        if($url_parts[3] === "logout") {
            session_destroy();
            header("Location: ".ROOT);
            exit;
        }

        require("views/".$url_parts[3].".php");
    }
    

?>