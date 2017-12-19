<?php

/* Ticket/ticket.html.twig */
class __TwigTemplate_289cb98ed27509f429c9245b445869c96fbbb26a836034640279113cf4c0ea86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ticket/ticket.html.twig", 1);
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
        $__internal_3e5c522a455839cca57ea05aec52f9f090327aa4d2d3ed4050cc253dced95ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5c522a455839cca57ea05aec52f9f090327aa4d2d3ed4050cc253dced95ff1->enter($__internal_3e5c522a455839cca57ea05aec52f9f090327aa4d2d3ed4050cc253dced95ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ticket/ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5c522a455839cca57ea05aec52f9f090327aa4d2d3ed4050cc253dced95ff1->leave($__internal_3e5c522a455839cca57ea05aec52f9f090327aa4d2d3ed4050cc253dced95ff1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e14394d9ad13d8fa0f4658b4a122ec15a3349d1d09fd71fa1dbd31344c7cbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e14394d9ad13d8fa0f4658b4a122ec15a3349d1d09fd71fa1dbd31344c7cbbf->enter($__internal_5e14394d9ad13d8fa0f4658b4a122ec15a3349d1d09fd71fa1dbd31344c7cbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Ticket
";
        
        $__internal_5e14394d9ad13d8fa0f4658b4a122ec15a3349d1d09fd71fa1dbd31344c7cbbf->leave($__internal_5e14394d9ad13d8fa0f4658b4a122ec15a3349d1d09fd71fa1dbd31344c7cbbf_prof);

    }

    public function getTemplateName()
    {
        return "Ticket/ticket.html.twig";
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
{% endblock %}", "Ticket/ticket.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Ticket\\ticket.html.twig");
    }
}
