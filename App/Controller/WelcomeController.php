<?php

namespace App\Controller;

use App\View\View;

class WelcomeController extends BaseController {
  
  function __construct() {
    // Controller init code
    parent::__construct();
  }

  function index() {
    $view_data = ['test' => 'Lorem ipsum'];

    return $view = new View('welcome.index', $view_data);
  }

  function post() {
    return false;
  }
}