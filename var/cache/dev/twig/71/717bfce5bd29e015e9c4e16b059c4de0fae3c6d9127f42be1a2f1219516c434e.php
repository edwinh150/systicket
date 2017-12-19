<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9f857e496dc8b5c11f9a55117af6f33ac8f841848ffacd17a23f129368671ef4 extends Twig_Template
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
        $__internal_43f83da6e7701853919ad7b5ba9852476423625e7d6ae9b9596826cae4000550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f83da6e7701853919ad7b5ba9852476423625e7d6ae9b9596826cae4000550->enter($__internal_43f83da6e7701853919ad7b5ba9852476423625e7d6ae9b9596826cae4000550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f83da6e7701853919ad7b5ba9852476423625e7d6ae9b9596826cae4000550->leave($__internal_43f83da6e7701853919ad7b5ba9852476423625e7d6ae9b9596826cae4000550_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd44d4d35afabf6b647e1ea9c2a6c0b604e4a0527a57aba26af1a6f7fd4ff582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd44d4d35afabf6b647e1ea9c2a6c0b604e4a0527a57aba26af1a6f7fd4ff582->enter($__internal_cd44d4d35afabf6b647e1ea9c2a6c0b604e4a0527a57aba26af1a6f7fd4ff582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cd44d4d35afabf6b647e1ea9c2a6c0b604e4a0527a57aba26af1a6f7fd4ff582->leave($__internal_cd44d4d35afabf6b647e1ea9c2a6c0b604e4a0527a57aba26af1a6f7fd4ff582_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de0128787068b5fdeb132c5a9f9540ffe61e7f4f36fcde308518e1a313d3d62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0128787068b5fdeb132c5a9f9540ffe61e7f4f36fcde308518e1a313d3d62e->enter($__internal_de0128787068b5fdeb132c5a9f9540ffe61e7f4f36fcde308518e1a313d3d62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de0128787068b5fdeb132c5a9f9540ffe61e7f4f36fcde308518e1a313d3d62e->leave($__internal_de0128787068b5fdeb132c5a9f9540ffe61e7f4f36fcde308518e1a313d3d62e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_337140f9fd94b444ede58b61a6a9c74df3d5815f1498c489c7bc90c968af7c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337140f9fd94b444ede58b61a6a9c74df3d5815f1498c489c7bc90c968af7c83->enter($__internal_337140f9fd94b444ede58b61a6a9c74df3d5815f1498c489c7bc90c968af7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_337140f9fd94b444ede58b61a6a9c74df3d5815f1498c489c7bc90c968af7c83->leave($__internal_337140f9fd94b444ede58b61a6a9c74df3d5815f1498c489c7bc90c968af7c83_prof);

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
