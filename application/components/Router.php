<?php
class Router {
  private $routes;

  public function __construct() {
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);
  }
  /**
    * return Request string
    * @return string
  **/
  private function getURI() {
    if (!empty($_SERVER['REQUEST_URI'])) {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }
  public function run() {

    $uri = $this->getURI();
    //echo $uri;
    //получение запроса
    foreach ($this->routes as $uriPattern => $path) {
      if (preg_match("~$uriPattern~", $uri)) {
        // echo $path;
        $segments = explode('/', $path);

        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);

        $actionName = 'action'.ucfirst(array_shift($segments));

        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
        // echo $controllerFile;
        if (file_exists($controllerFile)) {
          include_once($controllerFile);

        }
        $controllerObject = new $controllerName;
        $resul = $controllerObject->$actionName();
        if($resul != null) {
          break;
        }

      }
    }
    //проверить наличие запроса в routes.php


  }

}

?>
