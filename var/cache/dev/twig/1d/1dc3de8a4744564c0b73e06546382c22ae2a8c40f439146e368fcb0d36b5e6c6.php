<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bed7321ee91cb5e28a98ed963fa022071eb5bec52666dff8cfc71dc34b53c4bd extends Twig_Template
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
        $__internal_4673771d4275228541e614575bf80a0b7973f4af5e465bd112040c787696cacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4673771d4275228541e614575bf80a0b7973f4af5e465bd112040c787696cacd->enter($__internal_4673771d4275228541e614575bf80a0b7973f4af5e465bd112040c787696cacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ec30bbc5cd51690a563fde6dc6d40a76ed4fd1efed110a8c8c8646340ef5cd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec30bbc5cd51690a563fde6dc6d40a76ed4fd1efed110a8c8c8646340ef5cd9c->enter($__internal_ec30bbc5cd51690a563fde6dc6d40a76ed4fd1efed110a8c8c8646340ef5cd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4673771d4275228541e614575bf80a0b7973f4af5e465bd112040c787696cacd->leave($__internal_4673771d4275228541e614575bf80a0b7973f4af5e465bd112040c787696cacd_prof);

        
        $__internal_ec30bbc5cd51690a563fde6dc6d40a76ed4fd1efed110a8c8c8646340ef5cd9c->leave($__internal_ec30bbc5cd51690a563fde6dc6d40a76ed4fd1efed110a8c8c8646340ef5cd9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
