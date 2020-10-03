<?php

$routes = array(

    //basic routes
    "/" => "HomeController@show",
    "/home" => "HomeController@show",
    "/report" => "ReportController@report",
    "/player" => "PlayerController@show",


    //reports
    "/export" => "ExportController@export",

    "/404" => "ErrorController@index",
);