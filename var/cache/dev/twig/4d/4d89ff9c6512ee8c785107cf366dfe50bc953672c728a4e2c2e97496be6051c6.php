<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_50bfe34d23adb1bfd1bfaefccff71b38b4e306134467dce9190b90182f798896 extends Twig_Template
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
        $__internal_011e7220875e1bb33cbe063527708fe9050f54cfe3f0046c72aa785d74bb083c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011e7220875e1bb33cbe063527708fe9050f54cfe3f0046c72aa785d74bb083c->enter($__internal_011e7220875e1bb33cbe063527708fe9050f54cfe3f0046c72aa785d74bb083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b8ff05889a4490c0cd47c9d6ad0d99ed51b3ec6c3baeb6351ac50d638a4901d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ff05889a4490c0cd47c9d6ad0d99ed51b3ec6c3baeb6351ac50d638a4901d7->enter($__internal_b8ff05889a4490c0cd47c9d6ad0d99ed51b3ec6c3baeb6351ac50d638a4901d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_011e7220875e1bb33cbe063527708fe9050f54cfe3f0046c72aa785d74bb083c->leave($__internal_011e7220875e1bb33cbe063527708fe9050f54cfe3f0046c72aa785d74bb083c_prof);

        
        $__internal_b8ff05889a4490c0cd47c9d6ad0d99ed51b3ec6c3baeb6351ac50d638a4901d7->leave($__internal_b8ff05889a4490c0cd47c9d6ad0d99ed51b3ec6c3baeb6351ac50d638a4901d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
