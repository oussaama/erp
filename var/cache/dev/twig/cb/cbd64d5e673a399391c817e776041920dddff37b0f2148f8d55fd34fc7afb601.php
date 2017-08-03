<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_9ecbc8ded88fddc0c95883f01baa56c86444d20f5b697c301dd32e4871ed6320 extends Twig_Template
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
        $__internal_f237e0d7cc8df94ef707bab9fffbbc3ecd478d550d488cc3fe5d0d58b1eaaf7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f237e0d7cc8df94ef707bab9fffbbc3ecd478d550d488cc3fe5d0d58b1eaaf7f->enter($__internal_f237e0d7cc8df94ef707bab9fffbbc3ecd478d550d488cc3fe5d0d58b1eaaf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_ebd9817c7f2faddeaf39faa04dbd751cf26a7e26fbfee8fce7be7ab9486f0cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd9817c7f2faddeaf39faa04dbd751cf26a7e26fbfee8fce7be7ab9486f0cc0->enter($__internal_ebd9817c7f2faddeaf39faa04dbd751cf26a7e26fbfee8fce7be7ab9486f0cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_f237e0d7cc8df94ef707bab9fffbbc3ecd478d550d488cc3fe5d0d58b1eaaf7f->leave($__internal_f237e0d7cc8df94ef707bab9fffbbc3ecd478d550d488cc3fe5d0d58b1eaaf7f_prof);

        
        $__internal_ebd9817c7f2faddeaf39faa04dbd751cf26a7e26fbfee8fce7be7ab9486f0cc0->leave($__internal_ebd9817c7f2faddeaf39faa04dbd751cf26a7e26fbfee8fce7be7ab9486f0cc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
