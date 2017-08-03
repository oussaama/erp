<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_69174e7e86609bb1a9cfcec28b39fbe3e4a2455431928284d78ad9400175c85d extends Twig_Template
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
        $__internal_2360db3e8cf6088123b0054df7317d8f79ad9311cac56d48aae6576faef62a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2360db3e8cf6088123b0054df7317d8f79ad9311cac56d48aae6576faef62a86->enter($__internal_2360db3e8cf6088123b0054df7317d8f79ad9311cac56d48aae6576faef62a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_160cd26e6ccdaddd16c45fef3f6dc9691102a096c7716576f5eb9401580c6e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160cd26e6ccdaddd16c45fef3f6dc9691102a096c7716576f5eb9401580c6e77->enter($__internal_160cd26e6ccdaddd16c45fef3f6dc9691102a096c7716576f5eb9401580c6e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2360db3e8cf6088123b0054df7317d8f79ad9311cac56d48aae6576faef62a86->leave($__internal_2360db3e8cf6088123b0054df7317d8f79ad9311cac56d48aae6576faef62a86_prof);

        
        $__internal_160cd26e6ccdaddd16c45fef3f6dc9691102a096c7716576f5eb9401580c6e77->leave($__internal_160cd26e6ccdaddd16c45fef3f6dc9691102a096c7716576f5eb9401580c6e77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
