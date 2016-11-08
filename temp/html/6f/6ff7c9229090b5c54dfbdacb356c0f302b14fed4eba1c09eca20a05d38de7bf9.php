<?php

/* common/views/header.html */
class __TwigTemplate_3805734f6574b93525b31ea23b015675b3d78b820ff23377b536a8e988168c71 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">

    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "common/views/header.html";
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
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">

    </div>
</nav>", "common/views/header.html", "D:\\person_git\\Permvc\\PerMVC\\application\\common\\views\\header.html");
    }
}
