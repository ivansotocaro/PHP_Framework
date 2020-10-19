<?php

class ErrorsController extends Controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->getView("Errors/errors");
  }

}
