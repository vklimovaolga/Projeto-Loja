<?php 
    $controllers = ["home", "categories", "seller_access"];
    $controller = $controllers[0];

    define("ROOT", dirname($_SERVER["SCRIPT_NAME"]). "/");
    // echo ROOT;
    // exit;

    $url_parts = explode("/", $_SERVER["REQUEST_URI"]);
    print_r($url_parts);

    if(isset($url_parts[2]) && in_array($url_parts[2], $controllers)) {

        $controller = $url_parts[2];
      }
    
    require("controllers/".$controller.".php");
?>



