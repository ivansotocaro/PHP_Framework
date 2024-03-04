<?php

require_once './vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtManager {

  private $secretKey = JWT_SECRET_KEY;

  private $hash = JWT_HASH;

  public function createToken($data)
  {
      $payload = [
          'exp' => time() + 3600,
          'data' => $data,
      ];

      return JWT::encode($payload, $this->secretKey, $this->hash);
  }

  public function validateToken($token)
  {
      // Implementation for validating JWT
  }

  public function decodeToken($token)
  {

    // if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    //     // Obtiene el valor del encabezado "Authorization"
    //     $authorizationHeader = $_SERVER['HTTP_AUTHORIZATION'];

    //     // Verifica si el encabezado comienza con "Bearer"
    //     if (strpos($authorizationHeader, 'Bearer') === 0) {
    //         // Divide el encabezado para obtener el token
    //         $token = substr($authorizationHeader, 7);

    //         // Imprime el token
    //         echo "Token: " . $token;
    //     } else {
    //         // Maneja el caso en el que el encabezado no comienza con "Bearer"
    //         echo "El encabezado Authorization no tiene el formato esperado.";
    //     }
    // } else {
    //     // Maneja el caso en el que el encabezado "Authorization" no está presente
    //     echo "El encabezado Authorization no está presente en la solicitud.";
    // }

  }


}