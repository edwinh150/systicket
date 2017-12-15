<?php

/* UsuarioCategoria/usuariocategoria.html.twig */
class __TwigTemplate_1b8a314b5cfc593e39060cd69ae0a412a7bb27fa46e8fc9513098eb1aeb9b3f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuarioCategoria/usuariocategoria.html.twig", 1);
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
        $__internal_6493aa9674e82f8a5aec81991c11b53de90fa80af01b1e9d75407f3f92e77e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6493aa9674e82f8a5aec81991c11b53de90fa80af01b1e9d75407f3f92e77e61->enter($__internal_6493aa9674e82f8a5aec81991c11b53de90fa80af01b1e9d75407f3f92e77e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioCategoria/usuariocategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6493aa9674e82f8a5aec81991c11b53de90fa80af01b1e9d75407f3f92e77e61->leave($__internal_6493aa9674e82f8a5aec81991c11b53de90fa80af01b1e9d75407f3f92e77e61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5daf18993d04f4a6b6154fe7ca48d95a40003153a20f98f3720893438a22d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5daf18993d04f4a6b6154fe7ca48d95a40003153a20f98f3720893438a22d22->enter($__internal_e5daf18993d04f4a6b6154fe7ca48d95a40003153a20f98f3720893438a22d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de CategoriaUsuarios
";
        
        $__internal_e5daf18993d04f4a6b6154fe7ca48d95a40003153a20f98f3720893438a22d22->leave($__internal_e5daf18993d04f4a6b6154fe7ca48d95a40003153a20f98f3720893438a22d22_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioCategoria/usuariocategoria.html.twig";
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
   Lista de CategoriaUsuarios
{% endblock %}", "UsuarioCategoria/usuariocategoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\UsuarioCategoria\\usuariocategoria.html.twig");
    }
}
