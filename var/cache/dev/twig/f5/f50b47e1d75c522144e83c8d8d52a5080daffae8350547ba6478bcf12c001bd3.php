<?php

/* :Usuario:edit_user.html.twig */
class __TwigTemplate_947068fc2ad8abd9e4ce0dbcdbad77c6a81bccb8f4ff2a7b5e87094ab077eab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Usuario:edit_user.html.twig", 1);
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
        $__internal_89e867cc6ce2312ff330b569635e51df9a34ff51a4b7aa964d3886ec078d680e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e867cc6ce2312ff330b569635e51df9a34ff51a4b7aa964d3886ec078d680e->enter($__internal_89e867cc6ce2312ff330b569635e51df9a34ff51a4b7aa964d3886ec078d680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Usuario:edit_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e867cc6ce2312ff330b569635e51df9a34ff51a4b7aa964d3886ec078d680e->leave($__internal_89e867cc6ce2312ff330b569635e51df9a34ff51a4b7aa964d3886ec078d680e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f14981af0b08dce91b27a0bfcb81f96ec6dfe691ca49b1dff16a173f52fb23cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14981af0b08dce91b27a0bfcb81f96ec6dfe691ca49b1dff16a173f52fb23cc->enter($__internal_f14981af0b08dce91b27a0bfcb81f96ec6dfe691ca49b1dff16a173f52fb23cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f14981af0b08dce91b27a0bfcb81f96ec6dfe691ca49b1dff16a173f52fb23cc->leave($__internal_f14981af0b08dce91b27a0bfcb81f96ec6dfe691ca49b1dff16a173f52fb23cc_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_349afd516baed9f7100a0062686fbb127cdc0196c3674915533090e4a4bd5724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349afd516baed9f7100a0062686fbb127cdc0196c3674915533090e4a4bd5724->enter($__internal_349afd516baed9f7100a0062686fbb127cdc0196c3674915533090e4a4bd5724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_349afd516baed9f7100a0062686fbb127cdc0196c3674915533090e4a4bd5724->leave($__internal_349afd516baed9f7100a0062686fbb127cdc0196c3674915533090e4a4bd5724_prof);

    }

    public function getTemplateName()
    {
        return ":Usuario:edit_user.html.twig";
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

", ":Usuario:edit_user.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app/Resources\\views/Usuario/edit_user.html.twig");
    }
}
