<?php

//All controllers extend from Controller
class HomeController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->getView("index");
   
  }
}
