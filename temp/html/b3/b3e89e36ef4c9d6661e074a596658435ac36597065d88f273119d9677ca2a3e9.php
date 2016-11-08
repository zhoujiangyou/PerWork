<?php

/* app/views/test.html */
class __TwigTemplate_76e05b3c3384cbfb457d2435b379b084340ac016ad152080ff90a7390c6f5bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>这个就是视图文件 test</h1>
<h3>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "app/views/test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>这个就是视图文件 test</h1>
<h3>{{ data }}</h3>
", "app/views/test.html", "D:\\person_git\\Permvc\\PerMVC\\application\\app\\views\\test.html");
    }
}
