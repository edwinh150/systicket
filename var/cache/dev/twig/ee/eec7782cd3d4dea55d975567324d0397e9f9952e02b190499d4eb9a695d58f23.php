<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_126c7af97bc4f8a3dc25a1aa0510719650c9b309cf52d3a56747d2b3734ead3e extends Twig_Template
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
        $__internal_e8d097e0b13e4644f948a403edba92ad3ce9978ade3c8177fdb8aedadbb6ca9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d097e0b13e4644f948a403edba92ad3ce9978ade3c8177fdb8aedadbb6ca9d->enter($__internal_e8d097e0b13e4644f948a403edba92ad3ce9978ade3c8177fdb8aedadbb6ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e8d097e0b13e4644f948a403edba92ad3ce9978ade3c8177fdb8aedadbb6ca9d->leave($__internal_e8d097e0b13e4644f948a403edba92ad3ce9978ade3c8177fdb8aedadbb6ca9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
