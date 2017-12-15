<?php

/* :roles:roles.html.twig */
class __TwigTemplate_947c9b79fe9775813d2ff3dda156b013e3c07148ca40b6c9d5f21a0e93beac4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":roles:roles.html.twig", 1);
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
        $__internal_049319e894880c8f9fe43d6b743a44b08933bc2940419b087045432394068db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049319e894880c8f9fe43d6b743a44b08933bc2940419b087045432394068db3->enter($__internal_049319e894880c8f9fe43d6b743a44b08933bc2940419b087045432394068db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":roles:roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_049319e894880c8f9fe43d6b743a44b08933bc2940419b087045432394068db3->leave($__internal_049319e894880c8f9fe43d6b743a44b08933bc2940419b087045432394068db3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bb4b9e020676ce56bc66b9d20fbde466f27905f78b4d1b8466a3f5fb0de4897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb4b9e020676ce56bc66b9d20fbde466f27905f78b4d1b8466a3f5fb0de4897->enter($__internal_1bb4b9e020676ce56bc66b9d20fbde466f27905f78b4d1b8466a3f5fb0de4897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Roles
";
        
        $__internal_1bb4b9e020676ce56bc66b9d20fbde466f27905f78b4d1b8466a3f5fb0de4897->leave($__internal_1bb4b9e020676ce56bc66b9d20fbde466f27905f78b4d1b8466a3f5fb0de4897_prof);

    }

    public function getTemplateName()
    {
        return ":roles:roles.html.twig";
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
{% endblock %}", ":roles:roles.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/roles/roles.html.twig");
    }
}
