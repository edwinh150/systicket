<?php

/* :UsuarioCategoria:usuariocategoria.html.twig */
class __TwigTemplate_e530088d5ccc750418ca8aa18c589783c6c2bde0cab136b0f780c2a30d7496d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":UsuarioCategoria:usuariocategoria.html.twig", 1);
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
        $__internal_5694e6fcfd8632e64dcbe3d0a9894686fe8d410eacf3ed9adab1475a15021a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5694e6fcfd8632e64dcbe3d0a9894686fe8d410eacf3ed9adab1475a15021a0e->enter($__internal_5694e6fcfd8632e64dcbe3d0a9894686fe8d410eacf3ed9adab1475a15021a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":UsuarioCategoria:usuariocategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5694e6fcfd8632e64dcbe3d0a9894686fe8d410eacf3ed9adab1475a15021a0e->leave($__internal_5694e6fcfd8632e64dcbe3d0a9894686fe8d410eacf3ed9adab1475a15021a0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9925dc9f9910264ad4d325d6b4914ad0ba94281abccc9b5a369bdfc2e71ed499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9925dc9f9910264ad4d325d6b4914ad0ba94281abccc9b5a369bdfc2e71ed499->enter($__internal_9925dc9f9910264ad4d325d6b4914ad0ba94281abccc9b5a369bdfc2e71ed499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de CategoriaUsuarios
";
        
        $__internal_9925dc9f9910264ad4d325d6b4914ad0ba94281abccc9b5a369bdfc2e71ed499->leave($__internal_9925dc9f9910264ad4d325d6b4914ad0ba94281abccc9b5a369bdfc2e71ed499_prof);

    }

    public function getTemplateName()
    {
        return ":UsuarioCategoria:usuariocategoria.html.twig";
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
{% endblock %}", ":UsuarioCategoria:usuariocategoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/UsuarioCategoria/usuariocategoria.html.twig");
    }
}
