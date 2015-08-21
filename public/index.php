<?php
namespace App;

// Require composer autoloader
require_once '../vendor/autoload.php';

use App\Config\ConfigReader;
use App\Router\Router;
use App\Database\DBConnector;
use App\Log;

use Whoops\Run as WhoopsRun;
use Whoops\Handler\PrettyPageHandler as WhoopsPrettyPageHandler;
use Symphony\VarDumper;

class Bootstrap {
  function __construct() {
    $this->initErrorHandler();

    $this->setUpTwig();

    $cf = new ConfigReader();
    
    $cf->readConfig();

    $db = new DBConnector($cf->getDatabaseConfig());

    $router = new Router($cf->getRoutablesConfig());
    
    $d_routes = $cf->getRoutablesConfig();
    
    $router->route();
  }

  private function initErrorHandler() {
    $whoops = new WhoopsRun();
    $handler = new WhoopsPrettyPageHandler();
    $whoops->pushHandler($handler)->register();
    return $this;
  }

  private function setUpTwig() {
    \Twig_Autoloader::register();
  }
}

$b = new Bootstrap();