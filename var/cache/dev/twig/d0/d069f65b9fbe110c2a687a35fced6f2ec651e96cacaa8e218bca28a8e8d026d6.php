<?php

/* BlogBundle:UsuarioCategoria:usuariocategoria.html.twig */
class __TwigTemplate_b96d29d687a17e865fa6f20be028956b6dbaf7941d6bfbf8dc1d682006c66b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:UsuarioCategoria:usuariocategoria.html.twig", 1);
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
        $__internal_4270a928cd56bed9372e76205a0103611c8894f46f81b90bdacc6963f5f27627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4270a928cd56bed9372e76205a0103611c8894f46f81b90bdacc6963f5f27627->enter($__internal_4270a928cd56bed9372e76205a0103611c8894f46f81b90bdacc6963f5f27627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:UsuarioCategoria:usuariocategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4270a928cd56bed9372e76205a0103611c8894f46f81b90bdacc6963f5f27627->leave($__internal_4270a928cd56bed9372e76205a0103611c8894f46f81b90bdacc6963f5f27627_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2fa893ac87b8597162acef732d5416d9268200b3bc90e389119ee28e497ea4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fa893ac87b8597162acef732d5416d9268200b3bc90e389119ee28e497ea4d->enter($__internal_c2fa893ac87b8597162acef732d5416d9268200b3bc90e389119ee28e497ea4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de CategoriaUsuarios
";
        
        $__internal_c2fa893ac87b8597162acef732d5416d9268200b3bc90e389119ee28e497ea4d->leave($__internal_c2fa893ac87b8597162acef732d5416d9268200b3bc90e389119ee28e497ea4d_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:UsuarioCategoria:usuariocategoria.html.twig";
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
{% endblock %}", "BlogBundle:UsuarioCategoria:usuariocategoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/UsuarioCategoria/usuariocategoria.html.twig");
    }
}
