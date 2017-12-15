<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3deb1d1cc5112844d23044509fca5f9a2ff0f79a50ccc83b4123b0373fd411a2 extends Twig_Template
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
        $__internal_11cdb7859da07fce95c544dda4b7e9ba4eb5f1b1da9abf0a3a1e6fabac161c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cdb7859da07fce95c544dda4b7e9ba4eb5f1b1da9abf0a3a1e6fabac161c9c->enter($__internal_11cdb7859da07fce95c544dda4b7e9ba4eb5f1b1da9abf0a3a1e6fabac161c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_11cdb7859da07fce95c544dda4b7e9ba4eb5f1b1da9abf0a3a1e6fabac161c9c->leave($__internal_11cdb7859da07fce95c544dda4b7e9ba4eb5f1b1da9abf0a3a1e6fabac161c9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
