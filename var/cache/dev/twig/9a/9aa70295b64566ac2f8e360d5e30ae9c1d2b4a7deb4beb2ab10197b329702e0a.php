<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7bcbb6ac0406036a91db218ac3f70980acb8565eb0d7912905437cbb8aa458dd extends Twig_Template
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
        $__internal_7a7bddf07361d11da2291752cb32a1a63ef4149f79c9aa9179dd5e163eaa7695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7bddf07361d11da2291752cb32a1a63ef4149f79c9aa9179dd5e163eaa7695->enter($__internal_7a7bddf07361d11da2291752cb32a1a63ef4149f79c9aa9179dd5e163eaa7695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9643f7d7713d460c98e38cc42ded3e71c1a2eb6116fbbe9b2849e33151854a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9643f7d7713d460c98e38cc42ded3e71c1a2eb6116fbbe9b2849e33151854a38->enter($__internal_9643f7d7713d460c98e38cc42ded3e71c1a2eb6116fbbe9b2849e33151854a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7a7bddf07361d11da2291752cb32a1a63ef4149f79c9aa9179dd5e163eaa7695->leave($__internal_7a7bddf07361d11da2291752cb32a1a63ef4149f79c9aa9179dd5e163eaa7695_prof);

        
        $__internal_9643f7d7713d460c98e38cc42ded3e71c1a2eb6116fbbe9b2849e33151854a38->leave($__internal_9643f7d7713d460c98e38cc42ded3e71c1a2eb6116fbbe9b2849e33151854a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
