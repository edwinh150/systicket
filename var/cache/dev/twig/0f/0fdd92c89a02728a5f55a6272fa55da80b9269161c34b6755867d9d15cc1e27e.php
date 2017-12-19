<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac552afe7420b5f391b086cd1d313a11e0ee6483dd6f0c8249f44ee51a7b3610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f64cf18a7cada6c9f7697acc650f13681400173c5f04f1676e8d3ef3b6386f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64cf18a7cada6c9f7697acc650f13681400173c5f04f1676e8d3ef3b6386f36->enter($__internal_f64cf18a7cada6c9f7697acc650f13681400173c5f04f1676e8d3ef3b6386f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f64cf18a7cada6c9f7697acc650f13681400173c5f04f1676e8d3ef3b6386f36->leave($__internal_f64cf18a7cada6c9f7697acc650f13681400173c5f04f1676e8d3ef3b6386f36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
