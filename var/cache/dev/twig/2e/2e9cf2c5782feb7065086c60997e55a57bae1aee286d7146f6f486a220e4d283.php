<?php

/* :Notas:notas.html.twig */
class __TwigTemplate_b70075cb97cc5add082f97ad17c1bcd3d12e23edf4b6d2f6519a7ca65e6de96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Notas:notas.html.twig", 1);
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
        $__internal_68b67b5a5f53ba07e6f4b183fb5c86d544e12c1d7dcd523e35c5ecca9290fa2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b67b5a5f53ba07e6f4b183fb5c86d544e12c1d7dcd523e35c5ecca9290fa2b->enter($__internal_68b67b5a5f53ba07e6f4b183fb5c86d544e12c1d7dcd523e35c5ecca9290fa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Notas:notas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b67b5a5f53ba07e6f4b183fb5c86d544e12c1d7dcd523e35c5ecca9290fa2b->leave($__internal_68b67b5a5f53ba07e6f4b183fb5c86d544e12c1d7dcd523e35c5ecca9290fa2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc7971ae60f8d27e777c1ba7a04b0b021d51a36a89a7a42af61be1b51fee3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc7971ae60f8d27e777c1ba7a04b0b021d51a36a89a7a42af61be1b51fee3e4->enter($__internal_ccc7971ae60f8d27e777c1ba7a04b0b021d51a36a89a7a42af61be1b51fee3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Notas
";
        
        $__internal_ccc7971ae60f8d27e777c1ba7a04b0b021d51a36a89a7a42af61be1b51fee3e4->leave($__internal_ccc7971ae60f8d27e777c1ba7a04b0b021d51a36a89a7a42af61be1b51fee3e4_prof);

    }

    public function getTemplateName()
    {
        return ":Notas:notas.html.twig";
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
   Lista de Notas
{% endblock %}", ":Notas:notas.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/Notas/notas.html.twig");
    }
}
