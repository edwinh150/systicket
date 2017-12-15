<?php

/* :Ticket:ticket.html.twig */
class __TwigTemplate_5282c06021f371c2984c34fc36d91b01e70bdf03ac03d41761c701f9b09facf6 extends Twig_Template
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
        $__internal_9f9ec01a9e86aaf925d72861bd216e1a8b8f2d0931cc35cea2c8a01fd4fb78b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9ec01a9e86aaf925d72861bd216e1a8b8f2d0931cc35cea2c8a01fd4fb78b2->enter($__internal_9f9ec01a9e86aaf925d72861bd216e1a8b8f2d0931cc35cea2c8a01fd4fb78b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9ec01a9e86aaf925d72861bd216e1a8b8f2d0931cc35cea2c8a01fd4fb78b2->leave($__internal_9f9ec01a9e86aaf925d72861bd216e1a8b8f2d0931cc35cea2c8a01fd4fb78b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03704bd0dcaead9d4b729ee1e3f6612f4ccf09a4202c3f7f54a6dc505eae476c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03704bd0dcaead9d4b729ee1e3f6612f4ccf09a4202c3f7f54a6dc505eae476c->enter($__internal_03704bd0dcaead9d4b729ee1e3f6612f4ccf09a4202c3f7f54a6dc505eae476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Ticket
";
        
        $__internal_03704bd0dcaead9d4b729ee1e3f6612f4ccf09a4202c3f7f54a6dc505eae476c->leave($__internal_03704bd0dcaead9d4b729ee1e3f6612f4ccf09a4202c3f7f54a6dc505eae476c_prof);

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
