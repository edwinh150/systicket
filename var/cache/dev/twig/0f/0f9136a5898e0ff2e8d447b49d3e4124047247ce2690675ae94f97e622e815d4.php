<?php

/* BlogBundle:roles:roles.html.twig */
class __TwigTemplate_fab2e4929dc1a69addfe2737f686f13e479606b74cd9697b161c52328228259e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:roles:roles.html.twig", 1);
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
        $__internal_73e86f8c390c39777ab3cff612e050aba32730ef82b239276d5061a0460387f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e86f8c390c39777ab3cff612e050aba32730ef82b239276d5061a0460387f3->enter($__internal_73e86f8c390c39777ab3cff612e050aba32730ef82b239276d5061a0460387f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:roles:roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e86f8c390c39777ab3cff612e050aba32730ef82b239276d5061a0460387f3->leave($__internal_73e86f8c390c39777ab3cff612e050aba32730ef82b239276d5061a0460387f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0adcc353537e0df7bf3dcd23fe9aabd3925fe611c8e9096d5ae1e07cef47ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0adcc353537e0df7bf3dcd23fe9aabd3925fe611c8e9096d5ae1e07cef47ff0->enter($__internal_a0adcc353537e0df7bf3dcd23fe9aabd3925fe611c8e9096d5ae1e07cef47ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Roles
";
        
        $__internal_a0adcc353537e0df7bf3dcd23fe9aabd3925fe611c8e9096d5ae1e07cef47ff0->leave($__internal_a0adcc353537e0df7bf3dcd23fe9aabd3925fe611c8e9096d5ae1e07cef47ff0_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:roles:roles.html.twig";
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
   Lista de Roles
{% endblock %}", "BlogBundle:roles:roles.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/roles/roles.html.twig");
    }
}
