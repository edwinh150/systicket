<?php

/* BlogBundle:Notas:notas.html.twig */
class __TwigTemplate_efcf75ca9b720031fedb21ffd2610a4ba7255389ae77d48075eabe92433c1400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Notas:notas.html.twig", 1);
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
        $__internal_4ec8b68ae74953e2576a4e4168da51e8272a95835ac6b3c95e6835c987d1c533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec8b68ae74953e2576a4e4168da51e8272a95835ac6b3c95e6835c987d1c533->enter($__internal_4ec8b68ae74953e2576a4e4168da51e8272a95835ac6b3c95e6835c987d1c533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Notas:notas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec8b68ae74953e2576a4e4168da51e8272a95835ac6b3c95e6835c987d1c533->leave($__internal_4ec8b68ae74953e2576a4e4168da51e8272a95835ac6b3c95e6835c987d1c533_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaca21b7c143f1c734fe2b6e9465c5c3161195c8a4a4b3bc7ecb908c3d65ad23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaca21b7c143f1c734fe2b6e9465c5c3161195c8a4a4b3bc7ecb908c3d65ad23->enter($__internal_eaca21b7c143f1c734fe2b6e9465c5c3161195c8a4a4b3bc7ecb908c3d65ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Notas
";
        
        $__internal_eaca21b7c143f1c734fe2b6e9465c5c3161195c8a4a4b3bc7ecb908c3d65ad23->leave($__internal_eaca21b7c143f1c734fe2b6e9465c5c3161195c8a4a4b3bc7ecb908c3d65ad23_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Notas:notas.html.twig";
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
{% endblock %}", "BlogBundle:Notas:notas.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/Notas/notas.html.twig");
    }
}
