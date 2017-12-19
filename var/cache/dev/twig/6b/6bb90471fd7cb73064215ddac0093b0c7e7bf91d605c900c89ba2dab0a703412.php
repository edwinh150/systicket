<?php

/* BlogBundle::base1.html.twig */
class __TwigTemplate_ff6342a595c923f74f954516a65b7a769fbf429cd0206b692033821c3d159e5d extends Twig_Template
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
        $__internal_73ea55fcd0dea84acf70fb104cf27770f2a427fcdc331abd0d44c2fd39990c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ea55fcd0dea84acf70fb104cf27770f2a427fcdc331abd0d44c2fd39990c15->enter($__internal_73ea55fcd0dea84acf70fb104cf27770f2a427fcdc331abd0d44c2fd39990c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::base1.html.twig"));

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
        
        $__internal_73ea55fcd0dea84acf70fb104cf27770f2a427fcdc331abd0d44c2fd39990c15->leave($__internal_73ea55fcd0dea84acf70fb104cf27770f2a427fcdc331abd0d44c2fd39990c15_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5173bab084a4ca613e88e9d2d5b0e47208163ba88a7f43c10f319ace5623f6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5173bab084a4ca613e88e9d2d5b0e47208163ba88a7f43c10f319ace5623f6b4->enter($__internal_5173bab084a4ca613e88e9d2d5b0e47208163ba88a7f43c10f319ace5623f6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5173bab084a4ca613e88e9d2d5b0e47208163ba88a7f43c10f319ace5623f6b4->leave($__internal_5173bab084a4ca613e88e9d2d5b0e47208163ba88a7f43c10f319ace5623f6b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df80ffa264a51a14d0c22146b6b5abda5d2a2dbc70a7630a76984d26b1947b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df80ffa264a51a14d0c22146b6b5abda5d2a2dbc70a7630a76984d26b1947b5d->enter($__internal_df80ffa264a51a14d0c22146b6b5abda5d2a2dbc70a7630a76984d26b1947b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df80ffa264a51a14d0c22146b6b5abda5d2a2dbc70a7630a76984d26b1947b5d->leave($__internal_df80ffa264a51a14d0c22146b6b5abda5d2a2dbc70a7630a76984d26b1947b5d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1de4453d4ae9aa6f85f5bd1c5bfbc7db1d3ce6e217ddd9937fb7adc90c4ab8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1de4453d4ae9aa6f85f5bd1c5bfbc7db1d3ce6e217ddd9937fb7adc90c4ab8a->enter($__internal_a1de4453d4ae9aa6f85f5bd1c5bfbc7db1d3ce6e217ddd9937fb7adc90c4ab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1de4453d4ae9aa6f85f5bd1c5bfbc7db1d3ce6e217ddd9937fb7adc90c4ab8a->leave($__internal_a1de4453d4ae9aa6f85f5bd1c5bfbc7db1d3ce6e217ddd9937fb7adc90c4ab8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d9e0133d0094be64e0c5a05ea6cc3f437392877e190c876e27ed6ccdd5159e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9e0133d0094be64e0c5a05ea6cc3f437392877e190c876e27ed6ccdd5159e0->enter($__internal_7d9e0133d0094be64e0c5a05ea6cc3f437392877e190c876e27ed6ccdd5159e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d9e0133d0094be64e0c5a05ea6cc3f437392877e190c876e27ed6ccdd5159e0->leave($__internal_7d9e0133d0094be64e0c5a05ea6cc3f437392877e190c876e27ed6ccdd5159e0_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::base1.html.twig";
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
", "BlogBundle::base1.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/base1.html.twig");
    }
}
