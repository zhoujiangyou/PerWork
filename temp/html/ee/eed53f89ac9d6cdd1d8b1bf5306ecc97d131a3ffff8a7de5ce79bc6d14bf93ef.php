<?php

/* layout/common.html */
class __TwigTemplate_d0ccdfe24175da251ad06a2274efeba4132f12cf0ed890d5abb484c9dc6c1d19 extends Twig_Template
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
  </head>
  <body>
    <header>
      <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
          <div class=\"container\">

          </div>
      </nav>
   </header>
    <div class=\"container background\">
    <content>
     ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "    </content>
    </div>
    <footer>
      <nav class=\"navbar navbar-default navbar-fixed-bottom\" role=\"navigation\">
          <div class=\"container\">

          </div>
      </nav>
    </footer>
  </body>
  <script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>
  <script type=\"text/javascript\" src=\"../../public/js/bootstrap.min.js\"></script>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "layout/common.html";
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  59 => 20,  43 => 23,  41 => 20,  20 => 1,);
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
  </head>
  <body>
    <header>
      <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
          <div class=\"container\">

          </div>
      </nav>
   </header>
    <div class=\"container background\">
    <content>
     {% block content%}

     {% endblock %}
    </content>
    </div>
    <footer>
      <nav class=\"navbar navbar-default navbar-fixed-bottom\" role=\"navigation\">
          <div class=\"container\">

          </div>
      </nav>
    </footer>
  </body>
  <script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>
  <script type=\"text/javascript\" src=\"../../public/js/bootstrap.min.js\"></script>
</html>", "layout/common.html", "D:\\person_git\\Permvc\\PerMVC\\application\\app\\views\\layout\\common.html");
    }
}
