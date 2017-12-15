<?php

/* :Categoria:categoria.html.twig */
class __TwigTemplate_371301039d4cdaef6f5db4dfddb51e6a35b3808e5db3a52b31dccce4882b318a extends Twig_Template
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
        $__internal_73012f7e1fd9e3bf28495db495f91fceb6255f5c965990b229e0c15f4d5d07ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73012f7e1fd9e3bf28495db495f91fceb6255f5c965990b229e0c15f4d5d07ec->enter($__internal_73012f7e1fd9e3bf28495db495f91fceb6255f5c965990b229e0c15f4d5d07ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Categoria:categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73012f7e1fd9e3bf28495db495f91fceb6255f5c965990b229e0c15f4d5d07ec->leave($__internal_73012f7e1fd9e3bf28495db495f91fceb6255f5c965990b229e0c15f4d5d07ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_249befa2e3d6f29f37111d1e8227af49994982a221604c06b9d36f86b77f5c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249befa2e3d6f29f37111d1e8227af49994982a221604c06b9d36f86b77f5c74->enter($__internal_249befa2e3d6f29f37111d1e8227af49994982a221604c06b9d36f86b77f5c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Categoria
";
        
        $__internal_249befa2e3d6f29f37111d1e8227af49994982a221604c06b9d36f86b77f5c74->leave($__internal_249befa2e3d6f29f37111d1e8227af49994982a221604c06b9d36f86b77f5c74_prof);

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
