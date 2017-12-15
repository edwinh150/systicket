<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e9bad7d20cae9e84f1bfb7c18f1e6e2592f27b49951744e160fdcf6aa16b1115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8507966ff7c78f2d878d1ba88efe6cdc489add375f62c7af14e0d27f203b41fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8507966ff7c78f2d878d1ba88efe6cdc489add375f62c7af14e0d27f203b41fa->enter($__internal_8507966ff7c78f2d878d1ba88efe6cdc489add375f62c7af14e0d27f203b41fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8507966ff7c78f2d878d1ba88efe6cdc489add375f62c7af14e0d27f203b41fa->leave($__internal_8507966ff7c78f2d878d1ba88efe6cdc489add375f62c7af14e0d27f203b41fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1528955345c81d1039eef3a35c1d0e4cc817f04cd13f21831f5e6ffd37fbbad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1528955345c81d1039eef3a35c1d0e4cc817f04cd13f21831f5e6ffd37fbbad9->enter($__internal_1528955345c81d1039eef3a35c1d0e4cc817f04cd13f21831f5e6ffd37fbbad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1528955345c81d1039eef3a35c1d0e4cc817f04cd13f21831f5e6ffd37fbbad9->leave($__internal_1528955345c81d1039eef3a35c1d0e4cc817f04cd13f21831f5e6ffd37fbbad9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
