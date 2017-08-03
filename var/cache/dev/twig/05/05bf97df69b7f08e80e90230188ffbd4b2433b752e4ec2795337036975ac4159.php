<?php

/* ERPBundle:Front/Note:pdf.html.twig */
class __TwigTemplate_7121e951fbca2fec9b72fcfab3a726e3b021f625d2f25fb947aa51629be63087 extends Twig_Template
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
        $__internal_31cb78f3d62c4e1b1122882ffe31fd5f00607fcad48c6d6a6c7eade5b74da9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31cb78f3d62c4e1b1122882ffe31fd5f00607fcad48c6d6a6c7eade5b74da9fb->enter($__internal_31cb78f3d62c4e1b1122882ffe31fd5f00607fcad48c6d6a6c7eade5b74da9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Note:pdf.html.twig"));

        $__internal_626ef9ec383a585ff70243fb3f3658ff10aebbfc65147e11d0fa6fc83301d9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626ef9ec383a585ff70243fb3f3658ff10aebbfc65147e11d0fa6fc83301d9a5->enter($__internal_626ef9ec383a585ff70243fb3f3658ff10aebbfc65147e11d0fa6fc83301d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Note:pdf.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    table{width: 100%; border-collapse: collapse}
    .header td{width: 50%; vertical-align: top}
    .text-left{text-align: left}
    .text-right{text-align: right}
    .text-center{text-align: center}
    .separator{height: 150%; width: 100%}
    .content td{border :solid 1px #cc3f4c; padding:  5px;}
    .content th{border :solid 1px #cc3f4c; padding:  5px; background-color: #0a6aa1; color: #0a8998}
</style>

<page backtop=\"20mm\" backright=\"10mm\" backbottom=\"20mm\" backleft=\"10mm\">

    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <b>Prénom Nom</b>
                <br>Adreesse
                <br>Code Postal
                <br>Pays
            </td>
            <td class=\"text-right\">
                <b>Prénom Nom</b>
                <br>Adreesse
                <br>Code Postal
                <br>Pays
            </td>
        </tr>
    </table>
    <div class=\"separator\"></div>
</page>";
        
        $__internal_31cb78f3d62c4e1b1122882ffe31fd5f00607fcad48c6d6a6c7eade5b74da9fb->leave($__internal_31cb78f3d62c4e1b1122882ffe31fd5f00607fcad48c6d6a6c7eade5b74da9fb_prof);

        
        $__internal_626ef9ec383a585ff70243fb3f3658ff10aebbfc65147e11d0fa6fc83301d9a5->leave($__internal_626ef9ec383a585ff70243fb3f3658ff10aebbfc65147e11d0fa6fc83301d9a5_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/Note:pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    table{width: 100%; border-collapse: collapse}
    .header td{width: 50%; vertical-align: top}
    .text-left{text-align: left}
    .text-right{text-align: right}
    .text-center{text-align: center}
    .separator{height: 150%; width: 100%}
    .content td{border :solid 1px #cc3f4c; padding:  5px;}
    .content th{border :solid 1px #cc3f4c; padding:  5px; background-color: #0a6aa1; color: #0a8998}
</style>

<page backtop=\"20mm\" backright=\"10mm\" backbottom=\"20mm\" backleft=\"10mm\">

    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <b>Prénom Nom</b>
                <br>Adreesse
                <br>Code Postal
                <br>Pays
            </td>
            <td class=\"text-right\">
                <b>Prénom Nom</b>
                <br>Adreesse
                <br>Code Postal
                <br>Pays
            </td>
        </tr>
    </table>
    <div class=\"separator\"></div>
</page>", "ERPBundle:Front/Note:pdf.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/Note/pdf.html.twig");
    }
}
