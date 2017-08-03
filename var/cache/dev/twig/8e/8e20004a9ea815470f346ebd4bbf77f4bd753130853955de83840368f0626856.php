<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_625410ef8d77010cf16bea7ffda2e3b6e06895f52ac63c7a164760392e0c5a03 extends Twig_Template
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
        $__internal_d56059a0d5ffcc044e458869e9b06cb7c029b6c1cecd3d6330c7239db49b831e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56059a0d5ffcc044e458869e9b06cb7c029b6c1cecd3d6330c7239db49b831e->enter($__internal_d56059a0d5ffcc044e458869e9b06cb7c029b6c1cecd3d6330c7239db49b831e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6dcded0f390219df1aa5f8f85530d12ba549b66fbd934a3b996ec5098ae80d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcded0f390219df1aa5f8f85530d12ba549b66fbd934a3b996ec5098ae80d53->enter($__internal_6dcded0f390219df1aa5f8f85530d12ba549b66fbd934a3b996ec5098ae80d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d56059a0d5ffcc044e458869e9b06cb7c029b6c1cecd3d6330c7239db49b831e->leave($__internal_d56059a0d5ffcc044e458869e9b06cb7c029b6c1cecd3d6330c7239db49b831e_prof);

        
        $__internal_6dcded0f390219df1aa5f8f85530d12ba549b66fbd934a3b996ec5098ae80d53->leave($__internal_6dcded0f390219df1aa5f8f85530d12ba549b66fbd934a3b996ec5098ae80d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
