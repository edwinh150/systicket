<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_03d33562d8a670d66711c2265efc26b87961d4515c60aa5a4a039951daa9763e extends Twig_Template
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
        $__internal_4861c9c6d1fc7a4737fe1337da9bfb2040b091a9d2a5d47c6f6e02c52cf264b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4861c9c6d1fc7a4737fe1337da9bfb2040b091a9d2a5d47c6f6e02c52cf264b5->enter($__internal_4861c9c6d1fc7a4737fe1337da9bfb2040b091a9d2a5d47c6f6e02c52cf264b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4861c9c6d1fc7a4737fe1337da9bfb2040b091a9d2a5d47c6f6e02c52cf264b5->leave($__internal_4861c9c6d1fc7a4737fe1337da9bfb2040b091a9d2a5d47c6f6e02c52cf264b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
