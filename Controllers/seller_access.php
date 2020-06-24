<?php 
    require_once("models/sellers.php");

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

        }

        require("views/".$url_parts[3].".php");
    }
    

?>