<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_67ec6d838ca9fc3cf244889e277d370b6f15f494d14367f0186ce83f973556c5 extends Twig_Template
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
        $__internal_7192390866c5e4ba20449881d3c5a52713e07539e1d86f65f227f822c9af3ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7192390866c5e4ba20449881d3c5a52713e07539e1d86f65f227f822c9af3ed9->enter($__internal_7192390866c5e4ba20449881d3c5a52713e07539e1d86f65f227f822c9af3ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fec54dec0763496ecfb5d3251192c5d922579bd460be74adbebbc82224423bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec54dec0763496ecfb5d3251192c5d922579bd460be74adbebbc82224423bd5->enter($__internal_fec54dec0763496ecfb5d3251192c5d922579bd460be74adbebbc82224423bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7192390866c5e4ba20449881d3c5a52713e07539e1d86f65f227f822c9af3ed9->leave($__internal_7192390866c5e4ba20449881d3c5a52713e07539e1d86f65f227f822c9af3ed9_prof);

        
        $__internal_fec54dec0763496ecfb5d3251192c5d922579bd460be74adbebbc82224423bd5->leave($__internal_fec54dec0763496ecfb5d3251192c5d922579bd460be74adbebbc82224423bd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
