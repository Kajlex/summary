<?php

include_once('../autoloader.php');

$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller = new Controller($action);
$controller->execute();
