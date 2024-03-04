<?php

require_once 'Libraries/JwtManager.php';

class Controller
{
    /**
     * @var Model
     */
    protected $model;
    /**
     * @var Views
     */
    protected $view;

    protected $jwtManager;

    public function __construct()
  {
    $this->view = new Views();
    $this->loadModel();
    $this->jwtManager = new JwtManager();
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
