<?php

/* index.html.twig */
class __TwigTemplate_e8013989cd1d9e842e9d51e52608f7b1912358e7c9852667e4c176f39930bc58 extends Twig_Template
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
        echo "  Welcome
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-lg-12\">
      <div class=\"jumbotron\">
        <div class=\"container\">
          <h1>PHP-MVC</h1>
          <p>Welcome to PHP-MVC</p>
          <p>
            <a class=\"btn btn-primary btn-lg\" href=\"/about\">Learn more</a>
          </p>
        </div>
      </div>
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
