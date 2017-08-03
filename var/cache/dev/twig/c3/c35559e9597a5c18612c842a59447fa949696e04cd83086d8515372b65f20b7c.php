<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_57859d138a6e068aef6b79f9d7716cd58bfc62d93dde45cfaaa8c427c6d351da extends Twig_Template
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
        $__internal_aafdcc3ece2734d123324a8d38ce6c70b8a43436178d417f5dcd46727627f260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafdcc3ece2734d123324a8d38ce6c70b8a43436178d417f5dcd46727627f260->enter($__internal_aafdcc3ece2734d123324a8d38ce6c70b8a43436178d417f5dcd46727627f260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bc3e2d5e9bc513ebae3e5d69548a79fed59592a941277662a16b5eadcb8fb2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3e2d5e9bc513ebae3e5d69548a79fed59592a941277662a16b5eadcb8fb2e0->enter($__internal_bc3e2d5e9bc513ebae3e5d69548a79fed59592a941277662a16b5eadcb8fb2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_aafdcc3ece2734d123324a8d38ce6c70b8a43436178d417f5dcd46727627f260->leave($__internal_aafdcc3ece2734d123324a8d38ce6c70b8a43436178d417f5dcd46727627f260_prof);

        
        $__internal_bc3e2d5e9bc513ebae3e5d69548a79fed59592a941277662a16b5eadcb8fb2e0->leave($__internal_bc3e2d5e9bc513ebae3e5d69548a79fed59592a941277662a16b5eadcb8fb2e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
