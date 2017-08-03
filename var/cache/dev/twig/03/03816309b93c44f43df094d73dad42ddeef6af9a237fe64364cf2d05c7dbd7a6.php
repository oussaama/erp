<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1dac444bfceb1887320de5d4987d466d7d638a559a6eed0eca81400d4120ab0c extends Twig_Template
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
        $__internal_11d1328500e31bfdd25f3f9da3d70713314dadedd981d099f6774c55173b350f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d1328500e31bfdd25f3f9da3d70713314dadedd981d099f6774c55173b350f->enter($__internal_11d1328500e31bfdd25f3f9da3d70713314dadedd981d099f6774c55173b350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b3b79a536e0074c807f9de61e6d478ebefc122e7fe09a4c9084adb6d9477d05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b79a536e0074c807f9de61e6d478ebefc122e7fe09a4c9084adb6d9477d05e->enter($__internal_b3b79a536e0074c807f9de61e6d478ebefc122e7fe09a4c9084adb6d9477d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_11d1328500e31bfdd25f3f9da3d70713314dadedd981d099f6774c55173b350f->leave($__internal_11d1328500e31bfdd25f3f9da3d70713314dadedd981d099f6774c55173b350f_prof);

        
        $__internal_b3b79a536e0074c807f9de61e6d478ebefc122e7fe09a4c9084adb6d9477d05e->leave($__internal_b3b79a536e0074c807f9de61e6d478ebefc122e7fe09a4c9084adb6d9477d05e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
