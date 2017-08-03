<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b2cb38e2131adb80bb5cf83f7612bafe447143c62ee81eae90af1143d9987f4f extends Twig_Template
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
        $__internal_7c27683ee6aff3d3c3086b02a8d2c2ab9e00cca0a26f9980a4c3eb391c3ba6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c27683ee6aff3d3c3086b02a8d2c2ab9e00cca0a26f9980a4c3eb391c3ba6b9->enter($__internal_7c27683ee6aff3d3c3086b02a8d2c2ab9e00cca0a26f9980a4c3eb391c3ba6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7b90f7e41d199d621a7644d11d637b3b84fff6114e9fca4050c2391800ec6355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b90f7e41d199d621a7644d11d637b3b84fff6114e9fca4050c2391800ec6355->enter($__internal_7b90f7e41d199d621a7644d11d637b3b84fff6114e9fca4050c2391800ec6355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7c27683ee6aff3d3c3086b02a8d2c2ab9e00cca0a26f9980a4c3eb391c3ba6b9->leave($__internal_7c27683ee6aff3d3c3086b02a8d2c2ab9e00cca0a26f9980a4c3eb391c3ba6b9_prof);

        
        $__internal_7b90f7e41d199d621a7644d11d637b3b84fff6114e9fca4050c2391800ec6355->leave($__internal_7b90f7e41d199d621a7644d11d637b3b84fff6114e9fca4050c2391800ec6355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
