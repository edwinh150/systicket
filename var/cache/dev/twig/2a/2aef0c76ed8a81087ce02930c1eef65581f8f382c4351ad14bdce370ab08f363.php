<?php

/* :UsuarioCategoria:usuariocategoria.html.twig */
class __TwigTemplate_385165934bea62378eb7be703496d6c9ddd134c6e1cc5071d73ddcf2d4b00f08 extends Twig_Template
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
        $__internal_1230143c6c0f8b861680fb348950d45b477621fa70dd28c7e63dc7737519b0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1230143c6c0f8b861680fb348950d45b477621fa70dd28c7e63dc7737519b0c0->enter($__internal_1230143c6c0f8b861680fb348950d45b477621fa70dd28c7e63dc7737519b0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":UsuarioCategoria:usuariocategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1230143c6c0f8b861680fb348950d45b477621fa70dd28c7e63dc7737519b0c0->leave($__internal_1230143c6c0f8b861680fb348950d45b477621fa70dd28c7e63dc7737519b0c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f085b77447e8e314abab8cc995ce36dd1f6ad6823f518acba96d8808ef8eef17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f085b77447e8e314abab8cc995ce36dd1f6ad6823f518acba96d8808ef8eef17->enter($__internal_f085b77447e8e314abab8cc995ce36dd1f6ad6823f518acba96d8808ef8eef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de CategoriaUsuarios
";
        
        $__internal_f085b77447e8e314abab8cc995ce36dd1f6ad6823f518acba96d8808ef8eef17->leave($__internal_f085b77447e8e314abab8cc995ce36dd1f6ad6823f518acba96d8808ef8eef17_prof);

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
