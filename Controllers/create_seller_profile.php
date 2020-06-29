<?php
require_once("models/seller_profile.php");

$options = ["create_seller_profile", "edit_seller_profile", "view_seller_profile"];

if(in_array($url_parts[3], $options)) {
    $model = new Sellers_Profiles(); 
    if(isset($_POST["send"])) {
        $model = new Sellers_Profiles();
        
    
    }

    require("views/".$url_parts[3].".php");
}



?>