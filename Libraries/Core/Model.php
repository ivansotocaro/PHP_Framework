<?php
class Model extends Connection{

  public function __construct()
  {
    $this->pdo = new Connection();
    $this->pdo = $this->pdo->connect();
  }


}