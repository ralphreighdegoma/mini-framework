<?php

$routes = array(

    //basic routes
    "/" => "HomeController@show",
    "/home" => "HomeController@show",
    "/player" => "PlayerController@show",


    //reports
    "/export" => "ExportController@export",

    "/404" => "ErrorController@index",
);