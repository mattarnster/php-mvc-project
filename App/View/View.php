<?php

namespace App\View;
use \Twig;

class View {
  private $twig;
  function __construct($view_name, $view_data) {
    $f_view_name = explode('/', str_replace('.', '/', $view_name));

    $loader = new \Twig_Loader_Filesystem(
        array (
            __DIR__ . "/layouts",
            __DIR__ . "/partials",
            __DIR__ . "/" . $f_view_name[0], // Only look in view name's 
                                            // folder (prevents conflicting index.html.twig occurences.)
        )
    );
    // set up environment
    $params = array(
        'cache' => "../Cache", 
        'auto_reload' => true, // disable cache
        'autoescape' => true
    );
    $this->twig = new \Twig_Environment($loader, $params);

    print $this->twig->display($f_view_name[1] . '.html.twig', $view_data);
  }
}