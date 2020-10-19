<?php

class Controllers
{

  public function __construct()
  {
    $this->view = new Views();
    $this->loadModel();
  }

  public function loadModel()
  {
    $model =  str_replace("Controller", "Model", get_class($this));
    $modelClass = "Models/" . $model . ".php";

    if (file_exists($modelClass)) {
      include $modelClass;
      $this->model = new $model();
    }
  }
}
