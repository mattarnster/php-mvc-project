<?php
namespace App;

/**
 * Core stuff
 */
include('App/Database/DBConnector.php');
include('App/Config/ConfigReader.php');
include('App/Router/Router.php');
include('App/View/View.php');

/**
 * User stuff
 */
include('App/Controller/BaseController.php');
include('App/Controller/WelcomeController.php');
include('App/Controller/AboutController.php');

use App\Config\ConfigReader;
use App\Router\Router;
use App\Database\DBConnector;

class Bootstrap {
  function __construct() {
    $cf = new ConfigReader();
    $cf->readConfig();

    $db = new DBConnector($cf->getDatabaseConfig());

    $router = new Router($cf->getRoutablesConfig());

    $router->route();
  }
}

$b = new Bootstrap();