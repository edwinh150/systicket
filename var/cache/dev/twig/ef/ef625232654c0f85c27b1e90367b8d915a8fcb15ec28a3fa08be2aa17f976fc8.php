<?php

/* HistorialTicket/historial.html.twig */
class __TwigTemplate_64925bdab4e4c564726336410a55700ed284438544f49311388e3bc02a33a90f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "HistorialTicket/historial.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_483948336e81f003aed57687e0c875b29973d0a6f51d2d10b72da6c56fae81e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483948336e81f003aed57687e0c875b29973d0a6f51d2d10b72da6c56fae81e9->enter($__internal_483948336e81f003aed57687e0c875b29973d0a6f51d2d10b72da6c56fae81e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HistorialTicket/historial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_483948336e81f003aed57687e0c875b29973d0a6f51d2d10b72da6c56fae81e9->leave($__internal_483948336e81f003aed57687e0c875b29973d0a6f51d2d10b72da6c56fae81e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a680dd78a804e07b09bfed10353cc596c571662a6c708459f50b44c198d801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a680dd78a804e07b09bfed10353cc596c571662a6c708459f50b44c198d801->enter($__internal_74a680dd78a804e07b09bfed10353cc596c571662a6c708459f50b44c198d801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Historial
";
        
        $__internal_74a680dd78a804e07b09bfed10353cc596c571662a6c708459f50b44c198d801->leave($__internal_74a680dd78a804e07b09bfed10353cc596c571662a6c708459f50b44c198d801_prof);

    }

    public function getTemplateName()
    {
        return "HistorialTicket/historial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   Lista de Historial
{% endblock %}", "HistorialTicket/historial.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\HistorialTicket\\historial.html.twig");
    }
}
