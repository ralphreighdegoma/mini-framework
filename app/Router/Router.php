<?php

class Router {
  
    public static function routes() {

        $routes = array(
            "/" => "HomeController@show",
            "report" => "ReportController@report",
        );

        return $routes;
    }
}
