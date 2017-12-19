<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_62200f16b33ce65c95340ffe675e2179cb1f495df52b1dc8f983f080dee3ca31 extends Twig_Template
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
        $__internal_032847f9983550e5ffee84d68dc18fb7d97793dc2692c3e36832e7eb8370986a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032847f9983550e5ffee84d68dc18fb7d97793dc2692c3e36832e7eb8370986a->enter($__internal_032847f9983550e5ffee84d68dc18fb7d97793dc2692c3e36832e7eb8370986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_032847f9983550e5ffee84d68dc18fb7d97793dc2692c3e36832e7eb8370986a->leave($__internal_032847f9983550e5ffee84d68dc18fb7d97793dc2692c3e36832e7eb8370986a_prof);

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
