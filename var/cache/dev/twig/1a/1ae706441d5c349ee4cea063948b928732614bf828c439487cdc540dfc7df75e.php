<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_528f5bd0943d42eb93232c4d396f50bb423267c9ad23d87f40aa7227267b03cf extends Twig_Template
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
        $__internal_da6aeaf6228a78cba984ea1a3d83897708e583c7c4b21c04d1d38b0464ac3bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6aeaf6228a78cba984ea1a3d83897708e583c7c4b21c04d1d38b0464ac3bb4->enter($__internal_da6aeaf6228a78cba984ea1a3d83897708e583c7c4b21c04d1d38b0464ac3bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e68f683ebbd52b8c709bf3b839d3cbe11ee5f116b83d6316a49b00e8dff8e2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68f683ebbd52b8c709bf3b839d3cbe11ee5f116b83d6316a49b00e8dff8e2a9->enter($__internal_e68f683ebbd52b8c709bf3b839d3cbe11ee5f116b83d6316a49b00e8dff8e2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_da6aeaf6228a78cba984ea1a3d83897708e583c7c4b21c04d1d38b0464ac3bb4->leave($__internal_da6aeaf6228a78cba984ea1a3d83897708e583c7c4b21c04d1d38b0464ac3bb4_prof);

        
        $__internal_e68f683ebbd52b8c709bf3b839d3cbe11ee5f116b83d6316a49b00e8dff8e2a9->leave($__internal_e68f683ebbd52b8c709bf3b839d3cbe11ee5f116b83d6316a49b00e8dff8e2a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
