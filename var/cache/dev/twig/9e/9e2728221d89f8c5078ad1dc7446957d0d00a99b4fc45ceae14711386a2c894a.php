<?php

/* @Blog/UsuarioCategoria/usuariocategoria.html.twig */
class __TwigTemplate_54f8cebabc2416026ea77a2b0a24943f8be8a8afa596e31de1db9d5e79fa3d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/UsuarioCategoria/usuariocategoria.html.twig", 1);
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
        $__internal_fab15b2f9bc4ee24becb29492546a871609950f4db229744876e4ea46c962209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab15b2f9bc4ee24becb29492546a871609950f4db229744876e4ea46c962209->enter($__internal_fab15b2f9bc4ee24becb29492546a871609950f4db229744876e4ea46c962209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/UsuarioCategoria/usuariocategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab15b2f9bc4ee24becb29492546a871609950f4db229744876e4ea46c962209->leave($__internal_fab15b2f9bc4ee24becb29492546a871609950f4db229744876e4ea46c962209_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8afe974d1d6e9c46dc725c93d573a6c4c2f8c2cb324ea7ca8cdf7beef258cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8afe974d1d6e9c46dc725c93d573a6c4c2f8c2cb324ea7ca8cdf7beef258cc->enter($__internal_9c8afe974d1d6e9c46dc725c93d573a6c4c2f8c2cb324ea7ca8cdf7beef258cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de CategoriaUsuarios
";
        
        $__internal_9c8afe974d1d6e9c46dc725c93d573a6c4c2f8c2cb324ea7ca8cdf7beef258cc->leave($__internal_9c8afe974d1d6e9c46dc725c93d573a6c4c2f8c2cb324ea7ca8cdf7beef258cc_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/UsuarioCategoria/usuariocategoria.html.twig";
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
{% endblock %}", "@Blog/UsuarioCategoria/usuariocategoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\UsuarioCategoria\\usuariocategoria.html.twig");
    }
}
