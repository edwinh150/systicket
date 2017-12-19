<?php

/* @Blog/base1.html.twig */
class __TwigTemplate_87d16cadd01b1219b2b09e9efa459d736b50f5296398f063ba929c90ee1f6d44 extends Twig_Template
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
        $__internal_1834315ced4ded4eb9f3581518e34168cf9114d5441903818a03a2dc32d8d806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1834315ced4ded4eb9f3581518e34168cf9114d5441903818a03a2dc32d8d806->enter($__internal_1834315ced4ded4eb9f3581518e34168cf9114d5441903818a03a2dc32d8d806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/base1.html.twig"));

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
        
        $__internal_1834315ced4ded4eb9f3581518e34168cf9114d5441903818a03a2dc32d8d806->leave($__internal_1834315ced4ded4eb9f3581518e34168cf9114d5441903818a03a2dc32d8d806_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7c5a028a38970d254ebf0246812d33b2948515e66ff2259747b9253384bcaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c5a028a38970d254ebf0246812d33b2948515e66ff2259747b9253384bcaf0->enter($__internal_c7c5a028a38970d254ebf0246812d33b2948515e66ff2259747b9253384bcaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7c5a028a38970d254ebf0246812d33b2948515e66ff2259747b9253384bcaf0->leave($__internal_c7c5a028a38970d254ebf0246812d33b2948515e66ff2259747b9253384bcaf0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_024c882616a3a70e041f85663bf12ac3aee957b5ebe6efc7b13e8257c395f06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024c882616a3a70e041f85663bf12ac3aee957b5ebe6efc7b13e8257c395f06b->enter($__internal_024c882616a3a70e041f85663bf12ac3aee957b5ebe6efc7b13e8257c395f06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_024c882616a3a70e041f85663bf12ac3aee957b5ebe6efc7b13e8257c395f06b->leave($__internal_024c882616a3a70e041f85663bf12ac3aee957b5ebe6efc7b13e8257c395f06b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ce9412e4e833f0f40e7cee500f1459d7d0a9e474613a7be05a4c0c4eb9f97c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce9412e4e833f0f40e7cee500f1459d7d0a9e474613a7be05a4c0c4eb9f97c0->enter($__internal_4ce9412e4e833f0f40e7cee500f1459d7d0a9e474613a7be05a4c0c4eb9f97c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ce9412e4e833f0f40e7cee500f1459d7d0a9e474613a7be05a4c0c4eb9f97c0->leave($__internal_4ce9412e4e833f0f40e7cee500f1459d7d0a9e474613a7be05a4c0c4eb9f97c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_718a28df9ba8f2d031add64500f2e1b0f9c0e6fe4f71d1c2a4921e57b56ffbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718a28df9ba8f2d031add64500f2e1b0f9c0e6fe4f71d1c2a4921e57b56ffbdf->enter($__internal_718a28df9ba8f2d031add64500f2e1b0f9c0e6fe4f71d1c2a4921e57b56ffbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_718a28df9ba8f2d031add64500f2e1b0f9c0e6fe4f71d1c2a4921e57b56ffbdf->leave($__internal_718a28df9ba8f2d031add64500f2e1b0f9c0e6fe4f71d1c2a4921e57b56ffbdf_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/base1.html.twig";
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
", "@Blog/base1.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\base1.html.twig");
    }
}
