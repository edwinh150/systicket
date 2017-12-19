<?php

/* BlogBundle:HistorialTicket:historial.html.twig */
class __TwigTemplate_49ff492e431e9fae91a12184e60f155a1685c3ca7b19120059f7e36a86395645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:HistorialTicket:historial.html.twig", 1);
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
        $__internal_c415623b8ee89e03e1f0b83e922c20ff5f1eefbbcfd88a31ab5bee53019839ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c415623b8ee89e03e1f0b83e922c20ff5f1eefbbcfd88a31ab5bee53019839ef->enter($__internal_c415623b8ee89e03e1f0b83e922c20ff5f1eefbbcfd88a31ab5bee53019839ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:HistorialTicket:historial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c415623b8ee89e03e1f0b83e922c20ff5f1eefbbcfd88a31ab5bee53019839ef->leave($__internal_c415623b8ee89e03e1f0b83e922c20ff5f1eefbbcfd88a31ab5bee53019839ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2764bb371bfe931f52fc1bf856833a55d6a17ee8c6b2334408a3610992e0f29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2764bb371bfe931f52fc1bf856833a55d6a17ee8c6b2334408a3610992e0f29f->enter($__internal_2764bb371bfe931f52fc1bf856833a55d6a17ee8c6b2334408a3610992e0f29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Historial
";
        
        $__internal_2764bb371bfe931f52fc1bf856833a55d6a17ee8c6b2334408a3610992e0f29f->leave($__internal_2764bb371bfe931f52fc1bf856833a55d6a17ee8c6b2334408a3610992e0f29f_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:HistorialTicket:historial.html.twig";
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
{% endblock %}", "BlogBundle:HistorialTicket:historial.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/HistorialTicket/historial.html.twig");
    }
}
