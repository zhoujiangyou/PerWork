<?php

/* app/views/index.html */
class __TwigTemplate_4202b302f2e5a7e596de8664ef6585600b31bbe3c38068ad9a7db6d5bfab73e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common/views/common.html", "app/views/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common/views/common.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"text-center\" style=\"margin: 0 auto;text-align: center\">
  <div style=\"font-size: 120px\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "app/views/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"common/views/common.html\"%}

{% block content%}
<div class=\"text-center\" style=\"margin: 0 auto;text-align: center\">
  <div style=\"font-size: 120px\">{{ data }}</div>
</div>
{% endblock %}

", "app/views/index.html", "D:\\xampp\\htdocs\\PerWork\\application\\app\\views\\index.html");
    }
}
