<?php
namespace App;

// Require composer autoloader
require_once '../vendor/autoload.php';

use App\Config\ConfigReader;
use App\Router\Router;
use App\Database\DBConnector;
use App\Log;
use \App\Modules\ModuleRegistry;

use Whoops\Run as WhoopsRun;
use Whoops\Handler\PrettyPageHandler as WhoopsPrettyPageHandler;
use Symphony\VarDumper;

class Bootstrap {

  function __construct() {  
    $this->initErrorHandler();

    $this->setUpTwig();

    $cf = new ConfigReader();
    
    $cf->readConfig();

    $module_registry = \App\Modules\ModuleRegistry::getInstance();
    $module_registry->registerModules($cf->getModuleConfig());

    $router = new Router($cf->getRoutablesConfig());
        
    $router->route();
  }

  private function initErrorHandler() {
    $whoops = new WhoopsRun();
    $handler = new WhoopsPrettyPageHandler();
    $whoops->pushHandler($handler)->register();
  }

  private function setUpTwig() {
    \Twig_Autoloader::register();
  }
}

$b = new Bootstrap();
