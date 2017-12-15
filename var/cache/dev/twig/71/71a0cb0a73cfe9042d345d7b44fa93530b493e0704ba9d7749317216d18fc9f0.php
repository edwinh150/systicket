<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bf9929fd214d662fcc44d895c0b6eda21d9055724b6876f1f480c1ecc275735a extends Twig_Template
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
        $__internal_f909f6ffa1260577e2d54d5932ba6a23344fb77c91d4d715fc99c215007fb46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f909f6ffa1260577e2d54d5932ba6a23344fb77c91d4d715fc99c215007fb46b->enter($__internal_f909f6ffa1260577e2d54d5932ba6a23344fb77c91d4d715fc99c215007fb46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f909f6ffa1260577e2d54d5932ba6a23344fb77c91d4d715fc99c215007fb46b->leave($__internal_f909f6ffa1260577e2d54d5932ba6a23344fb77c91d4d715fc99c215007fb46b_prof);

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
