<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_304d969a47973e94b70685ce77b224bbb3e64bbc1894a556b864a9543733b427 extends Twig_Template
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
        $__internal_f6ff24eac34af03d1a9485f1b7a8f7768d0a134fa929d0cb299da4f62bc08f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ff24eac34af03d1a9485f1b7a8f7768d0a134fa929d0cb299da4f62bc08f05->enter($__internal_f6ff24eac34af03d1a9485f1b7a8f7768d0a134fa929d0cb299da4f62bc08f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_33786931d080ae1302f52b0945d3cbe1a97607fe65adb5cad28c984f5de1c189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33786931d080ae1302f52b0945d3cbe1a97607fe65adb5cad28c984f5de1c189->enter($__internal_33786931d080ae1302f52b0945d3cbe1a97607fe65adb5cad28c984f5de1c189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f6ff24eac34af03d1a9485f1b7a8f7768d0a134fa929d0cb299da4f62bc08f05->leave($__internal_f6ff24eac34af03d1a9485f1b7a8f7768d0a134fa929d0cb299da4f62bc08f05_prof);

        
        $__internal_33786931d080ae1302f52b0945d3cbe1a97607fe65adb5cad28c984f5de1c189->leave($__internal_33786931d080ae1302f52b0945d3cbe1a97607fe65adb5cad28c984f5de1c189_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
