<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a7ff9a8cb6de77487e821470ac6f651cd012351f6b93b49f03adf424ef36ae27 extends Twig_Template
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
        $__internal_dcaf3fa6679a34c86c5c42abf753e44ab59d829a3f22640a764f6b98a7ddaf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcaf3fa6679a34c86c5c42abf753e44ab59d829a3f22640a764f6b98a7ddaf19->enter($__internal_dcaf3fa6679a34c86c5c42abf753e44ab59d829a3f22640a764f6b98a7ddaf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8e5ec07eccf96a47fd59d8965c5e381fc519fda371ea23ab397235daf598889a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5ec07eccf96a47fd59d8965c5e381fc519fda371ea23ab397235daf598889a->enter($__internal_8e5ec07eccf96a47fd59d8965c5e381fc519fda371ea23ab397235daf598889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dcaf3fa6679a34c86c5c42abf753e44ab59d829a3f22640a764f6b98a7ddaf19->leave($__internal_dcaf3fa6679a34c86c5c42abf753e44ab59d829a3f22640a764f6b98a7ddaf19_prof);

        
        $__internal_8e5ec07eccf96a47fd59d8965c5e381fc519fda371ea23ab397235daf598889a->leave($__internal_8e5ec07eccf96a47fd59d8965c5e381fc519fda371ea23ab397235daf598889a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
