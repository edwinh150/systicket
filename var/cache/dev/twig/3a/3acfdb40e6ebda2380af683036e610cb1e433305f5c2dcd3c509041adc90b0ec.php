<?php

/* @Blog/base.html.twig */
class __TwigTemplate_da7966bdb2fe05a56dd81311c8f514cdba4d44585a4fb68bc1881c7e4d5a5b4d extends Twig_Template
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
        $__internal_fb1b505b1fa97e52fd2eb17b19e628f1d5d05647785989fa6e9133d977a81afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1b505b1fa97e52fd2eb17b19e628f1d5d05647785989fa6e9133d977a81afc->enter($__internal_fb1b505b1fa97e52fd2eb17b19e628f1d5d05647785989fa6e9133d977a81afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"something like that\">
    <meta name=\"author\" content=\"Edwin Hidalgo\">
    

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
      <a class=\"navbar-brand\" href=\"/\">SysTicket</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/nuevo\">Usuarios <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/vista\">Listar Usuarios </a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Busqueda\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Buscar </button>
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
        
        $__internal_fb1b505b1fa97e52fd2eb17b19e628f1d5d05647785989fa6e9133d977a81afc->leave($__internal_fb1b505b1fa97e52fd2eb17b19e628f1d5d05647785989fa6e9133d977a81afc_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b9bfc6c303aa10c58c515b6e111818af00d3523d2504a7cce9f0d565bc9836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b9bfc6c303aa10c58c515b6e111818af00d3523d2504a7cce9f0d565bc9836->enter($__internal_77b9bfc6c303aa10c58c515b6e111818af00d3523d2504a7cce9f0d565bc9836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SysTicket";
        
        $__internal_77b9bfc6c303aa10c58c515b6e111818af00d3523d2504a7cce9f0d565bc9836->leave($__internal_77b9bfc6c303aa10c58c515b6e111818af00d3523d2504a7cce9f0d565bc9836_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ac4bf3e76bbe6332bb9599f0d8ea8761c63a0c0a0ad38df42a19840b7eed964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac4bf3e76bbe6332bb9599f0d8ea8761c63a0c0a0ad38df42a19840b7eed964->enter($__internal_0ac4bf3e76bbe6332bb9599f0d8ea8761c63a0c0a0ad38df42a19840b7eed964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_0ac4bf3e76bbe6332bb9599f0d8ea8761c63a0c0a0ad38df42a19840b7eed964->leave($__internal_0ac4bf3e76bbe6332bb9599f0d8ea8761c63a0c0a0ad38df42a19840b7eed964_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/base.html.twig";
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
    <meta name=\"author\" content=\"Edwin Hidalgo\">
    

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
      <a class=\"navbar-brand\" href=\"/\">SysTicket</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/nuevo\">Usuarios <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://localhost:8000/usuario/vista\">Listar Usuarios </a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Busqueda\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Buscar </button>
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
", "@Blog/base.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\base.html.twig");
    }
}
