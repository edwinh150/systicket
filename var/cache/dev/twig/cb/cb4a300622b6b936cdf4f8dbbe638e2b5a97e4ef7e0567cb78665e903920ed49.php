<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dbf593ce673aa5be21f5771ea4c8965112127e3bee097d0dbdfd7e6c17b2adb3 extends Twig_Template
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
        $__internal_9303232ac326ca7fb519aa693d4dfa4d2e924c3b00aa7c87091e3fb435b5be6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9303232ac326ca7fb519aa693d4dfa4d2e924c3b00aa7c87091e3fb435b5be6b->enter($__internal_9303232ac326ca7fb519aa693d4dfa4d2e924c3b00aa7c87091e3fb435b5be6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9303232ac326ca7fb519aa693d4dfa4d2e924c3b00aa7c87091e3fb435b5be6b->leave($__internal_9303232ac326ca7fb519aa693d4dfa4d2e924c3b00aa7c87091e3fb435b5be6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
