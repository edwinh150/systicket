<?php

/* @Blog/HistorialTicket/historial.html.twig */
class __TwigTemplate_47a452b890fb384afb1654b3567bdd8cfe1ae8f9d1061f87c9fa3e0d6430c0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/HistorialTicket/historial.html.twig", 1);
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
        $__internal_9ea16d9e86ccb8c8a9bdef660d62ca16f4a278e1c518e4115504cdff3be596db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea16d9e86ccb8c8a9bdef660d62ca16f4a278e1c518e4115504cdff3be596db->enter($__internal_9ea16d9e86ccb8c8a9bdef660d62ca16f4a278e1c518e4115504cdff3be596db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/HistorialTicket/historial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea16d9e86ccb8c8a9bdef660d62ca16f4a278e1c518e4115504cdff3be596db->leave($__internal_9ea16d9e86ccb8c8a9bdef660d62ca16f4a278e1c518e4115504cdff3be596db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c7705b7023652db8117ba469ef0ee0e8aa0040c100da8941bcec0926b57ab39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7705b7023652db8117ba469ef0ee0e8aa0040c100da8941bcec0926b57ab39->enter($__internal_0c7705b7023652db8117ba469ef0ee0e8aa0040c100da8941bcec0926b57ab39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Historial
";
        
        $__internal_0c7705b7023652db8117ba469ef0ee0e8aa0040c100da8941bcec0926b57ab39->leave($__internal_0c7705b7023652db8117ba469ef0ee0e8aa0040c100da8941bcec0926b57ab39_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/HistorialTicket/historial.html.twig";
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
{% endblock %}", "@Blog/HistorialTicket/historial.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\HistorialTicket\\historial.html.twig");
    }
}
