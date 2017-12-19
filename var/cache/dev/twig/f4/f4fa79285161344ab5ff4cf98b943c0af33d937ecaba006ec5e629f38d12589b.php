<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2f55015e9597d3991f9d5c474690a2db4b486e99b160d56cf02e584f64d085ff extends Twig_Template
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
        $__internal_37afcedaa3901793955d79b46127514d0501f0ee4f3f4dfca8a80f0d118dff16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37afcedaa3901793955d79b46127514d0501f0ee4f3f4dfca8a80f0d118dff16->enter($__internal_37afcedaa3901793955d79b46127514d0501f0ee4f3f4dfca8a80f0d118dff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_37afcedaa3901793955d79b46127514d0501f0ee4f3f4dfca8a80f0d118dff16->leave($__internal_37afcedaa3901793955d79b46127514d0501f0ee4f3f4dfca8a80f0d118dff16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
