<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d4851ac0426026ec2ceb33f4626e8af13f8dd4562d818e0e8dab4b3e7e955736 extends Twig_Template
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
        $__internal_f65c5c9a659c04f9d1e879eed88a349cb471a126a0a5593ed71dbd1fd37d73cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65c5c9a659c04f9d1e879eed88a349cb471a126a0a5593ed71dbd1fd37d73cb->enter($__internal_f65c5c9a659c04f9d1e879eed88a349cb471a126a0a5593ed71dbd1fd37d73cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_139b8bda0ba94e1091e85132707694dd794a08e1b7f742924bd96b819ff495e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139b8bda0ba94e1091e85132707694dd794a08e1b7f742924bd96b819ff495e9->enter($__internal_139b8bda0ba94e1091e85132707694dd794a08e1b7f742924bd96b819ff495e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f65c5c9a659c04f9d1e879eed88a349cb471a126a0a5593ed71dbd1fd37d73cb->leave($__internal_f65c5c9a659c04f9d1e879eed88a349cb471a126a0a5593ed71dbd1fd37d73cb_prof);

        
        $__internal_139b8bda0ba94e1091e85132707694dd794a08e1b7f742924bd96b819ff495e9->leave($__internal_139b8bda0ba94e1091e85132707694dd794a08e1b7f742924bd96b819ff495e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
