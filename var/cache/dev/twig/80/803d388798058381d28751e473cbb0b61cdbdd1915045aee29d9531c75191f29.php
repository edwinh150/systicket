<?php

/* @Blog/default/index.html.twig */
class __TwigTemplate_f01b6dcc863180c7fedb9f606e910b1a0d9b9191ad9c698f85ceaa3efa37a301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/default/index.html.twig", 1);
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
        $__internal_24ec633d58aa653a33335ea864f47f3594c1de8726118fc4bee1c7c4a2766b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ec633d58aa653a33335ea864f47f3594c1de8726118fc4bee1c7c4a2766b73->enter($__internal_24ec633d58aa653a33335ea864f47f3594c1de8726118fc4bee1c7c4a2766b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ec633d58aa653a33335ea864f47f3594c1de8726118fc4bee1c7c4a2766b73->leave($__internal_24ec633d58aa653a33335ea864f47f3594c1de8726118fc4bee1c7c4a2766b73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a0214fb905d0b30d7007be030e844b7d1d8f80635a2f15c11b2b5a13691ce3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0214fb905d0b30d7007be030e844b7d1d8f80635a2f15c11b2b5a13691ce3d->enter($__internal_9a0214fb905d0b30d7007be030e844b7d1d8f80635a2f15c11b2b5a13691ce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Bienvenido a Systicket
";
        
        $__internal_9a0214fb905d0b30d7007be030e844b7d1d8f80635a2f15c11b2b5a13691ce3d->leave($__internal_9a0214fb905d0b30d7007be030e844b7d1d8f80635a2f15c11b2b5a13691ce3d_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/default/index.html.twig";
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
   Bienvenido a Systicket
{% endblock %}
", "@Blog/default/index.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\default\\index.html.twig");
    }
}
