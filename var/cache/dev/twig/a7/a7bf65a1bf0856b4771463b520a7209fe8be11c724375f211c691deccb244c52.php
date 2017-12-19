<?php

/* @Blog/Ticket/ticket.html.twig */
class __TwigTemplate_d3ced4fb5a7337ab862279a8f6fa307af4a3d5e4023d3606666d2f2a95fdca90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/Ticket/ticket.html.twig", 1);
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
        $__internal_2ec189779c891846331d2e340366d0959bb34f3be2583b359347a32512ad2441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec189779c891846331d2e340366d0959bb34f3be2583b359347a32512ad2441->enter($__internal_2ec189779c891846331d2e340366d0959bb34f3be2583b359347a32512ad2441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Ticket/ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec189779c891846331d2e340366d0959bb34f3be2583b359347a32512ad2441->leave($__internal_2ec189779c891846331d2e340366d0959bb34f3be2583b359347a32512ad2441_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e3cbfeeed05b04b35bbe1853d23bd83b5476d01793290e416468ec908ee9f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3cbfeeed05b04b35bbe1853d23bd83b5476d01793290e416468ec908ee9f35->enter($__internal_9e3cbfeeed05b04b35bbe1853d23bd83b5476d01793290e416468ec908ee9f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Ticket
";
        
        $__internal_9e3cbfeeed05b04b35bbe1853d23bd83b5476d01793290e416468ec908ee9f35->leave($__internal_9e3cbfeeed05b04b35bbe1853d23bd83b5476d01793290e416468ec908ee9f35_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Ticket/ticket.html.twig";
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
   Lista de Ticket
{% endblock %}", "@Blog/Ticket/ticket.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\Ticket\\ticket.html.twig");
    }
}
