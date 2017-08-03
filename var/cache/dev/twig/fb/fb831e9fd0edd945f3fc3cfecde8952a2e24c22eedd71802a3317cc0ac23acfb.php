<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_710b009d876fd2db4de9b417ee93c694abd3efb4baf49f59d798859d45724f66 extends Twig_Template
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
        $__internal_7094a1d67ad043e0b74ee1d7e2b31fe1d5f73933bb5be47673cb658e963a6265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7094a1d67ad043e0b74ee1d7e2b31fe1d5f73933bb5be47673cb658e963a6265->enter($__internal_7094a1d67ad043e0b74ee1d7e2b31fe1d5f73933bb5be47673cb658e963a6265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9d7461243bd0b7199cac6595a941a5452f46a29bf772a4c003072c018382e9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7461243bd0b7199cac6595a941a5452f46a29bf772a4c003072c018382e9f4->enter($__internal_9d7461243bd0b7199cac6595a941a5452f46a29bf772a4c003072c018382e9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7094a1d67ad043e0b74ee1d7e2b31fe1d5f73933bb5be47673cb658e963a6265->leave($__internal_7094a1d67ad043e0b74ee1d7e2b31fe1d5f73933bb5be47673cb658e963a6265_prof);

        
        $__internal_9d7461243bd0b7199cac6595a941a5452f46a29bf772a4c003072c018382e9f4->leave($__internal_9d7461243bd0b7199cac6595a941a5452f46a29bf772a4c003072c018382e9f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
