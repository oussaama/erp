<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_83b8af94c2ad8e8790fb6eaed8cbebb3f166bc2ecf93df9a1c34ae78feb15be9 extends Twig_Template
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
        $__internal_76a37da2ad812506e4452912cffea419a4fe02a8b965cb42a1404e8ba90ce809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a37da2ad812506e4452912cffea419a4fe02a8b965cb42a1404e8ba90ce809->enter($__internal_76a37da2ad812506e4452912cffea419a4fe02a8b965cb42a1404e8ba90ce809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_491357d86eeb2418cf2c0cca3fe26f7c4752b8e7f467385e631c050d82db1d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491357d86eeb2418cf2c0cca3fe26f7c4752b8e7f467385e631c050d82db1d26->enter($__internal_491357d86eeb2418cf2c0cca3fe26f7c4752b8e7f467385e631c050d82db1d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_76a37da2ad812506e4452912cffea419a4fe02a8b965cb42a1404e8ba90ce809->leave($__internal_76a37da2ad812506e4452912cffea419a4fe02a8b965cb42a1404e8ba90ce809_prof);

        
        $__internal_491357d86eeb2418cf2c0cca3fe26f7c4752b8e7f467385e631c050d82db1d26->leave($__internal_491357d86eeb2418cf2c0cca3fe26f7c4752b8e7f467385e631c050d82db1d26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
