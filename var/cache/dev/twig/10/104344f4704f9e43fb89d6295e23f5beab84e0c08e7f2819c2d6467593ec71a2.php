<?php

/* Usuario/edit_user.html.twig */
class __TwigTemplate_ed57c34a2ee989f2671fd86332ac6253a9160bbe4bb4d9f76bd2db9410cd7178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Usuario/edit_user.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7608ef381a767376be65daa05bffab9aa1a75777cfadb97a64c88bd3ec313fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7608ef381a767376be65daa05bffab9aa1a75777cfadb97a64c88bd3ec313fcd->enter($__internal_7608ef381a767376be65daa05bffab9aa1a75777cfadb97a64c88bd3ec313fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Usuario/edit_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7608ef381a767376be65daa05bffab9aa1a75777cfadb97a64c88bd3ec313fcd->leave($__internal_7608ef381a767376be65daa05bffab9aa1a75777cfadb97a64c88bd3ec313fcd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa90599269462a1d2a257947886d2a480f358368948b2c1a6cbcb128e2f40706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa90599269462a1d2a257947886d2a480f358368948b2c1a6cbcb128e2f40706->enter($__internal_fa90599269462a1d2a257947886d2a480f358368948b2c1a6cbcb128e2f40706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edit User</h1>


    <form>

        ";
        // line 10
        echo "        <input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">


        <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\"  class=\"form-control\" id=\"name\" placeholder=\"Name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
        </div>


        <button type=\"button\" id=\"addUser\" class=\"btn btn-default\">Update User</button>
    </form>



";
        
        $__internal_fa90599269462a1d2a257947886d2a480f358368948b2c1a6cbcb128e2f40706->leave($__internal_fa90599269462a1d2a257947886d2a480f358368948b2c1a6cbcb128e2f40706_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_391788aac708ed2e0ba2fd3e2b01c84b84821055dc51aaab2d1b490e2f3727b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391788aac708ed2e0ba2fd3e2b01c84b84821055dc51aaab2d1b490e2f3727b1->enter($__internal_391788aac708ed2e0ba2fd3e2b01c84b84821055dc51aaab2d1b490e2f3727b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

     <script>


         function  addUser(user) {

             \$.ajax({
                 type: \"POST\",
                 data: JSON.stringify({\"name\" : \"5565\" }),
                 url: \"http://apitest/app_dev.php/users/\",
                 error: function() {

                 },
                 success: function (data) {
                     console.log(data);
                 }
             });

         }

         \$(document).ready(function () {

             \$('#addUser').click(function () {

                 var name = \$('#name').val();
                 var email = \$('#email').val();

               //  alert(name+\", \"+email);

                 addUser({ name : name, email: email});

             });


         });
         </script>

   
";
        
        $__internal_391788aac708ed2e0ba2fd3e2b01c84b84821055dc51aaab2d1b490e2f3727b1->leave($__internal_391788aac708ed2e0ba2fd3e2b01c84b84821055dc51aaab2d1b490e2f3727b1_prof);

    }

    public function getTemplateName()
    {
        return "Usuario/edit_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  82 => 31,  65 => 20,  57 => 15,  48 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Edit User</h1>


    <form>

        {# Input oculto para mantener el ID del Usuario #}
        <input type=\"hidden\" value=\"{{ user.id }}\">


        <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\"  class=\"form-control\" id=\"name\" placeholder=\"Name\" value=\"{{ user.name }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" value=\"{{ user.email }}\">
        </div>


        <button type=\"button\" id=\"addUser\" class=\"btn btn-default\">Update User</button>
    </form>



{% endblock %}

{% block javascripts %}
    {{ parent() }}

     <script>


         function  addUser(user) {

             \$.ajax({
                 type: \"POST\",
                 data: JSON.stringify({\"name\" : \"5565\" }),
                 url: \"http://apitest/app_dev.php/users/\",
                 error: function() {

                 },
                 success: function (data) {
                     console.log(data);
                 }
             });

         }

         \$(document).ready(function () {

             \$('#addUser').click(function () {

                 var name = \$('#name').val();
                 var email = \$('#email').val();

               //  alert(name+\", \"+email);

                 addUser({ name : name, email: email});

             });


         });
         </script>

   
{% endblock %}

", "Usuario/edit_user.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Usuario\\edit_user.html.twig");
    }
}
