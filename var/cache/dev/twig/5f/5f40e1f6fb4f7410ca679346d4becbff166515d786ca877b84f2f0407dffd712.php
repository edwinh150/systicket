<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b47bd849baf61d1840a74eadab0a23013cf8065739dad9994eeed01940a1a8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_da28d1350724f4ce6c8a70cfd638595c622c5622fe58353b72de4f4b5d73bdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da28d1350724f4ce6c8a70cfd638595c622c5622fe58353b72de4f4b5d73bdec->enter($__internal_da28d1350724f4ce6c8a70cfd638595c622c5622fe58353b72de4f4b5d73bdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da28d1350724f4ce6c8a70cfd638595c622c5622fe58353b72de4f4b5d73bdec->leave($__internal_da28d1350724f4ce6c8a70cfd638595c622c5622fe58353b72de4f4b5d73bdec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74d3017de951b9a44c9c2b0ace027448ccc9ed8745461ddf6c6ea93f8dd0414b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d3017de951b9a44c9c2b0ace027448ccc9ed8745461ddf6c6ea93f8dd0414b->enter($__internal_74d3017de951b9a44c9c2b0ace027448ccc9ed8745461ddf6c6ea93f8dd0414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_74d3017de951b9a44c9c2b0ace027448ccc9ed8745461ddf6c6ea93f8dd0414b->leave($__internal_74d3017de951b9a44c9c2b0ace027448ccc9ed8745461ddf6c6ea93f8dd0414b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9c84db43059ac79b3592411c7028fb05d48a6cd2a862ce8c07ce8c8dc7925a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c84db43059ac79b3592411c7028fb05d48a6cd2a862ce8c07ce8c8dc7925a2->enter($__internal_a9c84db43059ac79b3592411c7028fb05d48a6cd2a862ce8c07ce8c8dc7925a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9c84db43059ac79b3592411c7028fb05d48a6cd2a862ce8c07ce8c8dc7925a2->leave($__internal_a9c84db43059ac79b3592411c7028fb05d48a6cd2a862ce8c07ce8c8dc7925a2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7307defcc8c1c93dbffcc08e193e14ecf3835bd88a9a2f416002fba9c0587d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7307defcc8c1c93dbffcc08e193e14ecf3835bd88a9a2f416002fba9c0587d8c->enter($__internal_7307defcc8c1c93dbffcc08e193e14ecf3835bd88a9a2f416002fba9c0587d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7307defcc8c1c93dbffcc08e193e14ecf3835bd88a9a2f416002fba9c0587d8c->leave($__internal_7307defcc8c1c93dbffcc08e193e14ecf3835bd88a9a2f416002fba9c0587d8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
