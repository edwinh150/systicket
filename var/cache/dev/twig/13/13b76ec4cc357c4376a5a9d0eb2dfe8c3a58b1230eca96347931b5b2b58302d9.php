<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_34f187bb26b5cdcf4db6473d6fda99bae857254299ddff4ff6564e287d6f5f94 extends Twig_Template
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
        $__internal_9337d3b4d942e4e81c5ea2f7de3e4947fc67931d8a1d0db408991ad62d71bdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9337d3b4d942e4e81c5ea2f7de3e4947fc67931d8a1d0db408991ad62d71bdfe->enter($__internal_9337d3b4d942e4e81c5ea2f7de3e4947fc67931d8a1d0db408991ad62d71bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9337d3b4d942e4e81c5ea2f7de3e4947fc67931d8a1d0db408991ad62d71bdfe->leave($__internal_9337d3b4d942e4e81c5ea2f7de3e4947fc67931d8a1d0db408991ad62d71bdfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
