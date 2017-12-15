<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_256b1ccff628640d29d6715e1a4dedc3db1a7bfc5cc090a2767e6b7cea8bd54d extends Twig_Template
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
        $__internal_a1373dcfbed10e87a37947d806c705d3cdbe11784c9c95bec56044c07113b5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1373dcfbed10e87a37947d806c705d3cdbe11784c9c95bec56044c07113b5e3->enter($__internal_a1373dcfbed10e87a37947d806c705d3cdbe11784c9c95bec56044c07113b5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1373dcfbed10e87a37947d806c705d3cdbe11784c9c95bec56044c07113b5e3->leave($__internal_a1373dcfbed10e87a37947d806c705d3cdbe11784c9c95bec56044c07113b5e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a92d4cf4b0a59595d28883f52a9dedb1711e9ce106f4ca25b785cdc35b06043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a92d4cf4b0a59595d28883f52a9dedb1711e9ce106f4ca25b785cdc35b06043->enter($__internal_7a92d4cf4b0a59595d28883f52a9dedb1711e9ce106f4ca25b785cdc35b06043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a92d4cf4b0a59595d28883f52a9dedb1711e9ce106f4ca25b785cdc35b06043->leave($__internal_7a92d4cf4b0a59595d28883f52a9dedb1711e9ce106f4ca25b785cdc35b06043_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6c69ce158a8ee6aeeee116a860ecab6e0fad6fae3d3de64c2284ca522fddaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c69ce158a8ee6aeeee116a860ecab6e0fad6fae3d3de64c2284ca522fddaaf->enter($__internal_e6c69ce158a8ee6aeeee116a860ecab6e0fad6fae3d3de64c2284ca522fddaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6c69ce158a8ee6aeeee116a860ecab6e0fad6fae3d3de64c2284ca522fddaaf->leave($__internal_e6c69ce158a8ee6aeeee116a860ecab6e0fad6fae3d3de64c2284ca522fddaaf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d15c742f8d00f128ffae11bbfe59ed20f3041d7a0945b42d985e76970ad629a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15c742f8d00f128ffae11bbfe59ed20f3041d7a0945b42d985e76970ad629a1->enter($__internal_d15c742f8d00f128ffae11bbfe59ed20f3041d7a0945b42d985e76970ad629a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d15c742f8d00f128ffae11bbfe59ed20f3041d7a0945b42d985e76970ad629a1->leave($__internal_d15c742f8d00f128ffae11bbfe59ed20f3041d7a0945b42d985e76970ad629a1_prof);

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
