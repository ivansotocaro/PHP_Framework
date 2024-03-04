<?php
//All controllers extend from Controller
class LoginController extends Controller
{

  public function __construct()
  {
    parent::__construct();   
  }

  public function index()
  {
    echo 'Vista login';
  }

  public function signIn()
  {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      $token = $this->jwtManager->createToken(['user_id' => 1, 'username' => 'ivan']);

      $data = [
        "status" => 200,
        "message" => "Inicio de sesion con exito",
        'token' => $token,
      ];
    
      echo json_encode($data);

    }

  }

}
