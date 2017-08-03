<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c59c1e0a180ff84f5234ea471be353e73a7fa0071acc996660281e62946c84e8 extends Twig_Template
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
        $__internal_641108adf90b1621e74d3e95f7f88cca368b5c506eb73b05c94c9c7e4b8f20de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641108adf90b1621e74d3e95f7f88cca368b5c506eb73b05c94c9c7e4b8f20de->enter($__internal_641108adf90b1621e74d3e95f7f88cca368b5c506eb73b05c94c9c7e4b8f20de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3aaffabea90374aab5ebed2ec40435e337bcad2b6a90e8dd301c7ce47ad5b58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aaffabea90374aab5ebed2ec40435e337bcad2b6a90e8dd301c7ce47ad5b58e->enter($__internal_3aaffabea90374aab5ebed2ec40435e337bcad2b6a90e8dd301c7ce47ad5b58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_641108adf90b1621e74d3e95f7f88cca368b5c506eb73b05c94c9c7e4b8f20de->leave($__internal_641108adf90b1621e74d3e95f7f88cca368b5c506eb73b05c94c9c7e4b8f20de_prof);

        
        $__internal_3aaffabea90374aab5ebed2ec40435e337bcad2b6a90e8dd301c7ce47ad5b58e->leave($__internal_3aaffabea90374aab5ebed2ec40435e337bcad2b6a90e8dd301c7ce47ad5b58e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
