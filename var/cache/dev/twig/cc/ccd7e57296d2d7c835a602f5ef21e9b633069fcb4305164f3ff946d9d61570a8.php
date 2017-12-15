<?php

/* usuario/usuario.html.twig */
class __TwigTemplate_049a8075bd50fd2d58a1ed077704fc92684ab7eeac77a284b25ab71c475e74b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/usuario.html.twig", 1);
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
        $__internal_2f949bd62553ccd5b66b86aca5c3d2f139ff0a92f9c7d554cfbd188472af328a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f949bd62553ccd5b66b86aca5c3d2f139ff0a92f9c7d554cfbd188472af328a->enter($__internal_2f949bd62553ccd5b66b86aca5c3d2f139ff0a92f9c7d554cfbd188472af328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/usuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f949bd62553ccd5b66b86aca5c3d2f139ff0a92f9c7d554cfbd188472af328a->leave($__internal_2f949bd62553ccd5b66b86aca5c3d2f139ff0a92f9c7d554cfbd188472af328a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e880ee46a82f60b4f15748b2785d72d4af8574c014c7d3afbbffd677174337bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e880ee46a82f60b4f15748b2785d72d4af8574c014c7d3afbbffd677174337bf->enter($__internal_e880ee46a82f60b4f15748b2785d72d4af8574c014c7d3afbbffd677174337bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"table-responsive\">
\t  <table class=\"table table-striped\" id=\"tbl\">
\t    <thead>
\t      <tr>
\t      \t<th>Id</th>
\t        <th>Nombres</th>
\t        <th>Apellidos</th>
\t        <th>Usuario</th>
\t        <th>Estado</th>
\t        <th>Fecha</th>
\t      </tr>
\t    </thead>
\t    <tbody>

\t    </tbody>
\t  </table>
\t</div>
\t<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t<script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t<script type=\"text/javascript\">
\t\tvar tableData;
 
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
\t\t\t\t'</tr>'
\t\t\t\t);
\t\t\t}
\t\t});
\t</script>
";
        
        $__internal_e880ee46a82f60b4f15748b2785d72d4af8574c014c7d3afbbffd677174337bf->leave($__internal_e880ee46a82f60b4f15748b2785d72d4af8574c014c7d3afbbffd677174337bf_prof);

    }

    public function getTemplateName()
    {
        return "usuario/usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
\t      </tr>
\t    </thead>
\t    <tbody>

\t    </tbody>
\t  </table>
\t</div>
\t<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t<script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t<script type=\"text/javascript\">
\t\tvar tableData;
 
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
\t\t\t\t'</tr>'
\t\t\t\t);
\t\t\t}
\t\t});
\t</script>
{% endblock %}
", "usuario/usuario.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Usuario\\usuario.html.twig");
    }
}
