<?php

namespace App\Controller;

use App\View\View;

class AdminController extends BaseController {
  function __construct() {
    // Controller init code
  }

  function index() {
    return $view = new View('admin.index', []);
  }

  function post() {
    return false;
  }
}