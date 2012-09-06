<?php
require_once "./StaticLoader.php";

$modules = array();
$loader  = new StaticLoader("config.php");
$loader->set("welcome");
echo $loader->load();
?>
