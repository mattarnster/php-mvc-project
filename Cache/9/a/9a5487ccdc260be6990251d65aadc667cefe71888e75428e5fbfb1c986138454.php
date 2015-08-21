<?php

/* index.html.twig */
class __TwigTemplate_9a5487ccdc260be6990251d65aadc667cefe71888e75428e5fbfb1c986138454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  About PHP-MVC
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-lg-12\">
      <h1>About PHP-MVC</h1>
      <hr>
      <h4>
        PHP-MVC is a for-fun project by Matt Arnold 
        <a href=\"https://github.com/mattarnster\">
          <i class=\"fa fa-github\"></i>
        </a>
        <a href=\"https://twitter.com/mattarnster\">
          <i class=\"fa fa-twitter\"></i>
        </a>
      </h4>
      <blockquote>
        I started this project to see if what I already knew from using frameworks like Laravel,
        if I could start to build my own PHP MVC framework.
        From where I started out on this project, I had never envisioned being able to integrate the popular templating engine Twig with PHP-MVC.
      </blockquote>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
