<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_45b89a040b1d3845328699ef590ab73bff22e0cc0cbecc7a7b2e54cd2d1fd551 extends Twig_Template
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
        $__internal_ba2213fcc99e3b446273723d0c05139e2251b6d33ebdfe42c31d660c67aa7de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2213fcc99e3b446273723d0c05139e2251b6d33ebdfe42c31d660c67aa7de2->enter($__internal_ba2213fcc99e3b446273723d0c05139e2251b6d33ebdfe42c31d660c67aa7de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2213fcc99e3b446273723d0c05139e2251b6d33ebdfe42c31d660c67aa7de2->leave($__internal_ba2213fcc99e3b446273723d0c05139e2251b6d33ebdfe42c31d660c67aa7de2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_beedc0018ddc7c2def369dd15441b4569b64a44b31e37be0d1db3d084d16c08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beedc0018ddc7c2def369dd15441b4569b64a44b31e37be0d1db3d084d16c08a->enter($__internal_beedc0018ddc7c2def369dd15441b4569b64a44b31e37be0d1db3d084d16c08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_beedc0018ddc7c2def369dd15441b4569b64a44b31e37be0d1db3d084d16c08a->leave($__internal_beedc0018ddc7c2def369dd15441b4569b64a44b31e37be0d1db3d084d16c08a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a95182ed167ed32c9810b39e652555677dfed2f921baa8062f18efa09010d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a95182ed167ed32c9810b39e652555677dfed2f921baa8062f18efa09010d5e->enter($__internal_7a95182ed167ed32c9810b39e652555677dfed2f921baa8062f18efa09010d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a95182ed167ed32c9810b39e652555677dfed2f921baa8062f18efa09010d5e->leave($__internal_7a95182ed167ed32c9810b39e652555677dfed2f921baa8062f18efa09010d5e_prof);

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
