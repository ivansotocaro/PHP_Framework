<?php

class Views
{

  public function getView($view, $data = [])
  {
    $view = VIEWS . $view . ".php";
    if(file_exists($view)){
        include $view;
    }
  }
}

//Con esta funcion se trabaja las vitas por carpetas llamadas igual que su controlador
//  public function getView($view)
//   {
//     $controller = str_replace("Controller", "", get_class($controller));
//     if ($controller == "Home") {
//       $view = VIEWS . $view . ".php";
//     } else {
//       $view = VIEWS . $controller . "/" . $view . ".php";
//     }
//     include $view;
//   }