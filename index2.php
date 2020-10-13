<?php

define('ROOT_PATH', dirname(__FILE__));

require_once 'controller/StoresController.php';

$record_per_page=10;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

$filter=(isset($_GET['filter']))?$_GET['filter']:'';

$latitude=(isset($_GET['latitude']))?$_GET['latitude']:'';
$longitude=(isset($_GET['longitude']))?$_GET['longitude']:'';

$controller = new StoresController();

$controller->listStores($record_per_page,$page,$filter,$latitude,$longitude);

?>
