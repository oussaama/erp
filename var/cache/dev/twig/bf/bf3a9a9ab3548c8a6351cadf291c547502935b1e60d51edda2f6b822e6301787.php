<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d6df96b36a04f58dcb20975ef8e474272d4f2d026cbd13d32bac550b1fe2ebb5 extends Twig_Template
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
        $__internal_48c9cf18521b620f5ab842574a614fea2e1f4454459b4a2f0fabb3b02f0a3473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c9cf18521b620f5ab842574a614fea2e1f4454459b4a2f0fabb3b02f0a3473->enter($__internal_48c9cf18521b620f5ab842574a614fea2e1f4454459b4a2f0fabb3b02f0a3473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f9406e0fca4fcbbbdb9dc4a83efcb0a6235e287534081f3bae729422a88907d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9406e0fca4fcbbbdb9dc4a83efcb0a6235e287534081f3bae729422a88907d6->enter($__internal_f9406e0fca4fcbbbdb9dc4a83efcb0a6235e287534081f3bae729422a88907d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_48c9cf18521b620f5ab842574a614fea2e1f4454459b4a2f0fabb3b02f0a3473->leave($__internal_48c9cf18521b620f5ab842574a614fea2e1f4454459b4a2f0fabb3b02f0a3473_prof);

        
        $__internal_f9406e0fca4fcbbbdb9dc4a83efcb0a6235e287534081f3bae729422a88907d6->leave($__internal_f9406e0fca4fcbbbdb9dc4a83efcb0a6235e287534081f3bae729422a88907d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
