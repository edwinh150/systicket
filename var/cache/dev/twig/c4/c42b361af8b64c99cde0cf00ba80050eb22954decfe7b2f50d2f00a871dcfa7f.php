<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c9a05aa47546197ed50dc724b3f242afcb3003c976799b49b7a13ff23860b64c extends Twig_Template
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
        $__internal_8ba8ce46bbf698d108eaa81ba33d0b0cdb40655462dd26f08b2d5f87e4aac68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba8ce46bbf698d108eaa81ba33d0b0cdb40655462dd26f08b2d5f87e4aac68f->enter($__internal_8ba8ce46bbf698d108eaa81ba33d0b0cdb40655462dd26f08b2d5f87e4aac68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba8ce46bbf698d108eaa81ba33d0b0cdb40655462dd26f08b2d5f87e4aac68f->leave($__internal_8ba8ce46bbf698d108eaa81ba33d0b0cdb40655462dd26f08b2d5f87e4aac68f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aac0a96cd8bd07a95d00d0887b598cb827799c5bc5bd7093f96248ba5fd633c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac0a96cd8bd07a95d00d0887b598cb827799c5bc5bd7093f96248ba5fd633c0->enter($__internal_aac0a96cd8bd07a95d00d0887b598cb827799c5bc5bd7093f96248ba5fd633c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aac0a96cd8bd07a95d00d0887b598cb827799c5bc5bd7093f96248ba5fd633c0->leave($__internal_aac0a96cd8bd07a95d00d0887b598cb827799c5bc5bd7093f96248ba5fd633c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50df9a1cad387628dbee23443acbdce5390c8b0bac5659c4eb067a3b90044d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50df9a1cad387628dbee23443acbdce5390c8b0bac5659c4eb067a3b90044d42->enter($__internal_50df9a1cad387628dbee23443acbdce5390c8b0bac5659c4eb067a3b90044d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50df9a1cad387628dbee23443acbdce5390c8b0bac5659c4eb067a3b90044d42->leave($__internal_50df9a1cad387628dbee23443acbdce5390c8b0bac5659c4eb067a3b90044d42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3601befcf664080074ab88c6615709f098ff9500b93ca9b99cc9e1f61da0e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3601befcf664080074ab88c6615709f098ff9500b93ca9b99cc9e1f61da0e1e->enter($__internal_d3601befcf664080074ab88c6615709f098ff9500b93ca9b99cc9e1f61da0e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d3601befcf664080074ab88c6615709f098ff9500b93ca9b99cc9e1f61da0e1e->leave($__internal_d3601befcf664080074ab88c6615709f098ff9500b93ca9b99cc9e1f61da0e1e_prof);

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
