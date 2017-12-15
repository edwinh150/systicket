<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_74b1108d85b658754f0f574f01ba2f397898f183f158fc1ed4836eed4e7d077e extends Twig_Template
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
        $__internal_debbd72fb6fea1397de7b0fa0ae01b1c430f22cce654c6587a5f005834f9e9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debbd72fb6fea1397de7b0fa0ae01b1c430f22cce654c6587a5f005834f9e9b8->enter($__internal_debbd72fb6fea1397de7b0fa0ae01b1c430f22cce654c6587a5f005834f9e9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_debbd72fb6fea1397de7b0fa0ae01b1c430f22cce654c6587a5f005834f9e9b8->leave($__internal_debbd72fb6fea1397de7b0fa0ae01b1c430f22cce654c6587a5f005834f9e9b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
