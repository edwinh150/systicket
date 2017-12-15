<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3010f85b1ccd225fd66caa2a928eb9178245f7622f05bde1bf60a8b970b34e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_731f8871df2bebc3162b396979ddeadb7ecc601d5efa9af00cf51c0a8e10c34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731f8871df2bebc3162b396979ddeadb7ecc601d5efa9af00cf51c0a8e10c34b->enter($__internal_731f8871df2bebc3162b396979ddeadb7ecc601d5efa9af00cf51c0a8e10c34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_731f8871df2bebc3162b396979ddeadb7ecc601d5efa9af00cf51c0a8e10c34b->leave($__internal_731f8871df2bebc3162b396979ddeadb7ecc601d5efa9af00cf51c0a8e10c34b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
