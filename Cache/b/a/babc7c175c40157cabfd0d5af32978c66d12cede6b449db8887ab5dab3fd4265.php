<?php

/* index.html.twig */
class __TwigTemplate_babc7c175c40157cabfd0d5af32978c66d12cede6b449db8887ab5dab3fd4265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <p>Test for posts display:</p>
  ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "    <div class=\"panel panel-info\">
      <div class=\"panel-body\">
         <article>
          <h4>Title: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_title", array()), "html", null, true);
            echo "</h4>
          <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_text", array()), "html", null, true);
            echo "</p>
          <footer>Posted at: <em> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_created_at", array()), "html", null, true);
            echo "</footer>
        </article>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  51 => 11,  47 => 10,  43 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
