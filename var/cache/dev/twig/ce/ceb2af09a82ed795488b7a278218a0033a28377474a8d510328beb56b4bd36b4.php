<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f587cdf4068e769c602361422c0839256930cfbbb358340b67147eb609dad89e extends Twig_Template
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
        $__internal_4234b55d69980aa74d2bc8754721b4769356fd182fa5b6518df4cc15b9200bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4234b55d69980aa74d2bc8754721b4769356fd182fa5b6518df4cc15b9200bb8->enter($__internal_4234b55d69980aa74d2bc8754721b4769356fd182fa5b6518df4cc15b9200bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4219f3ef0d6afcdc1f4bde878b1baff6297e1da1e578c59574cc7c4d1c14a22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4219f3ef0d6afcdc1f4bde878b1baff6297e1da1e578c59574cc7c4d1c14a22a->enter($__internal_4219f3ef0d6afcdc1f4bde878b1baff6297e1da1e578c59574cc7c4d1c14a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4234b55d69980aa74d2bc8754721b4769356fd182fa5b6518df4cc15b9200bb8->leave($__internal_4234b55d69980aa74d2bc8754721b4769356fd182fa5b6518df4cc15b9200bb8_prof);

        
        $__internal_4219f3ef0d6afcdc1f4bde878b1baff6297e1da1e578c59574cc7c4d1c14a22a->leave($__internal_4219f3ef0d6afcdc1f4bde878b1baff6297e1da1e578c59574cc7c4d1c14a22a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
