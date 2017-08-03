<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a8363cbbf2dd524a5faff393bd9eeadddca5da06f6a674734b6e4b3590367082 extends Twig_Template
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
        $__internal_f92783bfad275bd15944b1732cfb663a6cf75dbfdf43fb5bcda832c0ba008826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92783bfad275bd15944b1732cfb663a6cf75dbfdf43fb5bcda832c0ba008826->enter($__internal_f92783bfad275bd15944b1732cfb663a6cf75dbfdf43fb5bcda832c0ba008826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a560c6214ea0bf3c1a24a6d080fa7ad24beb130470a538fb42e3af6b70b52247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a560c6214ea0bf3c1a24a6d080fa7ad24beb130470a538fb42e3af6b70b52247->enter($__internal_a560c6214ea0bf3c1a24a6d080fa7ad24beb130470a538fb42e3af6b70b52247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f92783bfad275bd15944b1732cfb663a6cf75dbfdf43fb5bcda832c0ba008826->leave($__internal_f92783bfad275bd15944b1732cfb663a6cf75dbfdf43fb5bcda832c0ba008826_prof);

        
        $__internal_a560c6214ea0bf3c1a24a6d080fa7ad24beb130470a538fb42e3af6b70b52247->leave($__internal_a560c6214ea0bf3c1a24a6d080fa7ad24beb130470a538fb42e3af6b70b52247_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
