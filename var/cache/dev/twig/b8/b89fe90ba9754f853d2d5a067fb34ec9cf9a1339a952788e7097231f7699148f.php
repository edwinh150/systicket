<?php

/* :Ticket:ticket.html.twig */
class __TwigTemplate_4bd97b4f1856334399b75d7daa80224471d2a4de3d08c08e17b78f79f5d9b5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Ticket:ticket.html.twig", 1);
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
        $__internal_3316c5a6a5a6f28f989ec9818da43d5c1bc18334d8f6801154765c1efd92b37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3316c5a6a5a6f28f989ec9818da43d5c1bc18334d8f6801154765c1efd92b37e->enter($__internal_3316c5a6a5a6f28f989ec9818da43d5c1bc18334d8f6801154765c1efd92b37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3316c5a6a5a6f28f989ec9818da43d5c1bc18334d8f6801154765c1efd92b37e->leave($__internal_3316c5a6a5a6f28f989ec9818da43d5c1bc18334d8f6801154765c1efd92b37e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b7f0da000e91bb36e132efb6e92e7393944de60ab8bf0c002fa9d144605a224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7f0da000e91bb36e132efb6e92e7393944de60ab8bf0c002fa9d144605a224->enter($__internal_1b7f0da000e91bb36e132efb6e92e7393944de60ab8bf0c002fa9d144605a224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Ticket
";
        
        $__internal_1b7f0da000e91bb36e132efb6e92e7393944de60ab8bf0c002fa9d144605a224->leave($__internal_1b7f0da000e91bb36e132efb6e92e7393944de60ab8bf0c002fa9d144605a224_prof);

    }

    public function getTemplateName()
    {
        return ":Ticket:ticket.html.twig";
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
   Lista de Ticket
{% endblock %}", ":Ticket:ticket.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/Ticket/ticket.html.twig");
    }
}
