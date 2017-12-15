<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d8b00c93abfbe35835e73aed173788926dd34edd11c7545c04abde5f9ac16294 extends Twig_Template
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
        $__internal_009ae8ccacbf0167ce604bd4719f72614d2824cc41a90b864bc143d88dac28a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009ae8ccacbf0167ce604bd4719f72614d2824cc41a90b864bc143d88dac28a2->enter($__internal_009ae8ccacbf0167ce604bd4719f72614d2824cc41a90b864bc143d88dac28a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_009ae8ccacbf0167ce604bd4719f72614d2824cc41a90b864bc143d88dac28a2->leave($__internal_009ae8ccacbf0167ce604bd4719f72614d2824cc41a90b864bc143d88dac28a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
