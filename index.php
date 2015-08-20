<?php
namespace App;

/**
 * Core stuff
 */
// include('App/Database/DBConnector.php');
// include('App/Config/ConfigReader.php');
// include('App/Router/Router.php');
// include('App/View/ViewRenderer.php');
// include('App/View/View.php');
// include('App/Helpers/ViewHelper.php');
// include('App/Log/Log.php');
// include('App/Controller/BaseController.php');

/**
 * User stuff
 */
// include('App/Models/Post.php');
// include('App/Controller/WelcomeController.php');
// include('App/Controller/AboutController.php');
// include('App/Controller/PostController.php');

// Require composer autoloader - YAY! No more manual includes!!!!!!!
require_once 'vendor/autoload.php';
require_once __DIR__ . '/vendor/twig/twig/lib/Twig/Autoloader.php';



use App\Config\ConfigReader;
use App\Router\Router;
use App\Database\DBConnector;
use App\Log;

use Whoops\Run as WhoopsRun;
use Whoops\Handler\PrettyPageHandler as WhoopsPrettyPageHandler;

$mvc_version = "1.0";
$mvc_author = "github.com/mattarnster";

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

$log = new Log\Log(1);
$log->log("INFO", "STARTED UP");

$b = new Bootstrap();

$log->log("INFO", "FINISHED UP");