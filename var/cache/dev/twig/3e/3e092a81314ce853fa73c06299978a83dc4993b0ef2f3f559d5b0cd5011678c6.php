<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_31b399efab18a407ad5ae61873fd64a67cdb3bdfde566d37c144a84e25470ffb extends Twig_Template
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
        $__internal_bd54f85da3f5e75c54c79a6ec104ff41a4bf67eb19a7300bdb56946f3a05545f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd54f85da3f5e75c54c79a6ec104ff41a4bf67eb19a7300bdb56946f3a05545f->enter($__internal_bd54f85da3f5e75c54c79a6ec104ff41a4bf67eb19a7300bdb56946f3a05545f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bd54f85da3f5e75c54c79a6ec104ff41a4bf67eb19a7300bdb56946f3a05545f->leave($__internal_bd54f85da3f5e75c54c79a6ec104ff41a4bf67eb19a7300bdb56946f3a05545f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
