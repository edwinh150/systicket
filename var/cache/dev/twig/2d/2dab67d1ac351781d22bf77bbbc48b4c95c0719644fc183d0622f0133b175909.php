<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4ba63c802ee0bc6757fc5533a3fa952462a04c01b89b5227b9aabfcee11d7e2d extends Twig_Template
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
        $__internal_4771ad27552deb7b020cddc725ec88ac0258f9e3368ee6d47c0e3c3f0a4ac661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4771ad27552deb7b020cddc725ec88ac0258f9e3368ee6d47c0e3c3f0a4ac661->enter($__internal_4771ad27552deb7b020cddc725ec88ac0258f9e3368ee6d47c0e3c3f0a4ac661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4771ad27552deb7b020cddc725ec88ac0258f9e3368ee6d47c0e3c3f0a4ac661->leave($__internal_4771ad27552deb7b020cddc725ec88ac0258f9e3368ee6d47c0e3c3f0a4ac661_prof);

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
