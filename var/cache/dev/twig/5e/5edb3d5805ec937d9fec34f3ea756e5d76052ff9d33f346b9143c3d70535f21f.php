<?php

/* Categoria/categoria.html.twig */
class __TwigTemplate_b4e331a1a05cd6e3bb4db394b0d7b7ba323980e4ac6d69849cf6fc75a9a81eea extends Twig_Template
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
        $__internal_97a3df650af4150bfdda2f418ce3098b4d38f885ebb7eed4152bd3b2701f0244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a3df650af4150bfdda2f418ce3098b4d38f885ebb7eed4152bd3b2701f0244->enter($__internal_97a3df650af4150bfdda2f418ce3098b4d38f885ebb7eed4152bd3b2701f0244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Categoria/categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a3df650af4150bfdda2f418ce3098b4d38f885ebb7eed4152bd3b2701f0244->leave($__internal_97a3df650af4150bfdda2f418ce3098b4d38f885ebb7eed4152bd3b2701f0244_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e7554eff50d2a8420d68bd461af5124aa1758b632591e8760cbae0e2c90a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e7554eff50d2a8420d68bd461af5124aa1758b632591e8760cbae0e2c90a0a->enter($__internal_91e7554eff50d2a8420d68bd461af5124aa1758b632591e8760cbae0e2c90a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Categoria
";
        
        $__internal_91e7554eff50d2a8420d68bd461af5124aa1758b632591e8760cbae0e2c90a0a->leave($__internal_91e7554eff50d2a8420d68bd461af5124aa1758b632591e8760cbae0e2c90a0a_prof);

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
