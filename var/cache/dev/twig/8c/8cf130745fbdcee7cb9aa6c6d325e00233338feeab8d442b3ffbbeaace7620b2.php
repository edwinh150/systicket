<?php

/* roles/roles.html.twig */
class __TwigTemplate_e5ec48f4d689cf8ba063101f8abe34428cf99a572259f57ef5ad527339aa8233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "roles/roles.html.twig", 1);
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
        $__internal_1985c092c242df3cab8a8bdd0ec3d5cc30e7980bda71dc0da0ab4aaba661a307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1985c092c242df3cab8a8bdd0ec3d5cc30e7980bda71dc0da0ab4aaba661a307->enter($__internal_1985c092c242df3cab8a8bdd0ec3d5cc30e7980bda71dc0da0ab4aaba661a307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "roles/roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1985c092c242df3cab8a8bdd0ec3d5cc30e7980bda71dc0da0ab4aaba661a307->leave($__internal_1985c092c242df3cab8a8bdd0ec3d5cc30e7980bda71dc0da0ab4aaba661a307_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b575422ea585b8083ca76a2f6f0e104d8a567294f1e888af8d1a0db98010684b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b575422ea585b8083ca76a2f6f0e104d8a567294f1e888af8d1a0db98010684b->enter($__internal_b575422ea585b8083ca76a2f6f0e104d8a567294f1e888af8d1a0db98010684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Roles
";
        
        $__internal_b575422ea585b8083ca76a2f6f0e104d8a567294f1e888af8d1a0db98010684b->leave($__internal_b575422ea585b8083ca76a2f6f0e104d8a567294f1e888af8d1a0db98010684b_prof);

    }

    public function getTemplateName()
    {
        return "roles/roles.html.twig";
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
{% endblock %}", "roles/roles.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\roles\\roles.html.twig");
    }
}
