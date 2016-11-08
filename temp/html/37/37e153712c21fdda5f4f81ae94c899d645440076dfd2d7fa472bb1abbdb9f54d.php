<?php

/* layout/footer.html */
class __TwigTemplate_21a846e0227235b4dc1e62a960b9a32e1d42703b61a1ac7411bff4b7a7d1c9a7 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-bottom\" role=\"navigation\">
    <div class=\"container\">

    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "layout/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-bottom\" role=\"navigation\">
    <div class=\"container\">

    </div>
</nav>", "layout/footer.html", "D:\\person_git\\Permvc\\PerMVC\\application\\app\\views\\layout\\footer.html");
    }
}
