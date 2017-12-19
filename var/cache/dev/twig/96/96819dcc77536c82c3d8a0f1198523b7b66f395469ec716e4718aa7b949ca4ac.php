<?php

/* @Blog/roles/roles.html.twig */
class __TwigTemplate_a71bd081ed11ea4c73a7fd8af955816d03e38f6a2997d2d7a38caf17ea00502b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/roles/roles.html.twig", 1);
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
        $__internal_69013941cf7800a6071f90bd616c10ecf89ae176641fabe75b01e9b1322e2f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69013941cf7800a6071f90bd616c10ecf89ae176641fabe75b01e9b1322e2f6a->enter($__internal_69013941cf7800a6071f90bd616c10ecf89ae176641fabe75b01e9b1322e2f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/roles/roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69013941cf7800a6071f90bd616c10ecf89ae176641fabe75b01e9b1322e2f6a->leave($__internal_69013941cf7800a6071f90bd616c10ecf89ae176641fabe75b01e9b1322e2f6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54de629f98996aedaace46706ad88a5ba93d3998dcce04d5ce89440d1bf99293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54de629f98996aedaace46706ad88a5ba93d3998dcce04d5ce89440d1bf99293->enter($__internal_54de629f98996aedaace46706ad88a5ba93d3998dcce04d5ce89440d1bf99293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Roles
";
        
        $__internal_54de629f98996aedaace46706ad88a5ba93d3998dcce04d5ce89440d1bf99293->leave($__internal_54de629f98996aedaace46706ad88a5ba93d3998dcce04d5ce89440d1bf99293_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/roles/roles.html.twig";
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
   Lista de Roles
{% endblock %}", "@Blog/roles/roles.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\roles\\roles.html.twig");
    }
}
