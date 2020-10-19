<?php

class HomeController extends Controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->getView("index");
   
  }

  public function carrito($numero)
  {
    $model = $this->model->carrito($numero);
    echo $model;
  }
}
