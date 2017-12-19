<?php

/* roles/roles.html.twig */
class __TwigTemplate_8c868564832a60bdfeecb232526f15b3b790683ed7d87d31a5855e9c4dfc4a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "roles/roles.html.twig", 1);
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
        $__internal_9a899069ff67310bfc83af9be7811f5fae8e393e3587e6f977eab3af376e81ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a899069ff67310bfc83af9be7811f5fae8e393e3587e6f977eab3af376e81ac->enter($__internal_9a899069ff67310bfc83af9be7811f5fae8e393e3587e6f977eab3af376e81ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "roles/roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a899069ff67310bfc83af9be7811f5fae8e393e3587e6f977eab3af376e81ac->leave($__internal_9a899069ff67310bfc83af9be7811f5fae8e393e3587e6f977eab3af376e81ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c70574b8fcb3f3bbe5de8e76cdeb69b9a0e0829f1b6b208a9f15fb2ca18f885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c70574b8fcb3f3bbe5de8e76cdeb69b9a0e0829f1b6b208a9f15fb2ca18f885->enter($__internal_5c70574b8fcb3f3bbe5de8e76cdeb69b9a0e0829f1b6b208a9f15fb2ca18f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Roles
";
        
        $__internal_5c70574b8fcb3f3bbe5de8e76cdeb69b9a0e0829f1b6b208a9f15fb2ca18f885->leave($__internal_5c70574b8fcb3f3bbe5de8e76cdeb69b9a0e0829f1b6b208a9f15fb2ca18f885_prof);

    }

    public function getTemplateName()
    {
        return "roles/roles.html.twig";
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
   Lista de Roles
{% endblock %}", "roles/roles.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\roles\\roles.html.twig");
    }
}
