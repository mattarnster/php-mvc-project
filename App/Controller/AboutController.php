<?php

namespace App\Controller;

class AboutController extends BaseController {
  function __construct() {
    // Controller init code
  }

  function index() {
    return $view = new View('about.index');
  }

  function post() {
    return false;
  }
}