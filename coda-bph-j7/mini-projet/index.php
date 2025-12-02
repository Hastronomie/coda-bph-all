
<?php

require_once "services/Router.php";
require_once "controllers/PageController.php";
require_once "controllers/BlogController.php";

$routes = [
    [
        "path" => "/",
        "controller" => "PageController",
        "method" => "home",
        "parameter" => false
    ],
    [
        "path" => "/nos-tarifs",
        "controller" => "PageController",
        "method" => "tarifs",
        "parameter" => false
    ],
    [
        "path" => "/blog",
        "controller" => "BlogController",
        "method" => "index",
        "parameter" => false
    ],
    [
        "path" => "/blog",
        "controller" => "BlogController",
        "method" => "show",
        "parameter" => true
    ]
];

$request = $_SERVER['REQUEST_URI'];

$scriptDir = dirname($_SERVER['SCRIPT_NAME']);

$request = str_replace($scriptDir, '', $request);

if($request === "") 
{
    $request = "/";
}

$router = new Router();

try 
{
    $router->route($routes, $request);
} 
catch (Exception $e) 
{
    $ctrl = new PageController();
    $ctrl->notFound();
}