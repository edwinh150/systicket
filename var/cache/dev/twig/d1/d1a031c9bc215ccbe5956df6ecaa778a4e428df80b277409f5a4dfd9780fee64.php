<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7ed19b7f90bc537bf34a95cc57c6c5349d1f70a9700d9d84594516975dca9336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfc1908cf3d476a6cc7ece502d0889cabd689961ea277478bb5e3a80a88d2e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc1908cf3d476a6cc7ece502d0889cabd689961ea277478bb5e3a80a88d2e84->enter($__internal_bfc1908cf3d476a6cc7ece502d0889cabd689961ea277478bb5e3a80a88d2e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc1908cf3d476a6cc7ece502d0889cabd689961ea277478bb5e3a80a88d2e84->leave($__internal_bfc1908cf3d476a6cc7ece502d0889cabd689961ea277478bb5e3a80a88d2e84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab410404d62933f0957f29bbf716d4c41cd7f7657581a379ff22ff6957f2496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab410404d62933f0957f29bbf716d4c41cd7f7657581a379ff22ff6957f2496->enter($__internal_7ab410404d62933f0957f29bbf716d4c41cd7f7657581a379ff22ff6957f2496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ab410404d62933f0957f29bbf716d4c41cd7f7657581a379ff22ff6957f2496->leave($__internal_7ab410404d62933f0957f29bbf716d4c41cd7f7657581a379ff22ff6957f2496_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_067a47f491e9d9596b2f6642be60115a7a61570322c375bc5cb6e8e32a83f340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067a47f491e9d9596b2f6642be60115a7a61570322c375bc5cb6e8e32a83f340->enter($__internal_067a47f491e9d9596b2f6642be60115a7a61570322c375bc5cb6e8e32a83f340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_067a47f491e9d9596b2f6642be60115a7a61570322c375bc5cb6e8e32a83f340->leave($__internal_067a47f491e9d9596b2f6642be60115a7a61570322c375bc5cb6e8e32a83f340_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
