<?php

/* admin/views/index.html */
class __TwigTemplate_8b06b545f9f0f819a84cad35ac3830d1b7e26eaedabac6f56527a537c5fb3392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common/views/common.html", "admin/views/index.html", 1);
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
        echo "<div class=\"text-center\" style=\"margin-top: 23%\">
  <div style=\"font-size: 120px\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/views/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"common/views/common.html\"%}

{% block content%}
<div class=\"text-center\" style=\"margin-top: 23%\">
  <div style=\"font-size: 120px\">{{ data }}</div>
</div>
{% endblock %}
", "admin/views/index.html", "D:\\person_git\\Permvc\\PerMVC\\application\\admin\\views\\index.html");
    }
}
