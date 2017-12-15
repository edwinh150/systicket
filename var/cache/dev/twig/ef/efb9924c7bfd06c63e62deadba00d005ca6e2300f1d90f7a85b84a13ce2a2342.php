<?php

/* @Blog/css/navbar-top-fixed.css */
class __TwigTemplate_a542b988328d1337730172ee6e4d1385360466fd565e7a9b911a4987f7a0e400 extends Twig_Template
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
        $__internal_57af6386480127d66e6c37c67209481e292e772453f9faa88ddfd96dd0343923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af6386480127d66e6c37c67209481e292e772453f9faa88ddfd96dd0343923->enter($__internal_57af6386480127d66e6c37c67209481e292e772453f9faa88ddfd96dd0343923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/css/navbar-top-fixed.css"));

        // line 1
        echo "/* Show it is fixed to the top */
body {
  min-height: 75rem;
  padding-top: 4.5rem;
}
";
        
        $__internal_57af6386480127d66e6c37c67209481e292e772453f9faa88ddfd96dd0343923->leave($__internal_57af6386480127d66e6c37c67209481e292e772453f9faa88ddfd96dd0343923_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/css/navbar-top-fixed.css";
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
        return new Twig_Source("/* Show it is fixed to the top */
body {
  min-height: 75rem;
  padding-top: 4.5rem;
}
", "@Blog/css/navbar-top-fixed.css", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle\\Resources\\views\\css\\navbar-top-fixed.css");
    }
}
