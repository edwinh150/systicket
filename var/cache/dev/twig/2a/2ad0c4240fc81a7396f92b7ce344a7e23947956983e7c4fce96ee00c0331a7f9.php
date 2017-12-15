<?php

/* :Notas:notas.html.twig */
class __TwigTemplate_39e2212d212d16d4086269e894c76adab9f78ca77d78f5e27db61f31c82dee5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Notas:notas.html.twig", 1);
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
        $__internal_f3dc97a21d915d04984c32d1bbc35d9eecbaf75b8275ad6292fd0af6edbac4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dc97a21d915d04984c32d1bbc35d9eecbaf75b8275ad6292fd0af6edbac4f2->enter($__internal_f3dc97a21d915d04984c32d1bbc35d9eecbaf75b8275ad6292fd0af6edbac4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Notas:notas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3dc97a21d915d04984c32d1bbc35d9eecbaf75b8275ad6292fd0af6edbac4f2->leave($__internal_f3dc97a21d915d04984c32d1bbc35d9eecbaf75b8275ad6292fd0af6edbac4f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a543a35d7cb346af6956ba6e042addae9b9e0c23f4b89e320710b3ee6c0a433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a543a35d7cb346af6956ba6e042addae9b9e0c23f4b89e320710b3ee6c0a433e->enter($__internal_a543a35d7cb346af6956ba6e042addae9b9e0c23f4b89e320710b3ee6c0a433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Notas
";
        
        $__internal_a543a35d7cb346af6956ba6e042addae9b9e0c23f4b89e320710b3ee6c0a433e->leave($__internal_a543a35d7cb346af6956ba6e042addae9b9e0c23f4b89e320710b3ee6c0a433e_prof);

    }

    public function getTemplateName()
    {
        return ":Notas:notas.html.twig";
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
{% endblock %}", ":Notas:notas.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/Notas/notas.html.twig");
    }
}
