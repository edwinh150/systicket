<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aebca816ae63f904f552ad0244c33b32ca9621a6e131c0479ec235675c798ced extends Twig_Template
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
        $__internal_7e4bc1f0139f70d5825781f4f56286bdbdb22cd80414f9ef768fc00f258f903b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4bc1f0139f70d5825781f4f56286bdbdb22cd80414f9ef768fc00f258f903b->enter($__internal_7e4bc1f0139f70d5825781f4f56286bdbdb22cd80414f9ef768fc00f258f903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e4bc1f0139f70d5825781f4f56286bdbdb22cd80414f9ef768fc00f258f903b->leave($__internal_7e4bc1f0139f70d5825781f4f56286bdbdb22cd80414f9ef768fc00f258f903b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b20906eb0a02dbd5fa812771c4b75af00c3a940e7c3d33e92ff7558717215fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20906eb0a02dbd5fa812771c4b75af00c3a940e7c3d33e92ff7558717215fc4->enter($__internal_b20906eb0a02dbd5fa812771c4b75af00c3a940e7c3d33e92ff7558717215fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b20906eb0a02dbd5fa812771c4b75af00c3a940e7c3d33e92ff7558717215fc4->leave($__internal_b20906eb0a02dbd5fa812771c4b75af00c3a940e7c3d33e92ff7558717215fc4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69cba46476491742da40022cd5fca39d30aba5106072961695efc0a08527c3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cba46476491742da40022cd5fca39d30aba5106072961695efc0a08527c3be->enter($__internal_69cba46476491742da40022cd5fca39d30aba5106072961695efc0a08527c3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69cba46476491742da40022cd5fca39d30aba5106072961695efc0a08527c3be->leave($__internal_69cba46476491742da40022cd5fca39d30aba5106072961695efc0a08527c3be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_898d57f886d98a3d2f0a99923d5c3f06f52a0e16bf8a2f3e341db6c4f36608a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898d57f886d98a3d2f0a99923d5c3f06f52a0e16bf8a2f3e341db6c4f36608a1->enter($__internal_898d57f886d98a3d2f0a99923d5c3f06f52a0e16bf8a2f3e341db6c4f36608a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_898d57f886d98a3d2f0a99923d5c3f06f52a0e16bf8a2f3e341db6c4f36608a1->leave($__internal_898d57f886d98a3d2f0a99923d5c3f06f52a0e16bf8a2f3e341db6c4f36608a1_prof);

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
