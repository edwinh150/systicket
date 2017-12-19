<?php

/* HistorialTicket/historial.html.twig */
class __TwigTemplate_eaf2792f2390f4e490e38c8b7aafda8b0aee8293fafc9d40e768e46da75efba1 extends Twig_Template
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
        $__internal_5a769178f6a1f17d7aa6898cd70c2101cceea25e280e83fd01f174d35e6d0e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a769178f6a1f17d7aa6898cd70c2101cceea25e280e83fd01f174d35e6d0e7b->enter($__internal_5a769178f6a1f17d7aa6898cd70c2101cceea25e280e83fd01f174d35e6d0e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HistorialTicket/historial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a769178f6a1f17d7aa6898cd70c2101cceea25e280e83fd01f174d35e6d0e7b->leave($__internal_5a769178f6a1f17d7aa6898cd70c2101cceea25e280e83fd01f174d35e6d0e7b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6346d39c2f728c4f0b1acf366566ded14a62144060730df920e7296bae4db58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6346d39c2f728c4f0b1acf366566ded14a62144060730df920e7296bae4db58e->enter($__internal_6346d39c2f728c4f0b1acf366566ded14a62144060730df920e7296bae4db58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Historial
";
        
        $__internal_6346d39c2f728c4f0b1acf366566ded14a62144060730df920e7296bae4db58e->leave($__internal_6346d39c2f728c4f0b1acf366566ded14a62144060730df920e7296bae4db58e_prof);

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
