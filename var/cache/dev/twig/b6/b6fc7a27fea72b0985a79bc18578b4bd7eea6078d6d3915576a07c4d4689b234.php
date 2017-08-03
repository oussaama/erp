<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_932bcedea54bca6090ac1829a7453ae57cfd019447f193cc1f0a5a73e0dfbcb4 extends Twig_Template
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
        $__internal_c51e24e77a8f9b0c36817cc079eeb66bc92804208be8f20bbd832dd0932377e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51e24e77a8f9b0c36817cc079eeb66bc92804208be8f20bbd832dd0932377e9->enter($__internal_c51e24e77a8f9b0c36817cc079eeb66bc92804208be8f20bbd832dd0932377e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6c9dbf617cee0807abf0bd0b93bc4ecccf30af83744336620c3a76b690e60f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9dbf617cee0807abf0bd0b93bc4ecccf30af83744336620c3a76b690e60f21->enter($__internal_6c9dbf617cee0807abf0bd0b93bc4ecccf30af83744336620c3a76b690e60f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c51e24e77a8f9b0c36817cc079eeb66bc92804208be8f20bbd832dd0932377e9->leave($__internal_c51e24e77a8f9b0c36817cc079eeb66bc92804208be8f20bbd832dd0932377e9_prof);

        
        $__internal_6c9dbf617cee0807abf0bd0b93bc4ecccf30af83744336620c3a76b690e60f21->leave($__internal_6c9dbf617cee0807abf0bd0b93bc4ecccf30af83744336620c3a76b690e60f21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
