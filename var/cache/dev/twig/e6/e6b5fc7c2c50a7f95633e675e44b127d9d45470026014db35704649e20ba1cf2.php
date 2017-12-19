<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9007bda90a267c9e4aa8a0d10bb21eec728f911e6b801d29a3a38c059fa9d316 extends Twig_Template
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
        $__internal_b372a7201f8f4b2b339e39e80c3657ad62d8c784d8f513b8bbb2c3b749958a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b372a7201f8f4b2b339e39e80c3657ad62d8c784d8f513b8bbb2c3b749958a18->enter($__internal_b372a7201f8f4b2b339e39e80c3657ad62d8c784d8f513b8bbb2c3b749958a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b372a7201f8f4b2b339e39e80c3657ad62d8c784d8f513b8bbb2c3b749958a18->leave($__internal_b372a7201f8f4b2b339e39e80c3657ad62d8c784d8f513b8bbb2c3b749958a18_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_43036759f791c7e243c7e4715269c393462d75c8962c7a4f0c5d5cafcfa9fc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43036759f791c7e243c7e4715269c393462d75c8962c7a4f0c5d5cafcfa9fc65->enter($__internal_43036759f791c7e243c7e4715269c393462d75c8962c7a4f0c5d5cafcfa9fc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_43036759f791c7e243c7e4715269c393462d75c8962c7a4f0c5d5cafcfa9fc65->leave($__internal_43036759f791c7e243c7e4715269c393462d75c8962c7a4f0c5d5cafcfa9fc65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
