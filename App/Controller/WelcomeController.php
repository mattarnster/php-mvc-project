<?php

namespace App\Controller;

class WelcomeController extends BaseController {
  function __construct() {
    // Controller init code
  }

  function index() {
    $view_data = ['test' => 'Lorem ipsum'];

    return $view = new View('welcome.index', $view_data);
  }

  function post() {
    return false;
  }
}