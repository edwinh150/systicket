<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d086f7292cc10095f438731851126dd3c2a70f9e78f9fc994a0d3e1cae417ec0 extends Twig_Template
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
        $__internal_1fd40ba81d4c7cc9fe9ffe0225ac5899f4a866a0fb3f1de888419cd258e5ccd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd40ba81d4c7cc9fe9ffe0225ac5899f4a866a0fb3f1de888419cd258e5ccd9->enter($__internal_1fd40ba81d4c7cc9fe9ffe0225ac5899f4a866a0fb3f1de888419cd258e5ccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1fd40ba81d4c7cc9fe9ffe0225ac5899f4a866a0fb3f1de888419cd258e5ccd9->leave($__internal_1fd40ba81d4c7cc9fe9ffe0225ac5899f4a866a0fb3f1de888419cd258e5ccd9_prof);

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
