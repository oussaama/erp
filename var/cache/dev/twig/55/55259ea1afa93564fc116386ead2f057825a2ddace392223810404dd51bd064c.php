<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_51f260c5bc3a26fa217457eaf68a7200f8b753302e3b28320ec37808736c14f0 extends Twig_Template
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
        $__internal_f3ea10a32fb1b1d3a0068c569325339d59ccc04049083a6ab17d23082a31a42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ea10a32fb1b1d3a0068c569325339d59ccc04049083a6ab17d23082a31a42a->enter($__internal_f3ea10a32fb1b1d3a0068c569325339d59ccc04049083a6ab17d23082a31a42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0f8a3e032840c3a5577e3460633423924ebbc5aa97765c8615249d05991fe9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8a3e032840c3a5577e3460633423924ebbc5aa97765c8615249d05991fe9cb->enter($__internal_0f8a3e032840c3a5577e3460633423924ebbc5aa97765c8615249d05991fe9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f3ea10a32fb1b1d3a0068c569325339d59ccc04049083a6ab17d23082a31a42a->leave($__internal_f3ea10a32fb1b1d3a0068c569325339d59ccc04049083a6ab17d23082a31a42a_prof);

        
        $__internal_0f8a3e032840c3a5577e3460633423924ebbc5aa97765c8615249d05991fe9cb->leave($__internal_0f8a3e032840c3a5577e3460633423924ebbc5aa97765c8615249d05991fe9cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
