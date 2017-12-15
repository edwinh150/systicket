<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4757357e361ac60c247020ed8a708c665de23dedb17483abaf7b003d00a2a3b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_bea675824fb95f6c3d452149ed21df4a6b09b455016775738cfa2498eba623fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea675824fb95f6c3d452149ed21df4a6b09b455016775738cfa2498eba623fc->enter($__internal_bea675824fb95f6c3d452149ed21df4a6b09b455016775738cfa2498eba623fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea675824fb95f6c3d452149ed21df4a6b09b455016775738cfa2498eba623fc->leave($__internal_bea675824fb95f6c3d452149ed21df4a6b09b455016775738cfa2498eba623fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02df51364b0cc72e96a42c3313f657327c846008563aef703739cf5fd19cddd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02df51364b0cc72e96a42c3313f657327c846008563aef703739cf5fd19cddd6->enter($__internal_02df51364b0cc72e96a42c3313f657327c846008563aef703739cf5fd19cddd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_02df51364b0cc72e96a42c3313f657327c846008563aef703739cf5fd19cddd6->leave($__internal_02df51364b0cc72e96a42c3313f657327c846008563aef703739cf5fd19cddd6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c23542f8a0dd3e1164a3d76f792fc3d28ebdb904a7e6cd26fe7cffa21fe12991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23542f8a0dd3e1164a3d76f792fc3d28ebdb904a7e6cd26fe7cffa21fe12991->enter($__internal_c23542f8a0dd3e1164a3d76f792fc3d28ebdb904a7e6cd26fe7cffa21fe12991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c23542f8a0dd3e1164a3d76f792fc3d28ebdb904a7e6cd26fe7cffa21fe12991->leave($__internal_c23542f8a0dd3e1164a3d76f792fc3d28ebdb904a7e6cd26fe7cffa21fe12991_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
