<?php

/* default/index.html.twig */
class __TwigTemplate_3dc4a50ce98f3ae63388e66522f95b36f2fdc406d63b0db5da7552a201b2d41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_b00ed9964622b280bb68bca3939ad68f1034f4f14332c55c6cdbc484b2042022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00ed9964622b280bb68bca3939ad68f1034f4f14332c55c6cdbc484b2042022->enter($__internal_b00ed9964622b280bb68bca3939ad68f1034f4f14332c55c6cdbc484b2042022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00ed9964622b280bb68bca3939ad68f1034f4f14332c55c6cdbc484b2042022->leave($__internal_b00ed9964622b280bb68bca3939ad68f1034f4f14332c55c6cdbc484b2042022_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c797ec3cbcf7e673e4f7aa651edba36c709f19c1fe822bb21c271a3a5436f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c797ec3cbcf7e673e4f7aa651edba36c709f19c1fe822bb21c271a3a5436f52->enter($__internal_7c797ec3cbcf7e673e4f7aa651edba36c709f19c1fe822bb21c271a3a5436f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Bienvenido a Systicket
";
        
        $__internal_7c797ec3cbcf7e673e4f7aa651edba36c709f19c1fe822bb21c271a3a5436f52->leave($__internal_7c797ec3cbcf7e673e4f7aa651edba36c709f19c1fe822bb21c271a3a5436f52_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
   Bienvenido a Systicket
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\default\\index.html.twig");
    }
}
