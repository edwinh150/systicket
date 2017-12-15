<?php

/* Ticket/ticket.html.twig */
class __TwigTemplate_7ffa833249b4bb8aa8dffd1b11b5a3b477463d404f3052914c6b5ffc8bce2bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ticket/ticket.html.twig", 1);
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
        $__internal_91e6d41c7a21f717b6f9bc5935141347e75ec4ddf620c3bcb843656e41be96f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e6d41c7a21f717b6f9bc5935141347e75ec4ddf620c3bcb843656e41be96f4->enter($__internal_91e6d41c7a21f717b6f9bc5935141347e75ec4ddf620c3bcb843656e41be96f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ticket/ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e6d41c7a21f717b6f9bc5935141347e75ec4ddf620c3bcb843656e41be96f4->leave($__internal_91e6d41c7a21f717b6f9bc5935141347e75ec4ddf620c3bcb843656e41be96f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e2b3b21da59bf8e5e69469896844b83407b2688420eb0f705f30bbe681fd6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2b3b21da59bf8e5e69469896844b83407b2688420eb0f705f30bbe681fd6bc->enter($__internal_8e2b3b21da59bf8e5e69469896844b83407b2688420eb0f705f30bbe681fd6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Ticket
";
        
        $__internal_8e2b3b21da59bf8e5e69469896844b83407b2688420eb0f705f30bbe681fd6bc->leave($__internal_8e2b3b21da59bf8e5e69469896844b83407b2688420eb0f705f30bbe681fd6bc_prof);

    }

    public function getTemplateName()
    {
        return "Ticket/ticket.html.twig";
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
{% endblock %}", "Ticket/ticket.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Ticket\\ticket.html.twig");
    }
}
