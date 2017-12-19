<?php

/* :Categoria:categoria.html.twig */
class __TwigTemplate_28838c952c8b273dc0be503b2830fad1071bdda5862b770d237b63495027bee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Categoria:categoria.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa4fbb38416016d953a1c258b95d514982792a7c65286df649d7ac798d55715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa4fbb38416016d953a1c258b95d514982792a7c65286df649d7ac798d55715->enter($__internal_1fa4fbb38416016d953a1c258b95d514982792a7c65286df649d7ac798d55715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Categoria:categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa4fbb38416016d953a1c258b95d514982792a7c65286df649d7ac798d55715->leave($__internal_1fa4fbb38416016d953a1c258b95d514982792a7c65286df649d7ac798d55715_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e48f4ba658e64d6957772eea006ad68ae58bc7590423f5f0ade36488ada804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e48f4ba658e64d6957772eea006ad68ae58bc7590423f5f0ade36488ada804->enter($__internal_29e48f4ba658e64d6957772eea006ad68ae58bc7590423f5f0ade36488ada804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Categoria
";
        
        $__internal_29e48f4ba658e64d6957772eea006ad68ae58bc7590423f5f0ade36488ada804->leave($__internal_29e48f4ba658e64d6957772eea006ad68ae58bc7590423f5f0ade36488ada804_prof);

    }

    public function getTemplateName()
    {
        return ":Categoria:categoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   Lista de Categoria
{% endblock %}", ":Categoria:categoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/Categoria/categoria.html.twig");
    }
}
