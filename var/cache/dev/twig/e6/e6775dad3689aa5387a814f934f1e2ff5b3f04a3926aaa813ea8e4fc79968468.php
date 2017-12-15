<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3f3119118a6e7f09b0217a33f40b557cf131dee2a427063a039f975dfb9427f9 extends Twig_Template
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
        $__internal_afc0a4dced5bb0a40abc4ee389b39cf0c1ecd64e80014fd2fb7724135f42f58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc0a4dced5bb0a40abc4ee389b39cf0c1ecd64e80014fd2fb7724135f42f58c->enter($__internal_afc0a4dced5bb0a40abc4ee389b39cf0c1ecd64e80014fd2fb7724135f42f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc0a4dced5bb0a40abc4ee389b39cf0c1ecd64e80014fd2fb7724135f42f58c->leave($__internal_afc0a4dced5bb0a40abc4ee389b39cf0c1ecd64e80014fd2fb7724135f42f58c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05fc2541b797479d96c97beacc0c5bd64e772d5b9ef9275f23e312d22f1b7bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fc2541b797479d96c97beacc0c5bd64e772d5b9ef9275f23e312d22f1b7bdf->enter($__internal_05fc2541b797479d96c97beacc0c5bd64e772d5b9ef9275f23e312d22f1b7bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_05fc2541b797479d96c97beacc0c5bd64e772d5b9ef9275f23e312d22f1b7bdf->leave($__internal_05fc2541b797479d96c97beacc0c5bd64e772d5b9ef9275f23e312d22f1b7bdf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67bf7a27b8562a5b293d9401f25399378cee23fe5739d1fe8127a23e7ad0805d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bf7a27b8562a5b293d9401f25399378cee23fe5739d1fe8127a23e7ad0805d->enter($__internal_67bf7a27b8562a5b293d9401f25399378cee23fe5739d1fe8127a23e7ad0805d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67bf7a27b8562a5b293d9401f25399378cee23fe5739d1fe8127a23e7ad0805d->leave($__internal_67bf7a27b8562a5b293d9401f25399378cee23fe5739d1fe8127a23e7ad0805d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a81914761f5dfe0a01b9292d11597deb803c347cbc8c70b33159ecb40711d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a81914761f5dfe0a01b9292d11597deb803c347cbc8c70b33159ecb40711d6b->enter($__internal_7a81914761f5dfe0a01b9292d11597deb803c347cbc8c70b33159ecb40711d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7a81914761f5dfe0a01b9292d11597deb803c347cbc8c70b33159ecb40711d6b->leave($__internal_7a81914761f5dfe0a01b9292d11597deb803c347cbc8c70b33159ecb40711d6b_prof);

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
