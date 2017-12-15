<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c36e3064d1d688c6e1eda7dacb6c631a4b15a2586dde030e63f9a6d9fc6d6ef5 extends Twig_Template
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
        $__internal_34937fcb8e3388280688e357fdf961181b679d141040824a24cf84848a73ff3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34937fcb8e3388280688e357fdf961181b679d141040824a24cf84848a73ff3a->enter($__internal_34937fcb8e3388280688e357fdf961181b679d141040824a24cf84848a73ff3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_34937fcb8e3388280688e357fdf961181b679d141040824a24cf84848a73ff3a->leave($__internal_34937fcb8e3388280688e357fdf961181b679d141040824a24cf84848a73ff3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db4c56d5074dd224e6dd0ee0ca274dc8c45ee7b717c24dc26483d2b01819c4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4c56d5074dd224e6dd0ee0ca274dc8c45ee7b717c24dc26483d2b01819c4e1->enter($__internal_db4c56d5074dd224e6dd0ee0ca274dc8c45ee7b717c24dc26483d2b01819c4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db4c56d5074dd224e6dd0ee0ca274dc8c45ee7b717c24dc26483d2b01819c4e1->leave($__internal_db4c56d5074dd224e6dd0ee0ca274dc8c45ee7b717c24dc26483d2b01819c4e1_prof);

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
