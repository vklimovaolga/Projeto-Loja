
<?php 
    $controllers = ["teste"];
    $controller = $controllers[0];

    define("ROOT", dirname($_SERVER["SCRIPT_NAME"]). "/");

    $url_pastrs = explode("/", $_SERVER["REQUEST_URI"]);
    
    require("controllers/".$controller.".php");
?>



