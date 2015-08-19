<?php

namespace App\View;

use App\Helpers\ViewHelper;

class ViewRenderer {
  private $view, $view_data;

  function __construct($view, $view_data) {
    $this->view = $view;
    $this->view_data = $view_data;
  }

  function render() {
    $this->replaceTemplateStrings();
    $view = $this->replaceTemplateHelperStrings();

    print $view;
  }

  function replaceTemplateStrings() {
    foreach ($this->view_data as $key => $value) {
      $this->view = str_replace('{{' . $key . '}}', $value, $this->view);
    }
  }

  function replaceTemplateHelperStrings() {
    $vh = new ViewHelper($this->view);
    $view = $vh->addBootstrap();
    $view = $vh->addMenu();
    return $view;
  }
}