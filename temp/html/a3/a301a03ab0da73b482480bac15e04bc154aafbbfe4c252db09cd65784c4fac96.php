<?php

/* common/views/footer.html */
class __TwigTemplate_6edbd00c6d98c15e291e9dbdcd0493e6e3cf19da34df7b341dd46a590555dbdb extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"pull-right\">
        By：<a href=\"https://github.com/zhoujiangyou\" target=\"_blank\">zhouht</a>
    </div>
    <div>
        <strong>Copyright</strong> zhouht &copy; 2016
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "common/views/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/views/footer.html", "D:\\xampp\\htdocs\\PerWork\\application\\common\\views\\footer.html");
    }
}
