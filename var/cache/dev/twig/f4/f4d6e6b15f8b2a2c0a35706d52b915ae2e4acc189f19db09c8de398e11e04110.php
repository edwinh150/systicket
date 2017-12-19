<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5a27b07be407f906e7b7d6e378cca4f6cf538e5dddb5a97f1dcf3e1b0156428e extends Twig_Template
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
        $__internal_afe3a0e78512b3e9c6a0ed53952c050d1463ebd54ee01dcb2172c4149747d9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe3a0e78512b3e9c6a0ed53952c050d1463ebd54ee01dcb2172c4149747d9fd->enter($__internal_afe3a0e78512b3e9c6a0ed53952c050d1463ebd54ee01dcb2172c4149747d9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_afe3a0e78512b3e9c6a0ed53952c050d1463ebd54ee01dcb2172c4149747d9fd->leave($__internal_afe3a0e78512b3e9c6a0ed53952c050d1463ebd54ee01dcb2172c4149747d9fd_prof);

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
