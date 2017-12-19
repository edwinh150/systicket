<?php

/* :default:index.html.twig */
class __TwigTemplate_d49b00f924a70bd4094ca3f8b241016bfda09b08c7f2eb1d4bf927ab9429ea81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_a8216f9d3f7db54abce079682b3cb607ae8134312de80660c17db977e3f1fc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8216f9d3f7db54abce079682b3cb607ae8134312de80660c17db977e3f1fc24->enter($__internal_a8216f9d3f7db54abce079682b3cb607ae8134312de80660c17db977e3f1fc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8216f9d3f7db54abce079682b3cb607ae8134312de80660c17db977e3f1fc24->leave($__internal_a8216f9d3f7db54abce079682b3cb607ae8134312de80660c17db977e3f1fc24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa9aefbf6c5201be1fea70afdd10a0a23ca6852cb23cae6b0a7c0760c3b1d606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9aefbf6c5201be1fea70afdd10a0a23ca6852cb23cae6b0a7c0760c3b1d606->enter($__internal_aa9aefbf6c5201be1fea70afdd10a0a23ca6852cb23cae6b0a7c0760c3b1d606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Bienvenido a Systicket
";
        
        $__internal_aa9aefbf6c5201be1fea70afdd10a0a23ca6852cb23cae6b0a7c0760c3b1d606->leave($__internal_aa9aefbf6c5201be1fea70afdd10a0a23ca6852cb23cae6b0a7c0760c3b1d606_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
", ":default:index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/default/index.html.twig");
    }
}
