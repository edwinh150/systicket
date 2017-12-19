<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_95a5f35fd30fece4aa091a6bdb6ffad906543ca89d8aa77cfead7297f9812405 extends Twig_Template
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
        $__internal_f2bfe593b83afb1df26eb3837a32a35044d3f52b7abf6de944b2682c31bdcf80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bfe593b83afb1df26eb3837a32a35044d3f52b7abf6de944b2682c31bdcf80->enter($__internal_f2bfe593b83afb1df26eb3837a32a35044d3f52b7abf6de944b2682c31bdcf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2bfe593b83afb1df26eb3837a32a35044d3f52b7abf6de944b2682c31bdcf80->leave($__internal_f2bfe593b83afb1df26eb3837a32a35044d3f52b7abf6de944b2682c31bdcf80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_869b8872a8ea695b065c0ec1b64ccef62f5813f710e7e62120034f8c8625ec11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869b8872a8ea695b065c0ec1b64ccef62f5813f710e7e62120034f8c8625ec11->enter($__internal_869b8872a8ea695b065c0ec1b64ccef62f5813f710e7e62120034f8c8625ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_869b8872a8ea695b065c0ec1b64ccef62f5813f710e7e62120034f8c8625ec11->leave($__internal_869b8872a8ea695b065c0ec1b64ccef62f5813f710e7e62120034f8c8625ec11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b921606ea1bdbbf3af1595f19a621bfd49c2a17b6e6909d6264c353484c632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b921606ea1bdbbf3af1595f19a621bfd49c2a17b6e6909d6264c353484c632->enter($__internal_86b921606ea1bdbbf3af1595f19a621bfd49c2a17b6e6909d6264c353484c632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_86b921606ea1bdbbf3af1595f19a621bfd49c2a17b6e6909d6264c353484c632->leave($__internal_86b921606ea1bdbbf3af1595f19a621bfd49c2a17b6e6909d6264c353484c632_prof);

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
