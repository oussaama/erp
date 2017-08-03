<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2ac9f1d831588a8de23d5ae3672ca0b319cc64ef16419116dd17326930c97a96 extends Twig_Template
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
        $__internal_1fce6c90b486c66ec4a75bafc42797a8f1ae4c0513b033580d32784c936aa31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fce6c90b486c66ec4a75bafc42797a8f1ae4c0513b033580d32784c936aa31e->enter($__internal_1fce6c90b486c66ec4a75bafc42797a8f1ae4c0513b033580d32784c936aa31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2af53254c9279806ea6eaee8c222c60dec8e7318e4333972d3c38edd8d4c4eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af53254c9279806ea6eaee8c222c60dec8e7318e4333972d3c38edd8d4c4eec->enter($__internal_2af53254c9279806ea6eaee8c222c60dec8e7318e4333972d3c38edd8d4c4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1fce6c90b486c66ec4a75bafc42797a8f1ae4c0513b033580d32784c936aa31e->leave($__internal_1fce6c90b486c66ec4a75bafc42797a8f1ae4c0513b033580d32784c936aa31e_prof);

        
        $__internal_2af53254c9279806ea6eaee8c222c60dec8e7318e4333972d3c38edd8d4c4eec->leave($__internal_2af53254c9279806ea6eaee8c222c60dec8e7318e4333972d3c38edd8d4c4eec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
