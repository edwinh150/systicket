<?php

/* BlogBundle:Categoria:categoria.html.twig */
class __TwigTemplate_f6e19b6f3aea557a58f7e56f3e967fad3eb4ae14b93561867f2fd962cd189a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Categoria:categoria.html.twig", 1);
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
        $__internal_ad8409e87c4f90bb5a1ceca82330fdcc33ae603d0896187c6f5649cb383a41e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8409e87c4f90bb5a1ceca82330fdcc33ae603d0896187c6f5649cb383a41e2->enter($__internal_ad8409e87c4f90bb5a1ceca82330fdcc33ae603d0896187c6f5649cb383a41e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Categoria:categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8409e87c4f90bb5a1ceca82330fdcc33ae603d0896187c6f5649cb383a41e2->leave($__internal_ad8409e87c4f90bb5a1ceca82330fdcc33ae603d0896187c6f5649cb383a41e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a41bbde022e62a8a284dfec9295a1e2f5437065aa7404d2a346614f9f634af68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41bbde022e62a8a284dfec9295a1e2f5437065aa7404d2a346614f9f634af68->enter($__internal_a41bbde022e62a8a284dfec9295a1e2f5437065aa7404d2a346614f9f634af68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Categoria
";
        
        $__internal_a41bbde022e62a8a284dfec9295a1e2f5437065aa7404d2a346614f9f634af68->leave($__internal_a41bbde022e62a8a284dfec9295a1e2f5437065aa7404d2a346614f9f634af68_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Categoria:categoria.html.twig";
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
{% endblock %}", "BlogBundle:Categoria:categoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/Categoria/categoria.html.twig");
    }
}
