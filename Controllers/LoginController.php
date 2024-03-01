<?php

//All controllers extend from Controller
class LoginController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index($id)
  {
    $this->view->getView("index");
//      print_r($this->model->getUser());
  }
}
