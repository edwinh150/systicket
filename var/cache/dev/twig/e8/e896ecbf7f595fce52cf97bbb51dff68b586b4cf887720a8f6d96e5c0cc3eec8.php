<?php

/* default/index.html.twig */
class __TwigTemplate_951a0a7fb24e26016fead9a8b578e0ffe932b5a20648c59791ef2d2845dce0fa extends Twig_Template
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
        $__internal_70225462db11fbad3a26e16a574b703127c0ce26c4b652be2018bb603236950b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70225462db11fbad3a26e16a574b703127c0ce26c4b652be2018bb603236950b->enter($__internal_70225462db11fbad3a26e16a574b703127c0ce26c4b652be2018bb603236950b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70225462db11fbad3a26e16a574b703127c0ce26c4b652be2018bb603236950b->leave($__internal_70225462db11fbad3a26e16a574b703127c0ce26c4b652be2018bb603236950b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac94bac6255170d6f10fbd4efb301f54dd99a9e269efe7653da721db5784b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac94bac6255170d6f10fbd4efb301f54dd99a9e269efe7653da721db5784b59->enter($__internal_fac94bac6255170d6f10fbd4efb301f54dd99a9e269efe7653da721db5784b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Bienvenido a Systicket
";
        
        $__internal_fac94bac6255170d6f10fbd4efb301f54dd99a9e269efe7653da721db5784b59->leave($__internal_fac94bac6255170d6f10fbd4efb301f54dd99a9e269efe7653da721db5784b59_prof);

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
