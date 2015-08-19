<?php

namespace App\View;

class ViewRenderer {
  private $view, $view_data;

  function __construct($view, $view_data) {
    $this->view = $view;
    $this->view_data = $view_data;
  }

  function render() {
    $this->replaceTemplateStrings();

    print $this->view;
  }

  function replaceTemplateStrings() {
    foreach ($this->view_data as $key => $value) {
      $this->view = str_replace('{{' . $key . '}}', $value, $this->view);
    }
  }
}