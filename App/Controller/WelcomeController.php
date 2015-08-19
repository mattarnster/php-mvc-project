<?php

namespace App\Controller;

use App\View\View;

class WelcomeController extends BaseController {
  function __construct() {
    // Controller init code
  }

  function index() {
    return $view = new View('welcome.index');
  }

  function post() {
    return false;
  }
}