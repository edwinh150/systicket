<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f08dea713b4709256c4a736119c33e445688c85e1bc45517bb6f0505a7216f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_49c81bf0ebd6e281f7f6bafce0c793741a55982b362f7d05645629591490575f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c81bf0ebd6e281f7f6bafce0c793741a55982b362f7d05645629591490575f->enter($__internal_49c81bf0ebd6e281f7f6bafce0c793741a55982b362f7d05645629591490575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c81bf0ebd6e281f7f6bafce0c793741a55982b362f7d05645629591490575f->leave($__internal_49c81bf0ebd6e281f7f6bafce0c793741a55982b362f7d05645629591490575f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5d18a344ed6abed5b499f704f47d7536b99967b0e502a266096a0d8525159a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d18a344ed6abed5b499f704f47d7536b99967b0e502a266096a0d8525159a6->enter($__internal_e5d18a344ed6abed5b499f704f47d7536b99967b0e502a266096a0d8525159a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e5d18a344ed6abed5b499f704f47d7536b99967b0e502a266096a0d8525159a6->leave($__internal_e5d18a344ed6abed5b499f704f47d7536b99967b0e502a266096a0d8525159a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71ea3b1cdfd158a1dc6113ae416fa9296456eecc77e40a1716a5a8c2294e2c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ea3b1cdfd158a1dc6113ae416fa9296456eecc77e40a1716a5a8c2294e2c6a->enter($__internal_71ea3b1cdfd158a1dc6113ae416fa9296456eecc77e40a1716a5a8c2294e2c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71ea3b1cdfd158a1dc6113ae416fa9296456eecc77e40a1716a5a8c2294e2c6a->leave($__internal_71ea3b1cdfd158a1dc6113ae416fa9296456eecc77e40a1716a5a8c2294e2c6a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0649c8fac8ddbfe5ae6084c4e800aa6388f687d1f289e8b515e9793ee1ca6fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0649c8fac8ddbfe5ae6084c4e800aa6388f687d1f289e8b515e9793ee1ca6fcd->enter($__internal_0649c8fac8ddbfe5ae6084c4e800aa6388f687d1f289e8b515e9793ee1ca6fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0649c8fac8ddbfe5ae6084c4e800aa6388f687d1f289e8b515e9793ee1ca6fcd->leave($__internal_0649c8fac8ddbfe5ae6084c4e800aa6388f687d1f289e8b515e9793ee1ca6fcd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
