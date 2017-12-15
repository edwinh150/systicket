<?php

/* ::base1.html.twig */
class __TwigTemplate_1c43c2a099368a887b7591404787a2483cf89b2874c0736663b8830c7eb8652a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d1848d19d3efd2db72f8ad36a1b9197a12f9273804ccf36b86f065472a4117c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1848d19d3efd2db72f8ad36a1b9197a12f9273804ccf36b86f065472a4117c->enter($__internal_1d1848d19d3efd2db72f8ad36a1b9197a12f9273804ccf36b86f065472a4117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1d1848d19d3efd2db72f8ad36a1b9197a12f9273804ccf36b86f065472a4117c->leave($__internal_1d1848d19d3efd2db72f8ad36a1b9197a12f9273804ccf36b86f065472a4117c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48330d0cbf2e596732cc7e0200b0f13120580ef5a894fa364793aa0f62f66d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48330d0cbf2e596732cc7e0200b0f13120580ef5a894fa364793aa0f62f66d0a->enter($__internal_48330d0cbf2e596732cc7e0200b0f13120580ef5a894fa364793aa0f62f66d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48330d0cbf2e596732cc7e0200b0f13120580ef5a894fa364793aa0f62f66d0a->leave($__internal_48330d0cbf2e596732cc7e0200b0f13120580ef5a894fa364793aa0f62f66d0a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4f451ac9101685c937b467fc714b4372829622270241bb9b592ff21e8d287a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f451ac9101685c937b467fc714b4372829622270241bb9b592ff21e8d287a7->enter($__internal_c4f451ac9101685c937b467fc714b4372829622270241bb9b592ff21e8d287a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c4f451ac9101685c937b467fc714b4372829622270241bb9b592ff21e8d287a7->leave($__internal_c4f451ac9101685c937b467fc714b4372829622270241bb9b592ff21e8d287a7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b0df060d9f9511d501d472c66cd965a5719cd1d31bb10e68150f290eebc4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b0df060d9f9511d501d472c66cd965a5719cd1d31bb10e68150f290eebc4c2->enter($__internal_e8b0df060d9f9511d501d472c66cd965a5719cd1d31bb10e68150f290eebc4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8b0df060d9f9511d501d472c66cd965a5719cd1d31bb10e68150f290eebc4c2->leave($__internal_e8b0df060d9f9511d501d472c66cd965a5719cd1d31bb10e68150f290eebc4c2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac3854d726203b30f0fc442c8e97c5c0a96524ef3399931f8a0fa097a06580d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3854d726203b30f0fc442c8e97c5c0a96524ef3399931f8a0fa097a06580d4->enter($__internal_ac3854d726203b30f0fc442c8e97c5c0a96524ef3399931f8a0fa097a06580d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac3854d726203b30f0fc442c8e97c5c0a96524ef3399931f8a0fa097a06580d4->leave($__internal_ac3854d726203b30f0fc442c8e97c5c0a96524ef3399931f8a0fa097a06580d4_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base1.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/base1.html.twig");
    }
}
