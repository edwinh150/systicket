<?php

/* BlogBundle:Ticket:ticket.html.twig */
class __TwigTemplate_03fb1d856801f606baa3e69ec9903c2cdf720aa01d618b860937f4ef40b5ed9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Ticket:ticket.html.twig", 1);
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
        $__internal_a3798d6f56f7af10297d43c97a2730e0018aa2de53bb8595f0b9db735e99a5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3798d6f56f7af10297d43c97a2730e0018aa2de53bb8595f0b9db735e99a5ff->enter($__internal_a3798d6f56f7af10297d43c97a2730e0018aa2de53bb8595f0b9db735e99a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3798d6f56f7af10297d43c97a2730e0018aa2de53bb8595f0b9db735e99a5ff->leave($__internal_a3798d6f56f7af10297d43c97a2730e0018aa2de53bb8595f0b9db735e99a5ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_453d8a5a94dba3900e1f8129c554d2397fef821c846be9720d2f419bf112d684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453d8a5a94dba3900e1f8129c554d2397fef821c846be9720d2f419bf112d684->enter($__internal_453d8a5a94dba3900e1f8129c554d2397fef821c846be9720d2f419bf112d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Ticket
";
        
        $__internal_453d8a5a94dba3900e1f8129c554d2397fef821c846be9720d2f419bf112d684->leave($__internal_453d8a5a94dba3900e1f8129c554d2397fef821c846be9720d2f419bf112d684_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Ticket:ticket.html.twig";
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
{% endblock %}", "BlogBundle:Ticket:ticket.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/Ticket/ticket.html.twig");
    }
}
