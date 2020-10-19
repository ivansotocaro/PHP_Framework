<?php

include './Config/Config.php';
include './Libraries/Core/Autoload.php';


$url = !empty($_GET['url']) ? $_GET['url'] : 'home/index';
$url = rtrim($url, '/');
$arrUrl = explode("/", $url);

$controller = $arrUrl[0] . "Controller";
$method = "";
$params = "";

if (isset($arrUrl[1])) {
  $method = $arrUrl[1];
}else{
  $method = "index";
}

if (isset($arrUrl[2])) {

  for ($i = 2; $i < count($arrUrl); $i++) {
    $params .= $arrUrl[$i] . ",";
  }

  $params = rtrim($params, ",");
}


$controllerfile = "Controllers/" . $controller . ".php";

if (file_exists($controllerfile)) {

  include $controllerfile;
  $controller = new $controller();

  if (method_exists($controller, $method)) {

    $params != "" ? $controller->$method($params) : $controller->$method();
  } else {
    include 'Controllers/ErrorsController.php';
    $errors = new ErrorsController();   
    $errors->index();
  }
} else {
  include 'Controllers/ErrorsController.php';
  $errors = new ErrorsController();   
  $errors->index();
  
}



