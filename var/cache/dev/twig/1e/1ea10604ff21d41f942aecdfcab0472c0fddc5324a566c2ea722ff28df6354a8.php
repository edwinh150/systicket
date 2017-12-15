<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f9807bcb05807814553e58f1982d3ac2137d0f4e2ac6a3c3dfa1d7403feed53e extends Twig_Template
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
        $__internal_52c341c1d51e59ae645f342d2e6b715ca0aa932995f17bcbe8d71aeb9e97256f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c341c1d51e59ae645f342d2e6b715ca0aa932995f17bcbe8d71aeb9e97256f->enter($__internal_52c341c1d51e59ae645f342d2e6b715ca0aa932995f17bcbe8d71aeb9e97256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_52c341c1d51e59ae645f342d2e6b715ca0aa932995f17bcbe8d71aeb9e97256f->leave($__internal_52c341c1d51e59ae645f342d2e6b715ca0aa932995f17bcbe8d71aeb9e97256f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
