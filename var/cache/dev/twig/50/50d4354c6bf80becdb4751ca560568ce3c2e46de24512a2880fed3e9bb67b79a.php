<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6448e58ce25d4efc89111cd16b7c0294cd9c1bb962d22d97350e87973d549215 extends Twig_Template
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
        $__internal_253156dc5e06cd1ddac5153e343a6d5010434cd6cc3be273ce5cff48c27babcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253156dc5e06cd1ddac5153e343a6d5010434cd6cc3be273ce5cff48c27babcc->enter($__internal_253156dc5e06cd1ddac5153e343a6d5010434cd6cc3be273ce5cff48c27babcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_253156dc5e06cd1ddac5153e343a6d5010434cd6cc3be273ce5cff48c27babcc->leave($__internal_253156dc5e06cd1ddac5153e343a6d5010434cd6cc3be273ce5cff48c27babcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
