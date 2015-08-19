<?php

namespace App\Controller;

use App\View\View;

class AboutController extends BaseController {
  function __construct() {
    // Controller init code
  }

  function index() {
    return $view = new View('about.index', []);
  }

  function post() {
    return false;
  }
}