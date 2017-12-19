<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_89f7a3b50f2e44e7b36439c9a685797fd460dbd824389ad1d7b56d9e9539a64e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_652620b01fb7b077503ed55e69582c67eeb079047d7f97b92d399cbf35d572b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652620b01fb7b077503ed55e69582c67eeb079047d7f97b92d399cbf35d572b4->enter($__internal_652620b01fb7b077503ed55e69582c67eeb079047d7f97b92d399cbf35d572b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652620b01fb7b077503ed55e69582c67eeb079047d7f97b92d399cbf35d572b4->leave($__internal_652620b01fb7b077503ed55e69582c67eeb079047d7f97b92d399cbf35d572b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f45c354369acef14136314c9890cef654ec33e838afea59afff4e5acaaed11cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45c354369acef14136314c9890cef654ec33e838afea59afff4e5acaaed11cb->enter($__internal_f45c354369acef14136314c9890cef654ec33e838afea59afff4e5acaaed11cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f45c354369acef14136314c9890cef654ec33e838afea59afff4e5acaaed11cb->leave($__internal_f45c354369acef14136314c9890cef654ec33e838afea59afff4e5acaaed11cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20e72ccdf1669a8fed49acd94333768a92b0d9d1896bdb409fe383b7aa19b8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e72ccdf1669a8fed49acd94333768a92b0d9d1896bdb409fe383b7aa19b8a8->enter($__internal_20e72ccdf1669a8fed49acd94333768a92b0d9d1896bdb409fe383b7aa19b8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20e72ccdf1669a8fed49acd94333768a92b0d9d1896bdb409fe383b7aa19b8a8->leave($__internal_20e72ccdf1669a8fed49acd94333768a92b0d9d1896bdb409fe383b7aa19b8a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed0d365c8f2729eb104972db8d9acf0c5532aaae041446f7ee83c722823c352c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d365c8f2729eb104972db8d9acf0c5532aaae041446f7ee83c722823c352c->enter($__internal_ed0d365c8f2729eb104972db8d9acf0c5532aaae041446f7ee83c722823c352c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed0d365c8f2729eb104972db8d9acf0c5532aaae041446f7ee83c722823c352c->leave($__internal_ed0d365c8f2729eb104972db8d9acf0c5532aaae041446f7ee83c722823c352c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
