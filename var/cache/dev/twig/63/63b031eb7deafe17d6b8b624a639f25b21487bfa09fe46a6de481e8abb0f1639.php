<?php

/* usuario/insertarusuario.html.twig */
class __TwigTemplate_bd5cf616113a17b66e55a4d081f635a24c7556d76ab4cfe331f48a31623e41f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/insertarusuario.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8e23139673cd929af3a73da65201adec4fefb0bc4d22fcd722466e09462cf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e23139673cd929af3a73da65201adec4fefb0bc4d22fcd722466e09462cf0c->enter($__internal_b8e23139673cd929af3a73da65201adec4fefb0bc4d22fcd722466e09462cf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/insertarusuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e23139673cd929af3a73da65201adec4fefb0bc4d22fcd722466e09462cf0c->leave($__internal_b8e23139673cd929af3a73da65201adec4fefb0bc4d22fcd722466e09462cf0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d79b16e27f46b249d6602dd07446446388b960fb39ac107815ba5593ea508604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79b16e27f46b249d6602dd07446446388b960fb39ac107815ba5593ea508604->enter($__internal_d79b16e27f46b249d6602dd07446446388b960fb39ac107815ba5593ea508604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
    <h3>Registro de Usuarios</h3>

    <form id=\"my-form\">
         <div class=\"form-group\">
\t\t    <label>Nombres:</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"nombres\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Apellidos:</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"apellidos\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Nombre de Usuario:</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"username\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Contraseña:</label>
\t\t    <input type=\"password\" class=\"form-control\" id=\"password\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Tipo de Usuario:</label>
\t\t    <select class=\"form-control\" id=\"tipoUsuario\">
\t\t        <option value=\"1\">Administrador</option>
\t\t        <option value=\"2\">Normal</option>
\t        </select>
\t\t </div>
        <button type=\"submit\" class=\"btn btn-success\">Guardar</button>
        <button class=\"btn btn-primary\">Editar</button>
        <button class=\"btn btn-danger\">Eliminar</button>
        <button class=\"btn btn-info\" onclick=\"limpiarText()\">Nuevo</button>
    </form>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        (function(\$){
            function processForm( e ){
            \$.ajax({
                type: \"POST\",
                url: \"http://127.0.0.1:8000/usuario/insertar\",
                // The key needs to match your method's input parameter (case-sensitive).
                data: JSON.stringify({ 
                \t\"nombres\": \$(\"#nombres\").val()
                \t,\"apellidos\" : \$(\"#apellidos\").val()
                \t,\"username\" : \$(\"#username\").val()
                    , \"password\" : \$(\"#password\").val()
                    , \"tipoUsuario\" : \$(\"#tipoUsuario\").val()
                    , \"rolId\" : 1
                    , \"estado\" : \"Activo\"
                    , \"fechaRegistro\" : \"2017-12-09\" }),
                contentType: \"application/json; charset=utf-8\",
                dataType: \"json\",
                success: function(data){
                    myFunction();
                    limpiarText();
                },
                failure: function(errMsg) {
                    alert(errMsg);
                }
            }); 
            e.preventDefault();
        }

        \$('#my-form').submit( processForm );
        })(jQuery);

        function myFunction() {
            var x = document.getElementById(\"snackbar\")
            x.className = \"show\";
            setTimeout(function(){ x.className = x.className.replace(\"show\", \"\"); }, 3000);
        }

        function limpiarText(){
            \$(\"#nombres\").val(\"\");
            \$(\"#apellidos\").val(\"\");
            \$(\"#username\").val(\"\");
            \$(\"#password\").val(\"\");
            \$(\"#tipoUsuario\").val(\"1\");
        }
    </script>

<div id=\"snackbar\">Usuario guardado correctamente.</div>

";
        
        $__internal_d79b16e27f46b249d6602dd07446446388b960fb39ac107815ba5593ea508604->leave($__internal_d79b16e27f46b249d6602dd07446446388b960fb39ac107815ba5593ea508604_prof);

    }

    // line 131
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0220647bfe3e084e6ba13f165aebfa09cc2438e30e67c06bef79a71faa5d08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0220647bfe3e084e6ba13f165aebfa09cc2438e30e67c06bef79a71faa5d08e->enter($__internal_f0220647bfe3e084e6ba13f165aebfa09cc2438e30e67c06bef79a71faa5d08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0220647bfe3e084e6ba13f165aebfa09cc2438e30e67c06bef79a71faa5d08e->leave($__internal_f0220647bfe3e084e6ba13f165aebfa09cc2438e30e67c06bef79a71faa5d08e_prof);

    }

    public function getTemplateName()
    {
        return "usuario/insertarusuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 131,  41 => 4,  35 => 3,  11 => 1,);
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
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
    <h3>Registro de Usuarios</h3>

    <form id=\"my-form\">
         <div class=\"form-group\">
\t\t    <label>Nombres:</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"nombres\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Apellidos:</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"apellidos\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Nombre de Usuario:</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"username\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Contraseña:</label>
\t\t    <input type=\"password\" class=\"form-control\" id=\"password\">
\t\t </div>
\t\t <div class=\"form-group\">
\t\t    <label>Tipo de Usuario:</label>
\t\t    <select class=\"form-control\" id=\"tipoUsuario\">
\t\t        <option value=\"1\">Administrador</option>
\t\t        <option value=\"2\">Normal</option>
\t        </select>
\t\t </div>
        <button type=\"submit\" class=\"btn btn-success\">Guardar</button>
        <button class=\"btn btn-primary\">Editar</button>
        <button class=\"btn btn-danger\">Eliminar</button>
        <button class=\"btn btn-info\" onclick=\"limpiarText()\">Nuevo</button>
    </form>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        (function(\$){
            function processForm( e ){
            \$.ajax({
                type: \"POST\",
                url: \"http://127.0.0.1:8000/usuario/insertar\",
                // The key needs to match your method's input parameter (case-sensitive).
                data: JSON.stringify({ 
                \t\"nombres\": \$(\"#nombres\").val()
                \t,\"apellidos\" : \$(\"#apellidos\").val()
                \t,\"username\" : \$(\"#username\").val()
                    , \"password\" : \$(\"#password\").val()
                    , \"tipoUsuario\" : \$(\"#tipoUsuario\").val()
                    , \"rolId\" : 1
                    , \"estado\" : \"Activo\"
                    , \"fechaRegistro\" : \"2017-12-09\" }),
                contentType: \"application/json; charset=utf-8\",
                dataType: \"json\",
                success: function(data){
                    myFunction();
                    limpiarText();
                },
                failure: function(errMsg) {
                    alert(errMsg);
                }
            }); 
            e.preventDefault();
        }

        \$('#my-form').submit( processForm );
        })(jQuery);

        function myFunction() {
            var x = document.getElementById(\"snackbar\")
            x.className = \"show\";
            setTimeout(function(){ x.className = x.className.replace(\"show\", \"\"); }, 3000);
        }

        function limpiarText(){
            \$(\"#nombres\").val(\"\");
            \$(\"#apellidos\").val(\"\");
            \$(\"#username\").val(\"\");
            \$(\"#password\").val(\"\");
            \$(\"#tipoUsuario\").val(\"1\");
        }
    </script>

<div id=\"snackbar\">Usuario guardado correctamente.</div>

{% endblock %}

{% block stylesheets %}
{% endblock %}
", "usuario/insertarusuario.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Usuario\\insertarusuario.html.twig");
    }
}
