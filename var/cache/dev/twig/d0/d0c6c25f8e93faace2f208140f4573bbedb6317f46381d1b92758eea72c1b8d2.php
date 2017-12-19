<?php

/* Notas/notas.html.twig */
class __TwigTemplate_314fde779918c275d723fb576bcb5bf981aff8524d6f92d540a291d0f8b58890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Notas/notas.html.twig", 1);
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
        $__internal_e554e8c2c69aa2db5270d043a2266b826df2d88f6087b48d218b01c8484dc636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e554e8c2c69aa2db5270d043a2266b826df2d88f6087b48d218b01c8484dc636->enter($__internal_e554e8c2c69aa2db5270d043a2266b826df2d88f6087b48d218b01c8484dc636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Notas/notas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e554e8c2c69aa2db5270d043a2266b826df2d88f6087b48d218b01c8484dc636->leave($__internal_e554e8c2c69aa2db5270d043a2266b826df2d88f6087b48d218b01c8484dc636_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17d9ed21688416aca27041bb24d406feae9b7d3531d9d83f0188ce216cb37958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d9ed21688416aca27041bb24d406feae9b7d3531d9d83f0188ce216cb37958->enter($__internal_17d9ed21688416aca27041bb24d406feae9b7d3531d9d83f0188ce216cb37958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Notas
";
        
        $__internal_17d9ed21688416aca27041bb24d406feae9b7d3531d9d83f0188ce216cb37958->leave($__internal_17d9ed21688416aca27041bb24d406feae9b7d3531d9d83f0188ce216cb37958_prof);

    }

    public function getTemplateName()
    {
        return "Notas/notas.html.twig";
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
   Lista de Notas
{% endblock %}", "Notas/notas.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Notas\\notas.html.twig");
    }
}
