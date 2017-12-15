<?php

/* Categoria/categoria.html.twig */
class __TwigTemplate_45e2bab71dddbfef051ed0b7ce215e7b09ab463a24c60c8b8c8ae4a609d63724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Categoria/categoria.html.twig", 1);
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
        $__internal_0ad59f6e0328644581355720f23fb24bcb29efbc8af58600ca961df3068d3569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad59f6e0328644581355720f23fb24bcb29efbc8af58600ca961df3068d3569->enter($__internal_0ad59f6e0328644581355720f23fb24bcb29efbc8af58600ca961df3068d3569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Categoria/categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad59f6e0328644581355720f23fb24bcb29efbc8af58600ca961df3068d3569->leave($__internal_0ad59f6e0328644581355720f23fb24bcb29efbc8af58600ca961df3068d3569_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d098069d6c71474f28761f9c3415faacf326bae2e9996f608d53cba1b31edfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d098069d6c71474f28761f9c3415faacf326bae2e9996f608d53cba1b31edfb3->enter($__internal_d098069d6c71474f28761f9c3415faacf326bae2e9996f608d53cba1b31edfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Categoria
";
        
        $__internal_d098069d6c71474f28761f9c3415faacf326bae2e9996f608d53cba1b31edfb3->leave($__internal_d098069d6c71474f28761f9c3415faacf326bae2e9996f608d53cba1b31edfb3_prof);

    }

    public function getTemplateName()
    {
        return "Categoria/categoria.html.twig";
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
   Lista de Categoria
{% endblock %}", "Categoria/categoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Categoria\\categoria.html.twig");
    }
}
