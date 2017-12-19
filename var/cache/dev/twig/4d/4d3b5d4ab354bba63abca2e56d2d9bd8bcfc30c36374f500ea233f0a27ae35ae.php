<?php

/* @Blog/Notas/notas.html.twig */
class __TwigTemplate_c7d02f04023db645ff120254edc8716de3672bc01c54723d946842323b34d675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/Notas/notas.html.twig", 1);
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
        $__internal_a074a54db72cba89d44bd6f56cb8f867b9cfc5f9d738dafa1e83db60307e3b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a074a54db72cba89d44bd6f56cb8f867b9cfc5f9d738dafa1e83db60307e3b5d->enter($__internal_a074a54db72cba89d44bd6f56cb8f867b9cfc5f9d738dafa1e83db60307e3b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Notas/notas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a074a54db72cba89d44bd6f56cb8f867b9cfc5f9d738dafa1e83db60307e3b5d->leave($__internal_a074a54db72cba89d44bd6f56cb8f867b9cfc5f9d738dafa1e83db60307e3b5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e117400949b553cf9e71ae1fbe84a8f49080b789cde4d2447648e342abc49cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e117400949b553cf9e71ae1fbe84a8f49080b789cde4d2447648e342abc49cd4->enter($__internal_e117400949b553cf9e71ae1fbe84a8f49080b789cde4d2447648e342abc49cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Notas
";
        
        $__internal_e117400949b553cf9e71ae1fbe84a8f49080b789cde4d2447648e342abc49cd4->leave($__internal_e117400949b553cf9e71ae1fbe84a8f49080b789cde4d2447648e342abc49cd4_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Notas/notas.html.twig";
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
{% endblock %}", "@Blog/Notas/notas.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\Notas\\notas.html.twig");
    }
}
