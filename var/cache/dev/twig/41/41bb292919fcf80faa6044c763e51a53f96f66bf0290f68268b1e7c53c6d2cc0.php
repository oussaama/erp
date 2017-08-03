<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b8ceada04a734697a3a436646c15e61dc887f5e7eb103f490b5df8dca98e1d05 extends Twig_Template
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
        $__internal_4b77479b4277f42ef8d068b4d8d900281e3d6a83317cacb984190a22b0cc46b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b77479b4277f42ef8d068b4d8d900281e3d6a83317cacb984190a22b0cc46b1->enter($__internal_4b77479b4277f42ef8d068b4d8d900281e3d6a83317cacb984190a22b0cc46b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_717b692fc0cc8f2c0bfeb3acfbddab7ba227aec8b373357ad3d700976d467bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717b692fc0cc8f2c0bfeb3acfbddab7ba227aec8b373357ad3d700976d467bbf->enter($__internal_717b692fc0cc8f2c0bfeb3acfbddab7ba227aec8b373357ad3d700976d467bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4b77479b4277f42ef8d068b4d8d900281e3d6a83317cacb984190a22b0cc46b1->leave($__internal_4b77479b4277f42ef8d068b4d8d900281e3d6a83317cacb984190a22b0cc46b1_prof);

        
        $__internal_717b692fc0cc8f2c0bfeb3acfbddab7ba227aec8b373357ad3d700976d467bbf->leave($__internal_717b692fc0cc8f2c0bfeb3acfbddab7ba227aec8b373357ad3d700976d467bbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
