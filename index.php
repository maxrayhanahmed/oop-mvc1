<?php

spl_autoload_register(function ($className) {
include_once "system/libs/".$className.".php";
});

include_once "apps/config/Config.php";

$main =	new Main();





?>
