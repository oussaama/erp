<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dd366d99701bb284fc838fa2d802b0d2c88538dfd5798014f0faa995f04f33d3 extends Twig_Template
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
        $__internal_b43f370b7a3f72e64b857c777017fa5318fa0246dd53ef75d224c6db03e34fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43f370b7a3f72e64b857c777017fa5318fa0246dd53ef75d224c6db03e34fd7->enter($__internal_b43f370b7a3f72e64b857c777017fa5318fa0246dd53ef75d224c6db03e34fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_11a3c64202d27cd4889bfc13a36d7bc7b124af217230066d1de593125a09e7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a3c64202d27cd4889bfc13a36d7bc7b124af217230066d1de593125a09e7bc->enter($__internal_11a3c64202d27cd4889bfc13a36d7bc7b124af217230066d1de593125a09e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b43f370b7a3f72e64b857c777017fa5318fa0246dd53ef75d224c6db03e34fd7->leave($__internal_b43f370b7a3f72e64b857c777017fa5318fa0246dd53ef75d224c6db03e34fd7_prof);

        
        $__internal_11a3c64202d27cd4889bfc13a36d7bc7b124af217230066d1de593125a09e7bc->leave($__internal_11a3c64202d27cd4889bfc13a36d7bc7b124af217230066d1de593125a09e7bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
