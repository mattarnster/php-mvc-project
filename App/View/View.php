<?php

namespace App\View;

use App\View\ViewRenderer;

class View {
  function __construct($view_name, $view_data) {
    $f_view_name = str_replace('.', '/', $view_name);
    $view = file_get_contents(__DIR__ . '/' . $f_view_name . '.php');
    $view_renderer = new ViewRenderer($view, $view_data);
    $view_renderer->render();
  }
}