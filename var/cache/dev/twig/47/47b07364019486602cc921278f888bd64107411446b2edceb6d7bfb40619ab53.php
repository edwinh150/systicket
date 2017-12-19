<?php

/* :HistorialTicket:historial.html.twig */
class __TwigTemplate_83bf0c20f8249fe84f730056093df9ecb23bd3bd2a6d74f1e38453169b45a3ea extends Twig_Template
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
        $__internal_a21f13811134a063b6c61afe580fa36483c228b3f9c8297a2579574389e7a51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21f13811134a063b6c61afe580fa36483c228b3f9c8297a2579574389e7a51c->enter($__internal_a21f13811134a063b6c61afe580fa36483c228b3f9c8297a2579574389e7a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":HistorialTicket:historial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21f13811134a063b6c61afe580fa36483c228b3f9c8297a2579574389e7a51c->leave($__internal_a21f13811134a063b6c61afe580fa36483c228b3f9c8297a2579574389e7a51c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7cf54b07bc37e4fa48f4671699c360c460911e0af34f4ae4fb497d5dea2eb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cf54b07bc37e4fa48f4671699c360c460911e0af34f4ae4fb497d5dea2eb6c->enter($__internal_d7cf54b07bc37e4fa48f4671699c360c460911e0af34f4ae4fb497d5dea2eb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Historial
";
        
        $__internal_d7cf54b07bc37e4fa48f4671699c360c460911e0af34f4ae4fb497d5dea2eb6c->leave($__internal_d7cf54b07bc37e4fa48f4671699c360c460911e0af34f4ae4fb497d5dea2eb6c_prof);

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
