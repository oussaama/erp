<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_278e91599e28faca08b03c3e4a1505f36b0a561d4eb9508a9d7d8ad7d7a325bd extends Twig_Template
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
        $__internal_e5b243f3f682dd5aefe8b60ae234aeec8b46a9eb0f3507291987144f92e5a087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b243f3f682dd5aefe8b60ae234aeec8b46a9eb0f3507291987144f92e5a087->enter($__internal_e5b243f3f682dd5aefe8b60ae234aeec8b46a9eb0f3507291987144f92e5a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_668a9bade958f37ded0b731fcc70d624cb64bc1f73613a5fde3b586b614b5f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668a9bade958f37ded0b731fcc70d624cb64bc1f73613a5fde3b586b614b5f00->enter($__internal_668a9bade958f37ded0b731fcc70d624cb64bc1f73613a5fde3b586b614b5f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e5b243f3f682dd5aefe8b60ae234aeec8b46a9eb0f3507291987144f92e5a087->leave($__internal_e5b243f3f682dd5aefe8b60ae234aeec8b46a9eb0f3507291987144f92e5a087_prof);

        
        $__internal_668a9bade958f37ded0b731fcc70d624cb64bc1f73613a5fde3b586b614b5f00->leave($__internal_668a9bade958f37ded0b731fcc70d624cb64bc1f73613a5fde3b586b614b5f00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
