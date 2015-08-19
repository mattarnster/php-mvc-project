<?php

namespace App\View;

class View {
  function __construct($view_name) {
    $f_view_name = str_replace('.', '/', $view_name);
    $view = file_get_contents(__DIR__ . '/' . $f_view_name . '.php');
    print $view;
  }
}