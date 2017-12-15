<?php

/* usuario/usuario.html.twig */
class __TwigTemplate_a7d70a9f699ccd0801b9b399b74f24aa8d3062cf05c80d179e59637a88d418fc extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"table-responsive\">
\t  <table class=\"table\" id=\"tbl\">
\t    <thead>
\t      <tr>
\t        <th>Nombres</th>
\t        <th>Apellidos</th>
\t        <th>Email</th>
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
 
\t\t\$.getJSON('http://127.0.0.1:8000/app_dev.php/usuario/get/1', function(data) {
\t\t\t//alert('Datos: '+data.nombres);\t\t\t 
\t\t\tfor (i = 0; i < 1; i++){
\t\t\t\$(\"#tbl\").append(
\t\t\t'<tr>' +
\t\t\t'<td  title=\"Nombre\">' + data.nombres + '<td>' + 
\t\t\t'<tr>'+
\t\t\t'<tr>' +
\t\t\t'<td  title=\"Apellidos\">' + data.apellidos + '<td>' + 
\t\t\t'<tr>'
\t\t\t);
\t\t\t}
\t\t});
\t</script>
";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuario/usuario.html.twig", "C:\\xampp\\htdocs\\cursophp\\SysTicket\\app\\Resources\\views\\Usuario\\usuario.html.twig");
    }
}
