<?php

/* Notas/notas.html.twig */
class __TwigTemplate_2c22a74b159795528c57db9bd8c340d75f625019a6e59dafbfab01580d4145a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Notas/notas.html.twig", 1);
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
        $__internal_9a74a9f3b25136229b8036a520621da87a8d2cdbd33417ea63d6f042a5efa544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a74a9f3b25136229b8036a520621da87a8d2cdbd33417ea63d6f042a5efa544->enter($__internal_9a74a9f3b25136229b8036a520621da87a8d2cdbd33417ea63d6f042a5efa544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Notas/notas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a74a9f3b25136229b8036a520621da87a8d2cdbd33417ea63d6f042a5efa544->leave($__internal_9a74a9f3b25136229b8036a520621da87a8d2cdbd33417ea63d6f042a5efa544_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78312075f6a547da0e30da31ea81095bf75eafe03fa2668868e23b48dfdc3fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78312075f6a547da0e30da31ea81095bf75eafe03fa2668868e23b48dfdc3fd4->enter($__internal_78312075f6a547da0e30da31ea81095bf75eafe03fa2668868e23b48dfdc3fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Notas
";
        
        $__internal_78312075f6a547da0e30da31ea81095bf75eafe03fa2668868e23b48dfdc3fd4->leave($__internal_78312075f6a547da0e30da31ea81095bf75eafe03fa2668868e23b48dfdc3fd4_prof);

    }

    public function getTemplateName()
    {
        return "Notas/notas.html.twig";
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
   Lista de Notas
{% endblock %}", "Notas/notas.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Notas\\notas.html.twig");
    }
}
