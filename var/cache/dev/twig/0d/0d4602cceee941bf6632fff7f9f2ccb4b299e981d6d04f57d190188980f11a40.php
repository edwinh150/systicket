<?php

/* base1.html.twig */
class __TwigTemplate_a8e15b75a8d210137e9739c8cab36849d954835d2811e3d3be745aa315179ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9fd4f310d4c7bfd4bb5eb653080bd62d01fa99018bd4b0c23f8ee853939faa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fd4f310d4c7bfd4bb5eb653080bd62d01fa99018bd4b0c23f8ee853939faa4->enter($__internal_e9fd4f310d4c7bfd4bb5eb653080bd62d01fa99018bd4b0c23f8ee853939faa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e9fd4f310d4c7bfd4bb5eb653080bd62d01fa99018bd4b0c23f8ee853939faa4->leave($__internal_e9fd4f310d4c7bfd4bb5eb653080bd62d01fa99018bd4b0c23f8ee853939faa4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11363f32607c3ed677851bc93ee299c6acd66336537ab56751d1125c3f957965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11363f32607c3ed677851bc93ee299c6acd66336537ab56751d1125c3f957965->enter($__internal_11363f32607c3ed677851bc93ee299c6acd66336537ab56751d1125c3f957965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11363f32607c3ed677851bc93ee299c6acd66336537ab56751d1125c3f957965->leave($__internal_11363f32607c3ed677851bc93ee299c6acd66336537ab56751d1125c3f957965_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1eca04904a9addf34ba1e8d69e867ed8779e6284e14816e8447dcc3ffcca663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eca04904a9addf34ba1e8d69e867ed8779e6284e14816e8447dcc3ffcca663->enter($__internal_f1eca04904a9addf34ba1e8d69e867ed8779e6284e14816e8447dcc3ffcca663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f1eca04904a9addf34ba1e8d69e867ed8779e6284e14816e8447dcc3ffcca663->leave($__internal_f1eca04904a9addf34ba1e8d69e867ed8779e6284e14816e8447dcc3ffcca663_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bfe7d6cb44cc282d5baf95a3509084bec645aa8eb0e6f67bf2b926c44e0c4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfe7d6cb44cc282d5baf95a3509084bec645aa8eb0e6f67bf2b926c44e0c4f4->enter($__internal_5bfe7d6cb44cc282d5baf95a3509084bec645aa8eb0e6f67bf2b926c44e0c4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5bfe7d6cb44cc282d5baf95a3509084bec645aa8eb0e6f67bf2b926c44e0c4f4->leave($__internal_5bfe7d6cb44cc282d5baf95a3509084bec645aa8eb0e6f67bf2b926c44e0c4f4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa6fa21e0515d6020de40148b4ed21deac8d4794577d4acbd074a2d3428ad130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6fa21e0515d6020de40148b4ed21deac8d4794577d4acbd074a2d3428ad130->enter($__internal_aa6fa21e0515d6020de40148b4ed21deac8d4794577d4acbd074a2d3428ad130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa6fa21e0515d6020de40148b4ed21deac8d4794577d4acbd074a2d3428ad130->leave($__internal_aa6fa21e0515d6020de40148b4ed21deac8d4794577d4acbd074a2d3428ad130_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base1.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\base1.html.twig");
    }
}
