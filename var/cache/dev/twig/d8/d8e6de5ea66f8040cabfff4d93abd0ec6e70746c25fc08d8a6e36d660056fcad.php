<?php

/* @Blog/Categoria/categoria.html.twig */
class __TwigTemplate_925e4d173f22e94a20d9043669f09b419a864c2003e9a5cccf21db6a3e7282f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/Categoria/categoria.html.twig", 1);
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
        $__internal_bcfe2ff76a7b7048b37aa0b168823e891996e52e1a902ef046ae1383bbf378a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfe2ff76a7b7048b37aa0b168823e891996e52e1a902ef046ae1383bbf378a8->enter($__internal_bcfe2ff76a7b7048b37aa0b168823e891996e52e1a902ef046ae1383bbf378a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Categoria/categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcfe2ff76a7b7048b37aa0b168823e891996e52e1a902ef046ae1383bbf378a8->leave($__internal_bcfe2ff76a7b7048b37aa0b168823e891996e52e1a902ef046ae1383bbf378a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b59c29c18e4057ccd4838ab0498d580f4487e2f2e9ac4049346c4d3d762ab51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b59c29c18e4057ccd4838ab0498d580f4487e2f2e9ac4049346c4d3d762ab51->enter($__internal_3b59c29c18e4057ccd4838ab0498d580f4487e2f2e9ac4049346c4d3d762ab51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Categoria
";
        
        $__internal_3b59c29c18e4057ccd4838ab0498d580f4487e2f2e9ac4049346c4d3d762ab51->leave($__internal_3b59c29c18e4057ccd4838ab0498d580f4487e2f2e9ac4049346c4d3d762ab51_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Categoria/categoria.html.twig";
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
{% endblock %}", "@Blog/Categoria/categoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\Categoria\\categoria.html.twig");
    }
}
