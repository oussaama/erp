<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_eb643258363fa4d26e5a1f9edf0886c7f388d4540c6b26c578c953c44b7b4f48 extends Twig_Template
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
        $__internal_79a1c7f0ab79cb17bc54922436375d8e733ea23b422e07bff73836a66c065c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a1c7f0ab79cb17bc54922436375d8e733ea23b422e07bff73836a66c065c0e->enter($__internal_79a1c7f0ab79cb17bc54922436375d8e733ea23b422e07bff73836a66c065c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e178ca18e9c7b9cac13682016d2e6e106102c717c3763c704985a6c23769e246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e178ca18e9c7b9cac13682016d2e6e106102c717c3763c704985a6c23769e246->enter($__internal_e178ca18e9c7b9cac13682016d2e6e106102c717c3763c704985a6c23769e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_79a1c7f0ab79cb17bc54922436375d8e733ea23b422e07bff73836a66c065c0e->leave($__internal_79a1c7f0ab79cb17bc54922436375d8e733ea23b422e07bff73836a66c065c0e_prof);

        
        $__internal_e178ca18e9c7b9cac13682016d2e6e106102c717c3763c704985a6c23769e246->leave($__internal_e178ca18e9c7b9cac13682016d2e6e106102c717c3763c704985a6c23769e246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
