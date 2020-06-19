<?php 
    require_once("models/base.php");

    $options = ["jewelry_accessories", "clothing_shoes", "home_living", "wedding_party", "toys_entertainment", "art_collectibles", "craft_supplies_tools", "vintage"];
    $option = $options[0];
    if(in_array($url_parts[3], $options)){

        require("views/".$url_parts[3].".php");
    }
    

?>