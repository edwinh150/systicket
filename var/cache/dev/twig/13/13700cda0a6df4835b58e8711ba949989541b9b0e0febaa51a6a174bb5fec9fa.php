<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cf669f1166c2dccbed965c98a64a1f50e704d18f637996cf9749769cf17cf595 extends Twig_Template
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
        $__internal_e84f5a3df535909bfcfd9a010d37fe53f4666fd88a1ddc2783c659b9910d2a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84f5a3df535909bfcfd9a010d37fe53f4666fd88a1ddc2783c659b9910d2a72->enter($__internal_e84f5a3df535909bfcfd9a010d37fe53f4666fd88a1ddc2783c659b9910d2a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e84f5a3df535909bfcfd9a010d37fe53f4666fd88a1ddc2783c659b9910d2a72->leave($__internal_e84f5a3df535909bfcfd9a010d37fe53f4666fd88a1ddc2783c659b9910d2a72_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b844107aea0bf117243d402c9b87c18dd5e0c61223194943e3bb1e7286709cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b844107aea0bf117243d402c9b87c18dd5e0c61223194943e3bb1e7286709cc7->enter($__internal_b844107aea0bf117243d402c9b87c18dd5e0c61223194943e3bb1e7286709cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b844107aea0bf117243d402c9b87c18dd5e0c61223194943e3bb1e7286709cc7->leave($__internal_b844107aea0bf117243d402c9b87c18dd5e0c61223194943e3bb1e7286709cc7_prof);

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
