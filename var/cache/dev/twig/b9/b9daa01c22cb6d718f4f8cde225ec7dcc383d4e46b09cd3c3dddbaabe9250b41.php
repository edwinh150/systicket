<?php

/* base1.html.twig */
class __TwigTemplate_6a4876394f651b1468c277a3d88cf07f8bccee49893f2a63d6025222a9aeb49b extends Twig_Template
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
        $__internal_35376edf0cef70cdc03bb558d55a46662dd1567abaa6eebef9bfc144a1fb260d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35376edf0cef70cdc03bb558d55a46662dd1567abaa6eebef9bfc144a1fb260d->enter($__internal_35376edf0cef70cdc03bb558d55a46662dd1567abaa6eebef9bfc144a1fb260d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_35376edf0cef70cdc03bb558d55a46662dd1567abaa6eebef9bfc144a1fb260d->leave($__internal_35376edf0cef70cdc03bb558d55a46662dd1567abaa6eebef9bfc144a1fb260d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_809e6fdd75671231dc9b732bed6f8ceb9ce4fcd156dbb4746e090413906dc18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809e6fdd75671231dc9b732bed6f8ceb9ce4fcd156dbb4746e090413906dc18a->enter($__internal_809e6fdd75671231dc9b732bed6f8ceb9ce4fcd156dbb4746e090413906dc18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_809e6fdd75671231dc9b732bed6f8ceb9ce4fcd156dbb4746e090413906dc18a->leave($__internal_809e6fdd75671231dc9b732bed6f8ceb9ce4fcd156dbb4746e090413906dc18a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13bcfb4886e3bd100d029c755bad8b1369f37dfb747bf9d92ce3e785f1f3b52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bcfb4886e3bd100d029c755bad8b1369f37dfb747bf9d92ce3e785f1f3b52f->enter($__internal_13bcfb4886e3bd100d029c755bad8b1369f37dfb747bf9d92ce3e785f1f3b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_13bcfb4886e3bd100d029c755bad8b1369f37dfb747bf9d92ce3e785f1f3b52f->leave($__internal_13bcfb4886e3bd100d029c755bad8b1369f37dfb747bf9d92ce3e785f1f3b52f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5583c7790df1e249e23f88c4a4647c342bb331ddf5b441edbbbfdc9dea440bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5583c7790df1e249e23f88c4a4647c342bb331ddf5b441edbbbfdc9dea440bf8->enter($__internal_5583c7790df1e249e23f88c4a4647c342bb331ddf5b441edbbbfdc9dea440bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5583c7790df1e249e23f88c4a4647c342bb331ddf5b441edbbbfdc9dea440bf8->leave($__internal_5583c7790df1e249e23f88c4a4647c342bb331ddf5b441edbbbfdc9dea440bf8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b181a06c7f4e83ee7147e24e4aa17743c31f93d781ca9957e45dd1c0ea94d1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b181a06c7f4e83ee7147e24e4aa17743c31f93d781ca9957e45dd1c0ea94d1eb->enter($__internal_b181a06c7f4e83ee7147e24e4aa17743c31f93d781ca9957e45dd1c0ea94d1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b181a06c7f4e83ee7147e24e4aa17743c31f93d781ca9957e45dd1c0ea94d1eb->leave($__internal_b181a06c7f4e83ee7147e24e4aa17743c31f93d781ca9957e45dd1c0ea94d1eb_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
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
", "base1.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\base1.html.twig");
    }
}
