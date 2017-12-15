<?php

/* default/index.html.twig */
class __TwigTemplate_184f43164681151248b002efc6c8bdfd16d0b22f82811e5b7e12cb8b6afe8bd5 extends Twig_Template
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
        $__internal_c82d6ef3b4a25f73a8810a137bfd9d362c31d132eaebcb4109537d4fe224925b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82d6ef3b4a25f73a8810a137bfd9d362c31d132eaebcb4109537d4fe224925b->enter($__internal_c82d6ef3b4a25f73a8810a137bfd9d362c31d132eaebcb4109537d4fe224925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82d6ef3b4a25f73a8810a137bfd9d362c31d132eaebcb4109537d4fe224925b->leave($__internal_c82d6ef3b4a25f73a8810a137bfd9d362c31d132eaebcb4109537d4fe224925b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f004ebfa207a688ad1f8b0e1cd3312a39a91152cb4e9931b49836ddc5b7015db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f004ebfa207a688ad1f8b0e1cd3312a39a91152cb4e9931b49836ddc5b7015db->enter($__internal_f004ebfa207a688ad1f8b0e1cd3312a39a91152cb4e9931b49836ddc5b7015db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Prueba
";
        
        $__internal_f004ebfa207a688ad1f8b0e1cd3312a39a91152cb4e9931b49836ddc5b7015db->leave($__internal_f004ebfa207a688ad1f8b0e1cd3312a39a91152cb4e9931b49836ddc5b7015db_prof);

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
   Prueba
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\default\\index.html.twig");
    }
}
