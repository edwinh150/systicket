<?php

/* :HistorialTicket:historial.html.twig */
class __TwigTemplate_73c9653fb9bfb6da9e54f738a26ee4636d2d83339ae9b0455883ea81b32b0103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":HistorialTicket:historial.html.twig", 1);
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
        $__internal_e0d472d65026eb8db8ee9c26cba3c5fad188c850c671a6928e172c8fdde9cae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d472d65026eb8db8ee9c26cba3c5fad188c850c671a6928e172c8fdde9cae3->enter($__internal_e0d472d65026eb8db8ee9c26cba3c5fad188c850c671a6928e172c8fdde9cae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":HistorialTicket:historial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d472d65026eb8db8ee9c26cba3c5fad188c850c671a6928e172c8fdde9cae3->leave($__internal_e0d472d65026eb8db8ee9c26cba3c5fad188c850c671a6928e172c8fdde9cae3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0ac64345cab0b8ab676802b0e6b3b1ad130d2ed1285c8bea21b4c805ddffd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ac64345cab0b8ab676802b0e6b3b1ad130d2ed1285c8bea21b4c805ddffd97->enter($__internal_d0ac64345cab0b8ab676802b0e6b3b1ad130d2ed1285c8bea21b4c805ddffd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Historial
";
        
        $__internal_d0ac64345cab0b8ab676802b0e6b3b1ad130d2ed1285c8bea21b4c805ddffd97->leave($__internal_d0ac64345cab0b8ab676802b0e6b3b1ad130d2ed1285c8bea21b4c805ddffd97_prof);

    }

    public function getTemplateName()
    {
        return ":HistorialTicket:historial.html.twig";
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
{% endblock %}", ":HistorialTicket:historial.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/HistorialTicket/historial.html.twig");
    }
}
