<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6093ef43a6bb133bcbadc667fe361ffee369ba6967f7889f8b504474d7374d93 extends Twig_Template
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
        $__internal_37d171c20fc0bcf8fa74cbad27c68c84b8cc253661baea672ddcb9b6afa5d8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d171c20fc0bcf8fa74cbad27c68c84b8cc253661baea672ddcb9b6afa5d8b1->enter($__internal_37d171c20fc0bcf8fa74cbad27c68c84b8cc253661baea672ddcb9b6afa5d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d171c20fc0bcf8fa74cbad27c68c84b8cc253661baea672ddcb9b6afa5d8b1->leave($__internal_37d171c20fc0bcf8fa74cbad27c68c84b8cc253661baea672ddcb9b6afa5d8b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a0fd0f3139bb57f346361db910d0d8ddab545304f351f6cc0e1c3b592756d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0fd0f3139bb57f346361db910d0d8ddab545304f351f6cc0e1c3b592756d5f->enter($__internal_1a0fd0f3139bb57f346361db910d0d8ddab545304f351f6cc0e1c3b592756d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a0fd0f3139bb57f346361db910d0d8ddab545304f351f6cc0e1c3b592756d5f->leave($__internal_1a0fd0f3139bb57f346361db910d0d8ddab545304f351f6cc0e1c3b592756d5f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2a085229aa3d8ce92b758fc4799b9c42a36966810083ebf725a2b727eeb5584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a085229aa3d8ce92b758fc4799b9c42a36966810083ebf725a2b727eeb5584->enter($__internal_b2a085229aa3d8ce92b758fc4799b9c42a36966810083ebf725a2b727eeb5584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2a085229aa3d8ce92b758fc4799b9c42a36966810083ebf725a2b727eeb5584->leave($__internal_b2a085229aa3d8ce92b758fc4799b9c42a36966810083ebf725a2b727eeb5584_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b2f951503208f5ca791209606ac62f5fe996c5e71fa6385875d8d12d720448d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2f951503208f5ca791209606ac62f5fe996c5e71fa6385875d8d12d720448d->enter($__internal_8b2f951503208f5ca791209606ac62f5fe996c5e71fa6385875d8d12d720448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b2f951503208f5ca791209606ac62f5fe996c5e71fa6385875d8d12d720448d->leave($__internal_8b2f951503208f5ca791209606ac62f5fe996c5e71fa6385875d8d12d720448d_prof);

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
