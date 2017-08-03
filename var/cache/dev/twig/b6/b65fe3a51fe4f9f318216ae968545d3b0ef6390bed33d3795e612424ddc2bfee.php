<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3d7d9a7501d3a9b400a8439de79e1bede988a782521b9b68f581eb37ca9d548c extends Twig_Template
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
        $__internal_ee4d746af7e07da436ab39d2fbb0ce6805a02e0e6441f42490a9b05342eef3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4d746af7e07da436ab39d2fbb0ce6805a02e0e6441f42490a9b05342eef3b1->enter($__internal_ee4d746af7e07da436ab39d2fbb0ce6805a02e0e6441f42490a9b05342eef3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_55e586bc84a3a647b42d3e780a816faab8b661a59b031543b79c112a83f72293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e586bc84a3a647b42d3e780a816faab8b661a59b031543b79c112a83f72293->enter($__internal_55e586bc84a3a647b42d3e780a816faab8b661a59b031543b79c112a83f72293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ee4d746af7e07da436ab39d2fbb0ce6805a02e0e6441f42490a9b05342eef3b1->leave($__internal_ee4d746af7e07da436ab39d2fbb0ce6805a02e0e6441f42490a9b05342eef3b1_prof);

        
        $__internal_55e586bc84a3a647b42d3e780a816faab8b661a59b031543b79c112a83f72293->leave($__internal_55e586bc84a3a647b42d3e780a816faab8b661a59b031543b79c112a83f72293_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
