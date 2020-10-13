<?php

define('ROOT_PATH', dirname(__FILE__));

require_once 'controller/StoresController.php';

$controller = new StoresController();

$controller->handleRequest();

?>
