<?php
namespace App\Router;
use App\Controllers;


class RouterProvider {

    private $routes;
    private $controller;
    private $action;
    private $uri;
  
    public function __construct($uri) {
        
        $this->routes = array(
            "/" => "HomeController@show",
            "/home" => "HomeController@show",
            "report" => "ReportController@report",
            "/404" => "ErrorController@index",
        );

        $this->uri = $uri;

    }

    public function process($path = null) {

        $path = $path != null ? $path : $this->uri; 
        $route = $this->routes[$path];
        $unformatted_controller = explode("@", $route);
        $this->controller = $unformatted_controller[0];
        $this->action = $unformatted_controller[1];

        $parent_class = "App\Controllers\\".$this->controller;
        $call_func = new $parent_class();
        return $call_func->{$this->action}();
    }

    public function routeExist() {
        $exist = array_key_exists($this->uri, $this->routes);
     
        return !empty($exist);
    }

    public function redirect($path) {
        return $this->process($path);
    }

    public function go() {

        if(!$this->routeExist()) {
            return $this->redirect("/404");
        } 

        return $this->process();

    }
}
