<?php

/* :roles:roles.html.twig */
class __TwigTemplate_23482b69e52e98f33333a486fb212f896d0a34d489fba8c4d10179f4f46a95c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":roles:roles.html.twig", 1);
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
        $__internal_de1a3db78dcc01f09621c966ee720fc9240d380bce95d0f775473e204079927d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1a3db78dcc01f09621c966ee720fc9240d380bce95d0f775473e204079927d->enter($__internal_de1a3db78dcc01f09621c966ee720fc9240d380bce95d0f775473e204079927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":roles:roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de1a3db78dcc01f09621c966ee720fc9240d380bce95d0f775473e204079927d->leave($__internal_de1a3db78dcc01f09621c966ee720fc9240d380bce95d0f775473e204079927d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d34eaf3b6614f11721cbf42d9237fe16c465add08055fa52254e516736eed684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34eaf3b6614f11721cbf42d9237fe16c465add08055fa52254e516736eed684->enter($__internal_d34eaf3b6614f11721cbf42d9237fe16c465add08055fa52254e516736eed684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Lista de Roles
";
        
        $__internal_d34eaf3b6614f11721cbf42d9237fe16c465add08055fa52254e516736eed684->leave($__internal_d34eaf3b6614f11721cbf42d9237fe16c465add08055fa52254e516736eed684_prof);

    }

    public function getTemplateName()
    {
        return ":roles:roles.html.twig";
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
{% endblock %}", ":roles:roles.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/roles/roles.html.twig");
    }
}
