<?php

/* UsuarioCategoria/usuariocategoria.html.twig */
class __TwigTemplate_db8465f565e3cc9337d0b88e216b1a9f0ed23966fb2a5a4d374f54d4301e3f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuarioCategoria/usuariocategoria.html.twig", 1);
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
        $__internal_f80a7450cfcdabc0bcc07324fb0a969fe0e419346367ebbb1a18c1db2b45ee48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80a7450cfcdabc0bcc07324fb0a969fe0e419346367ebbb1a18c1db2b45ee48->enter($__internal_f80a7450cfcdabc0bcc07324fb0a969fe0e419346367ebbb1a18c1db2b45ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioCategoria/usuariocategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80a7450cfcdabc0bcc07324fb0a969fe0e419346367ebbb1a18c1db2b45ee48->leave($__internal_f80a7450cfcdabc0bcc07324fb0a969fe0e419346367ebbb1a18c1db2b45ee48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c99ac5e7fc5f3ac1b9d5d57794d7b3382e8fd16f7e8e08db0b1abf4f4f39aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99ac5e7fc5f3ac1b9d5d57794d7b3382e8fd16f7e8e08db0b1abf4f4f39aa1f->enter($__internal_c99ac5e7fc5f3ac1b9d5d57794d7b3382e8fd16f7e8e08db0b1abf4f4f39aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de CategoriaUsuarios
";
        
        $__internal_c99ac5e7fc5f3ac1b9d5d57794d7b3382e8fd16f7e8e08db0b1abf4f4f39aa1f->leave($__internal_c99ac5e7fc5f3ac1b9d5d57794d7b3382e8fd16f7e8e08db0b1abf4f4f39aa1f_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioCategoria/usuariocategoria.html.twig";
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
   Lista de CategoriaUsuarios
{% endblock %}", "UsuarioCategoria/usuariocategoria.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\UsuarioCategoria\\usuariocategoria.html.twig");
    }
}
