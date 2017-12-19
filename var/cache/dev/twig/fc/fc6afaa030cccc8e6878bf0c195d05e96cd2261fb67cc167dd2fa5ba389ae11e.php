<?php

/* BlogBundle:default:index.html.twig */
class __TwigTemplate_79212a498ab015bcde64c2e23f85e72ec3ee99ddee38d7553ad5bc6ed9914d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:default:index.html.twig", 1);
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
        $__internal_b3357abb753e535508bf0f80ca5bc9abef3db8f5e8794e9676dd4593bd5d1423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3357abb753e535508bf0f80ca5bc9abef3db8f5e8794e9676dd4593bd5d1423->enter($__internal_b3357abb753e535508bf0f80ca5bc9abef3db8f5e8794e9676dd4593bd5d1423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3357abb753e535508bf0f80ca5bc9abef3db8f5e8794e9676dd4593bd5d1423->leave($__internal_b3357abb753e535508bf0f80ca5bc9abef3db8f5e8794e9676dd4593bd5d1423_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1020885f27c99535d4e822c89b7d9593da1f0e96ddb4767bcecf3910e57a0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1020885f27c99535d4e822c89b7d9593da1f0e96ddb4767bcecf3910e57a0ba->enter($__internal_a1020885f27c99535d4e822c89b7d9593da1f0e96ddb4767bcecf3910e57a0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Bienvenido a Systicket
";
        
        $__internal_a1020885f27c99535d4e822c89b7d9593da1f0e96ddb4767bcecf3910e57a0ba->leave($__internal_a1020885f27c99535d4e822c89b7d9593da1f0e96ddb4767bcecf3910e57a0ba_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:default:index.html.twig";
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
", "BlogBundle:default:index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/default/index.html.twig");
    }
}
