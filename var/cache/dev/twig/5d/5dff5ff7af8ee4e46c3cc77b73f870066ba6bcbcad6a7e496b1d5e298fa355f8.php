<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_39ab6b960e58f348f400194bdfc52bae821172b026e6025188e74f3af9a91255 extends Twig_Template
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
        $__internal_9857fdef9972e496187f4b85ac98bc6151e9b2f5fa1685d2d91adc5dce8caa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9857fdef9972e496187f4b85ac98bc6151e9b2f5fa1685d2d91adc5dce8caa95->enter($__internal_9857fdef9972e496187f4b85ac98bc6151e9b2f5fa1685d2d91adc5dce8caa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    

    <title>SysTicket</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/navbar-top-fixed.css"), "html", null, true);
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
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">My Ticket <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Tickets</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Add</a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container\">
      <div class=\"jumbotron\">
        <h1>Navbar example</h1>
        <p class=\"lead\">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class=\"btn btn-lg btn-primary\" href=\"../../components/navbar/\" role=\"button\">View navbar docs &raquo;</a>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <!-- <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script> -->
  </body>
</html>
";
        
        $__internal_9857fdef9972e496187f4b85ac98bc6151e9b2f5fa1685d2d91adc5dce8caa95->leave($__internal_9857fdef9972e496187f4b85ac98bc6151e9b2f5fa1685d2d91adc5dce8caa95_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  36 => 13,  22 => 1,);
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
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    

    <title>SysTicket</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('css/navbar-top-fixed.css')}}\" rel=\"stylesheet\">
  </head>

  <body>

    <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">SysTicket</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">My Ticket <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Tickets</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Add</a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container\">
      <div class=\"jumbotron\">
        <h1>Navbar example</h1>
        <p class=\"lead\">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class=\"btn btn-lg btn-primary\" href=\"../../components/navbar/\" role=\"button\">View navbar docs &raquo;</a>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <!-- <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script> -->
  </body>
</html>
", "BlogBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
