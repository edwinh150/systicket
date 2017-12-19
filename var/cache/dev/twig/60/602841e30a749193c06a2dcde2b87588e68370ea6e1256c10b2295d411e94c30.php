<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a3524f25f33f229a5e859b4357d0b6776b934d1f2653f6a4f789999e60fe4ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40ae174f1310b659963f76600258720ef076ee9de2597662b72078e6859b6b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ae174f1310b659963f76600258720ef076ee9de2597662b72078e6859b6b48->enter($__internal_40ae174f1310b659963f76600258720ef076ee9de2597662b72078e6859b6b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ae174f1310b659963f76600258720ef076ee9de2597662b72078e6859b6b48->leave($__internal_40ae174f1310b659963f76600258720ef076ee9de2597662b72078e6859b6b48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8acb8aa10119349b6bfb5ce8223d91f3e0063381168c92e9f56918b1e2336c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8acb8aa10119349b6bfb5ce8223d91f3e0063381168c92e9f56918b1e2336c7->enter($__internal_b8acb8aa10119349b6bfb5ce8223d91f3e0063381168c92e9f56918b1e2336c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8acb8aa10119349b6bfb5ce8223d91f3e0063381168c92e9f56918b1e2336c7->leave($__internal_b8acb8aa10119349b6bfb5ce8223d91f3e0063381168c92e9f56918b1e2336c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23fb01bf0001cf751441476e4751a9dc65317b3fa8fe0fc2321cccad4bac9e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fb01bf0001cf751441476e4751a9dc65317b3fa8fe0fc2321cccad4bac9e7f->enter($__internal_23fb01bf0001cf751441476e4751a9dc65317b3fa8fe0fc2321cccad4bac9e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23fb01bf0001cf751441476e4751a9dc65317b3fa8fe0fc2321cccad4bac9e7f->leave($__internal_23fb01bf0001cf751441476e4751a9dc65317b3fa8fe0fc2321cccad4bac9e7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fd0eec0f2ce0a0d56b600a704ad3aae3964ec34970cbbe2388112be12aafaf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd0eec0f2ce0a0d56b600a704ad3aae3964ec34970cbbe2388112be12aafaf6->enter($__internal_3fd0eec0f2ce0a0d56b600a704ad3aae3964ec34970cbbe2388112be12aafaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3fd0eec0f2ce0a0d56b600a704ad3aae3964ec34970cbbe2388112be12aafaf6->leave($__internal_3fd0eec0f2ce0a0d56b600a704ad3aae3964ec34970cbbe2388112be12aafaf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
