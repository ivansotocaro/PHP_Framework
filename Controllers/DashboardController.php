<?php

//All controllers extend from Controller
class DashboardController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->getView("Dashboard/dashboard");
  }
}
