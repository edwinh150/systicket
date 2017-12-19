<?php

/* BlogBundle:Usuario:usuario.html.twig */
class __TwigTemplate_7515d4025d4afa24ddee8bf42fa3a82f7186d88c2cc7593a3196f5056fb66328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Usuario:usuario.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e7365e9f32f8e33b0883607d35c55ac2c17ef79bd4690adfd71333506ecf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e7365e9f32f8e33b0883607d35c55ac2c17ef79bd4690adfd71333506ecf1f->enter($__internal_52e7365e9f32f8e33b0883607d35c55ac2c17ef79bd4690adfd71333506ecf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Usuario:usuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52e7365e9f32f8e33b0883607d35c55ac2c17ef79bd4690adfd71333506ecf1f->leave($__internal_52e7365e9f32f8e33b0883607d35c55ac2c17ef79bd4690adfd71333506ecf1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53a83f89de5aa2a448e5fb738cced5e937df90198a5548cfaa7d91b44bbf2817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a83f89de5aa2a448e5fb738cced5e937df90198a5548cfaa7d91b44bbf2817->enter($__internal_53a83f89de5aa2a448e5fb738cced5e937df90198a5548cfaa7d91b44bbf2817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<center>
\t<h3>Lista de Usuarios</h3><br>
</center>
    <div class=\"table-responsive\">
\t  <table class=\"table table-striped\" id=\"tbl\">
\t    <thead>
\t      <tr>
\t      \t<th>Id</th>
\t        <th>Nombres</th>
\t        <th>Apellidos</th>
\t        <th>Usuario</th>
\t        <th>Estado</th>
\t        <th>Fecha</th>
\t\t\t<th>Opciones</th>
\t      </tr>
\t    </thead>
\t    <tbody>

\t    </tbody>
\t  </table>
\t</div>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t function  deleteUser(idUsuario) {
             \$.ajax({
                 type: \"DELETE\",
                 data: null,
                 url: \"http://127.0.0.1:8000/app_dev.php/usuario/delete/\"+idUsuario,
                 error: function() {
                    alert('Error');
                 },
                 success: function (data) {
                    location.href = \"http://localhost:8000/usuario/vista\";
                     console.log(data);
                 }
             });
         }
\t\t\$.getJSON('http://127.0.0.1:8000/app_dev.php/usuario/lista', function(data) {
\t\t\t//alert('Datos: '+data[1].nombres);\tdata.length\t\t 
\t\t\tfor (i = 0; i < data.length\t; i++){
\t\t\t\t\$(\"#tbl\").append(
\t\t\t\t'<tr>' +
\t\t\t\t'<td>' + data[i].idUsuario + '</td>' +
\t\t\t\t'<td>' + data[i].nombres + '</td>' + 
\t\t\t\t'<td>' + data[i].apellidos + '</td>' +
\t\t\t\t'<td>' + data[i].username + '</td>' +
\t\t\t\t'<td>' + data[i].estado + '</td>' +
\t\t\t\t'<td>' + data[i].fechaRegistro.date + '</td>' +
                '<td>' + \"<a href='http://127.0.0.1:8000/app_dev.php/usuario/\"+ data[i].idUsuario +\"/editar' class='btn btn-primary'>Editar</a>  \" + 
                \"<button id='deleteUser' onClick='eliminar(\"+data[i].idUsuario+\")' class='btn btn-danger'>Eliminar</button>\" + '</td>' +
\t\t\t\t'</tr>'
\t\t\t\t);
\t\t\t}
\t\t});
\t\tfunction eliminar(idUsuario){
\t\t\tdeleteUser(idUsuario);
\t\t}
\t</script>
";
        
        $__internal_53a83f89de5aa2a448e5fb738cced5e937df90198a5548cfaa7d91b44bbf2817->leave($__internal_53a83f89de5aa2a448e5fb738cced5e937df90198a5548cfaa7d91b44bbf2817_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Usuario:usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
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
<center>
\t<h3>Lista de Usuarios</h3><br>
</center>
    <div class=\"table-responsive\">
\t  <table class=\"table table-striped\" id=\"tbl\">
\t    <thead>
\t      <tr>
\t      \t<th>Id</th>
\t        <th>Nombres</th>
\t        <th>Apellidos</th>
\t        <th>Usuario</th>
\t        <th>Estado</th>
\t        <th>Fecha</th>
\t\t\t<th>Opciones</th>
\t      </tr>
\t    </thead>
\t    <tbody>

\t    </tbody>
\t  </table>
\t</div>
\t<script src=\"{{ asset('assets/js/jquery-3.2.1.min.js') }}\"></script>
\t<script type=\"text/javascript\">
\t\t function  deleteUser(idUsuario) {
             \$.ajax({
                 type: \"DELETE\",
                 data: null,
                 url: \"http://127.0.0.1:8000/app_dev.php/usuario/delete/\"+idUsuario,
                 error: function() {
                    alert('Error');
                 },
                 success: function (data) {
                    location.href = \"http://localhost:8000/usuario/vista\";
                     console.log(data);
                 }
             });
         }
\t\t\$.getJSON('http://127.0.0.1:8000/app_dev.php/usuario/lista', function(data) {
\t\t\t//alert('Datos: '+data[1].nombres);\tdata.length\t\t 
\t\t\tfor (i = 0; i < data.length\t; i++){
\t\t\t\t\$(\"#tbl\").append(
\t\t\t\t'<tr>' +
\t\t\t\t'<td>' + data[i].idUsuario + '</td>' +
\t\t\t\t'<td>' + data[i].nombres + '</td>' + 
\t\t\t\t'<td>' + data[i].apellidos + '</td>' +
\t\t\t\t'<td>' + data[i].username + '</td>' +
\t\t\t\t'<td>' + data[i].estado + '</td>' +
\t\t\t\t'<td>' + data[i].fechaRegistro.date + '</td>' +
                '<td>' + \"<a href='http://127.0.0.1:8000/app_dev.php/usuario/\"+ data[i].idUsuario +\"/editar' class='btn btn-primary'>Editar</a>  \" + 
                \"<button id='deleteUser' onClick='eliminar(\"+data[i].idUsuario+\")' class='btn btn-danger'>Eliminar</button>\" + '</td>' +
\t\t\t\t'</tr>'
\t\t\t\t);
\t\t\t}
\t\t});
\t\tfunction eliminar(idUsuario){
\t\t\tdeleteUser(idUsuario);
\t\t}
\t</script>
{% endblock %}
", "BlogBundle:Usuario:usuario.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\src\\BlogBundle/Resources/views/Usuario/usuario.html.twig");
    }
}
