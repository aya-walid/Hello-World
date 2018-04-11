<?php
/**
 * Created by PhpStorm.
 * User: majde
 * Date: 4/9/2018
 * Time: 10:26
 */

$controllerName = "HomeController";
$actionName = "index";

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controllerName = $_GET['controller'].'Controller';
    $actionName = $_GET['action'];
}

//echo "Controller: ".$controllerName;
//echo "<br/>";
//echo "Action: ".$actionName;

require_once("controllers/".$controllerName.".php");
$controller = new $controllerName();
//var_dump($controller);

$controller->$actionName();
