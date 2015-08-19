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
    $this->view = str_replace("@{bootstrap}", '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">', $this->view);
    return $this->view;
  }

  function addMenu() {
    $routes = new \App\Config\ConfigReader();
    $routes->readConfig();
    
    $menu = '<ul class="nav nav-pills">';
    
    foreach ($routes->getRoutablesConfig() as $key => $value) {
      if ($_SERVER['REQUEST_URI'] === $value) {
        $menu .= '<li class="active"><a href="' . $value . '">' . $key . '</a></li>';
      } else {
        $menu .= '<li><a href="' . $value . '">' . $key . '</a></li>';
      }
    }

    $menu .= '</ul>';

    $this->view = str_replace('@{menu}', $menu, $this->view);

    return $this->view;
  }
}