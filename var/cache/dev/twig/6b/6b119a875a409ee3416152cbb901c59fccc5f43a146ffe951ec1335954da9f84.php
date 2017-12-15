<?php

/* :default:index.html.twig */
class __TwigTemplate_9abb42b9da1ac11b5d8b26c8521ecf90a6dccc2d53fb4176b1334076f495e4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_73df65ec207a5d09774a2fbd62d7b9888daefb6207196ecda92d388c84083fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73df65ec207a5d09774a2fbd62d7b9888daefb6207196ecda92d388c84083fab->enter($__internal_73df65ec207a5d09774a2fbd62d7b9888daefb6207196ecda92d388c84083fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73df65ec207a5d09774a2fbd62d7b9888daefb6207196ecda92d388c84083fab->leave($__internal_73df65ec207a5d09774a2fbd62d7b9888daefb6207196ecda92d388c84083fab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51d4f94ebbbf28ce1bf95539f4fa0c7dfd8a633a508d122c3da53cedcc42a6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d4f94ebbbf28ce1bf95539f4fa0c7dfd8a633a508d122c3da53cedcc42a6be->enter($__internal_51d4f94ebbbf28ce1bf95539f4fa0c7dfd8a633a508d122c3da53cedcc42a6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Prueba
";
        
        $__internal_51d4f94ebbbf28ce1bf95539f4fa0c7dfd8a633a508d122c3da53cedcc42a6be->leave($__internal_51d4f94ebbbf28ce1bf95539f4fa0c7dfd8a633a508d122c3da53cedcc42a6be_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
   Prueba
{% endblock %}
", ":default:index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/default/index.html.twig");
    }
}
