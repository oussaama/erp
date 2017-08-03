<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ebe21258fd427ce9034d85c1287e643d2c924a21429770b4685272e47587cac9 extends Twig_Template
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
        $__internal_5c40580757824ab7678e758a7e67d5851c558365cf56eb8b1ec20b48fe967204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c40580757824ab7678e758a7e67d5851c558365cf56eb8b1ec20b48fe967204->enter($__internal_5c40580757824ab7678e758a7e67d5851c558365cf56eb8b1ec20b48fe967204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_86d2c14d6b0c1bdff6656414b1c83043e9537d4f59dc85a24271005e577fe36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d2c14d6b0c1bdff6656414b1c83043e9537d4f59dc85a24271005e577fe36c->enter($__internal_86d2c14d6b0c1bdff6656414b1c83043e9537d4f59dc85a24271005e577fe36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5c40580757824ab7678e758a7e67d5851c558365cf56eb8b1ec20b48fe967204->leave($__internal_5c40580757824ab7678e758a7e67d5851c558365cf56eb8b1ec20b48fe967204_prof);

        
        $__internal_86d2c14d6b0c1bdff6656414b1c83043e9537d4f59dc85a24271005e577fe36c->leave($__internal_86d2c14d6b0c1bdff6656414b1c83043e9537d4f59dc85a24271005e577fe36c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
