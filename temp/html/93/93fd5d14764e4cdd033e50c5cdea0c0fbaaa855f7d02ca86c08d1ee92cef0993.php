<?php

/* common/views/common.html */
class __TwigTemplate_72c2a3132b2629dab24dac05e56d79cd152eb6246aab893d5adf70848e53934f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>personal MVC</title>
    <!--<link rel=\"stylesheet\" href=\"../../public/css/bootstrap.min.css\" type=\"text/css\" />-->
    <!--<link rel=\"stylesheet\" href=\"../../public/css/my.css\" type=\"text/css\" />-->
    <!--<link href=\"../../public/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\">-->
    <!--&lt;!&ndash;<link href=\"../../public/css/font-awesomee.css\" type=\"text/css\" rel=\"stylesheet\">&ndash;&gt;-->
    <!--<link href=\"../../public/css/animate.css\" rel=\"stylesheet\" type=\"text/css\">-->
    <!--<link href=\"../../public/css/stylef066.css?v=2.1.0\" rel=\"stylesheet\" type=\"text/css\">-->
    <!--<script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>-->

  </head>
  <body class=\"top-navigation\">
  <div id=\"wrapper\">
    <div id=\"page-wrapper\" class=\"gray-bg\">
  ";
        // line 19
        $this->loadTemplate("common/views/header.html", "common/views/common.html", 19)->display($context);
        // line 20
        echo "    <div class=\"wrapper wrapper-content\">
      <div class=\"container\">
     ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "       </div>
    </div>
  ";
        // line 27
        $this->loadTemplate("common/views/footer.html", "common/views/common.html", 27)->display($context);
        // line 28
        echo "    </div>
  </div>
  </body>
</html>";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "common/views/common.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 22,  54 => 28,  52 => 27,  48 => 25,  46 => 22,  42 => 20,  40 => 19,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>personal MVC</title>
    <!--<link rel=\"stylesheet\" href=\"../../public/css/bootstrap.min.css\" type=\"text/css\" />-->
    <!--<link rel=\"stylesheet\" href=\"../../public/css/my.css\" type=\"text/css\" />-->
    <!--<link href=\"../../public/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\">-->
    <!--&lt;!&ndash;<link href=\"../../public/css/font-awesomee.css\" type=\"text/css\" rel=\"stylesheet\">&ndash;&gt;-->
    <!--<link href=\"../../public/css/animate.css\" rel=\"stylesheet\" type=\"text/css\">-->
    <!--<link href=\"../../public/css/stylef066.css?v=2.1.0\" rel=\"stylesheet\" type=\"text/css\">-->
    <!--<script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>-->

  </head>
  <body class=\"top-navigation\">
  <div id=\"wrapper\">
    <div id=\"page-wrapper\" class=\"gray-bg\">
  {% include 'common/views/header.html' %}
    <div class=\"wrapper wrapper-content\">
      <div class=\"container\">
     {% block content%}

     {% endblock %}
       </div>
    </div>
  {% include 'common/views/footer.html' %}
    </div>
  </div>
  </body>
</html>", "common/views/common.html", "D:\\xampp\\htdocs\\PerWork\\application\\common\\views\\common.html");
    }
}
