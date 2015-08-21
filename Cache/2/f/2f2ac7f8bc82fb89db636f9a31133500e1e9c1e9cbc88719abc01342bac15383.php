<?php

/* master.html.twig */
class __TwigTemplate_2f2ac7f8bc82fb89db636f9a31133500e1e9c1e9cbc88719abc01342bac15383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
  <style type=\"text/css\">
    .main {
      margin-top: 60px;
    }
  </style>
</head>
<body>
  ";
        // line 16
        $this->loadTemplate("navbar.html.twig", "master.html.twig", 16)->display($context);
        // line 17
        echo "  <div class=\"container main\">
    ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "  </div>
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  53 => 6,  47 => 19,  45 => 18,  42 => 17,  40 => 16,  27 => 6,  21 => 2,);
    }
}
