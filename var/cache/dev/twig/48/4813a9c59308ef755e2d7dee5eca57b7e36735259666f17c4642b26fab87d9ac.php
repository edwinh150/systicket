<?php

/* ::base.html.twig */
class __TwigTemplate_318cf844b3b50889a08c7e70ebaadd8510b79d96ef20dde18fa788ee60fe12ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b86309298b2a59a2712c802d12aab926d0377b49999c9e33a3e9e926e763e1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86309298b2a59a2712c802d12aab926d0377b49999c9e33a3e9e926e763e1b9->enter($__internal_b86309298b2a59a2712c802d12aab926d0377b49999c9e33a3e9e926e763e1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"something like that\">
    <meta name=\"author\" content=\"Francis Castillo\">
    

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/navbar-top-fixed.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body>

    <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">SysTicket</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/cargar\">Usuarios <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/vista\">Lista</a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container\">
      ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script> -->
  </body>
</html>
";
        
        $__internal_b86309298b2a59a2712c802d12aab926d0377b49999c9e33a3e9e926e763e1b9->leave($__internal_b86309298b2a59a2712c802d12aab926d0377b49999c9e33a3e9e926e763e1b9_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c11c4a565a0d361823270f38ea62de221cca7aa201c1cc8cadbf97de5c7ce2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11c4a565a0d361823270f38ea62de221cca7aa201c1cc8cadbf97de5c7ce2ce->enter($__internal_c11c4a565a0d361823270f38ea62de221cca7aa201c1cc8cadbf97de5c7ce2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SysTicket";
        
        $__internal_c11c4a565a0d361823270f38ea62de221cca7aa201c1cc8cadbf97de5c7ce2ce->leave($__internal_c11c4a565a0d361823270f38ea62de221cca7aa201c1cc8cadbf97de5c7ce2ce_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_621e0b8fd603dbd763a5af993f045be1ac3687f42cda7adc5d82c9c5177dab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621e0b8fd603dbd763a5af993f045be1ac3687f42cda7adc5d82c9c5177dab42->enter($__internal_621e0b8fd603dbd763a5af993f045be1ac3687f42cda7adc5d82c9c5177dab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_621e0b8fd603dbd763a5af993f045be1ac3687f42cda7adc5d82c9c5177dab42->leave($__internal_621e0b8fd603dbd763a5af993f045be1ac3687f42cda7adc5d82c9c5177dab42_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  108 => 10,  95 => 52,  91 => 51,  87 => 50,  79 => 44,  77 => 43,  47 => 16,  41 => 13,  35 => 10,  24 => 1,);
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"something like that\">
    <meta name=\"author\" content=\"Francis Castillo\">
    

    <title>{% block title %}SysTicket{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/navbar-top-fixed.css') }}\" rel=\"stylesheet\">
  </head>

  <body>

    <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">SysTicket</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/cargar\">Usuarios <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/vista\">Lista</a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container\">
      {% block body %} {% endblock %}
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"{{ asset('assets/js/jquery-3.1.1.slim.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.js') }}\"></script>
    <!-- <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script> -->
  </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/base.html.twig");
    }
}
