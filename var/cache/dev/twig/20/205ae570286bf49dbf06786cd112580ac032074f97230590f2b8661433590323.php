<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ec3dd6cef7d6eb68f2301031d7cfb76f6478d83b8cc0b57719049b57d7585534 extends Twig_Template
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
        $__internal_ff2787cf53d372f0fbeda38db3277fdff7adcbab6c81e5454c81d03e30b5082f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2787cf53d372f0fbeda38db3277fdff7adcbab6c81e5454c81d03e30b5082f->enter($__internal_ff2787cf53d372f0fbeda38db3277fdff7adcbab6c81e5454c81d03e30b5082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e53a1dffaad426ec23a8f2d3d4e3dee27179ac7c07c9442067bc8541d6aaf78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53a1dffaad426ec23a8f2d3d4e3dee27179ac7c07c9442067bc8541d6aaf78e->enter($__internal_e53a1dffaad426ec23a8f2d3d4e3dee27179ac7c07c9442067bc8541d6aaf78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ff2787cf53d372f0fbeda38db3277fdff7adcbab6c81e5454c81d03e30b5082f->leave($__internal_ff2787cf53d372f0fbeda38db3277fdff7adcbab6c81e5454c81d03e30b5082f_prof);

        
        $__internal_e53a1dffaad426ec23a8f2d3d4e3dee27179ac7c07c9442067bc8541d6aaf78e->leave($__internal_e53a1dffaad426ec23a8f2d3d4e3dee27179ac7c07c9442067bc8541d6aaf78e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
