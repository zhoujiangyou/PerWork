<?php

/* common/views/common.html */
class __TwigTemplate_585ce9d669b0cf4e78e8167d3adef5137030bfe83d7d25a6743e047d6eff40a5 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"../../public/css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"../../public/css/my.css\" type=\"text/css\" />
    <link href=\"../../public/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\">
    <!--<link href=\"../../public/css/font-awesomee.css\" type=\"text/css\" rel=\"stylesheet\">-->
    <link href=\"../../public/css/animate.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"../../public/css/stylef066.css?v=2.1.0\" rel=\"stylesheet\" type=\"text/css\">
    <script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>

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
  <script type=\"text/javascript\" src=\"../../public/js/bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"../../public/js/core.js\"></script>
  <script src=\"../../public/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
  <script src=\"../../public/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>

  <!-- Custom and plugin javascript -->
  <script src=\"../../public/js/hplus28b5.js\"></script>
  <script src=\"../../public/js/plugins/pace/pace.min.js\"></script>

  <!-- Flot -->
  <script src=\"../../public/js/plugins/flot/jquery.flot.js\"></script>
  <script src=\"../../public/js/plugins/flot/jquery.flot.tooltip.min.js\"></script>
  <script src=\"../../public/js/plugins/flot/jquery.flot.resize.js\"></script>

  <!-- ChartJS-->
  <script src=\"../../public/js/plugins/chartJs/Chart.min.js\"></script>

  <!-- Peity -->
  <script src=\"../../public/js/plugins/peity/jquery.peity.min.js\"></script>

  <!-- Peity demo -->
  <script src=\"../../public/js/demo/peity-demo.js\"></script>
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
        return array (  86 => 23,  83 => 22,  54 => 28,  52 => 27,  48 => 25,  46 => 22,  42 => 20,  40 => 19,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>personal MVC</title>
    <link rel=\"stylesheet\" href=\"../../public/css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"../../public/css/my.css\" type=\"text/css\" />
    <link href=\"../../public/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\">
    <!--<link href=\"../../public/css/font-awesomee.css\" type=\"text/css\" rel=\"stylesheet\">-->
    <link href=\"../../public/css/animate.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"../../public/css/stylef066.css?v=2.1.0\" rel=\"stylesheet\" type=\"text/css\">
    <script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>

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
  <script type=\"text/javascript\" src=\"../../public/js/bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"../../public/js/core.js\"></script>
  <script src=\"../../public/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
  <script src=\"../../public/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>

  <!-- Custom and plugin javascript -->
  <script src=\"../../public/js/hplus28b5.js\"></script>
  <script src=\"../../public/js/plugins/pace/pace.min.js\"></script>

  <!-- Flot -->
  <script src=\"../../public/js/plugins/flot/jquery.flot.js\"></script>
  <script src=\"../../public/js/plugins/flot/jquery.flot.tooltip.min.js\"></script>
  <script src=\"../../public/js/plugins/flot/jquery.flot.resize.js\"></script>

  <!-- ChartJS-->
  <script src=\"../../public/js/plugins/chartJs/Chart.min.js\"></script>

  <!-- Peity -->
  <script src=\"../../public/js/plugins/peity/jquery.peity.min.js\"></script>

  <!-- Peity demo -->
  <script src=\"../../public/js/demo/peity-demo.js\"></script>
  </body>
</html>", "common/views/common.html", "D:\\person_git\\Permvc\\PerMVC\\application\\common\\views\\common.html");
    }
}
