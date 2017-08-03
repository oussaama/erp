<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3f87b98213fd091133d60d8230d20c62f2621e107508b018fc255f679abfd253 extends Twig_Template
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
        $__internal_ec09328918b53d16f1cc5b77b28b9a5785c222efa2d50a8dfd3515a13b10f3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec09328918b53d16f1cc5b77b28b9a5785c222efa2d50a8dfd3515a13b10f3a1->enter($__internal_ec09328918b53d16f1cc5b77b28b9a5785c222efa2d50a8dfd3515a13b10f3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5d7130622cfdbe34718bfd5d2e6ce7e61fe2d35181acd71ae71c4565a89ae6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7130622cfdbe34718bfd5d2e6ce7e61fe2d35181acd71ae71c4565a89ae6ea->enter($__internal_5d7130622cfdbe34718bfd5d2e6ce7e61fe2d35181acd71ae71c4565a89ae6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ec09328918b53d16f1cc5b77b28b9a5785c222efa2d50a8dfd3515a13b10f3a1->leave($__internal_ec09328918b53d16f1cc5b77b28b9a5785c222efa2d50a8dfd3515a13b10f3a1_prof);

        
        $__internal_5d7130622cfdbe34718bfd5d2e6ce7e61fe2d35181acd71ae71c4565a89ae6ea->leave($__internal_5d7130622cfdbe34718bfd5d2e6ce7e61fe2d35181acd71ae71c4565a89ae6ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
