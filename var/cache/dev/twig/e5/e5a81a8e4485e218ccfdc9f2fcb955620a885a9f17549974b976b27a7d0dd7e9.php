<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_287e2782fc1d65d741fad3b9fee63cad7b15a09bd3f555df5848da637c033658 extends Twig_Template
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
        $__internal_b16c81a990c01c029bb1ec05ab567e35b8e40faea46afe92455a477f17d11c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16c81a990c01c029bb1ec05ab567e35b8e40faea46afe92455a477f17d11c45->enter($__internal_b16c81a990c01c029bb1ec05ab567e35b8e40faea46afe92455a477f17d11c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ac74490c9fec8fa0572cf2d07b89b132bc4ad483945365a8a023942383ced377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac74490c9fec8fa0572cf2d07b89b132bc4ad483945365a8a023942383ced377->enter($__internal_ac74490c9fec8fa0572cf2d07b89b132bc4ad483945365a8a023942383ced377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b16c81a990c01c029bb1ec05ab567e35b8e40faea46afe92455a477f17d11c45->leave($__internal_b16c81a990c01c029bb1ec05ab567e35b8e40faea46afe92455a477f17d11c45_prof);

        
        $__internal_ac74490c9fec8fa0572cf2d07b89b132bc4ad483945365a8a023942383ced377->leave($__internal_ac74490c9fec8fa0572cf2d07b89b132bc4ad483945365a8a023942383ced377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
