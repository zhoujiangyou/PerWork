<?php

/* layout/common.html */
class __TwigTemplate_16c84172f6ce71f827b21fc68d383ec5b9a18616e84271b6d3341740f2586ff8 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"../public/css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"../public/css/my.css\" type=\"text/css\" />
  </head>
  <body>
    <header>
      <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
          <div class=\"container\">
                <h2>header</h2>
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
               <h2>footer</h2>
          </div>
      </nav>
    </footer>
  </body>
  <script type=\"text/javascript\" src=\"../public/js/bootstrap.min.js\">
</html>
";
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
    <link rel=\"stylesheet\" href=\"../public/css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"../public/css/my.css\" type=\"text/css\" />
  </head>
  <body>
    <header>
      <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
          <div class=\"container\">
                <h2>header</h2>
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
               <h2>footer</h2>
          </div>
      </nav>
    </footer>
  </body>
  <script type=\"text/javascript\" src=\"../public/js/bootstrap.min.js\">
</html>
", "layout/common.html", "D:\\xampp2\\htdocs\\PerMVC\\app\\views\\layout\\common.html");
    }
}
