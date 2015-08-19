<?php 

namespace App\Helpers;

class ViewHelper {
  private $view;

  private $helper_template_array = array('bootstrap');

  function __construct($view) {
    $this->view = $view;
  }

  function getHelperTemplates() {
    return $this->helper_template_array;
  }

  function addBootstrap() {
    $view = str_replace("@{bootstrap}", '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">', $this->view);
    return $view;
  }
}