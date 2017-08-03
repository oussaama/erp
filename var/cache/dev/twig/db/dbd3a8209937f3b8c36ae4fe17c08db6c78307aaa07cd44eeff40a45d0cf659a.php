<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efe419b3663518f62727e2de67a443e434c8dfda3374f1a13bfd815fcc1b7726 extends Twig_Template
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
        $__internal_1d733670372c3c2e8f2c6b16285016959878250e4f159527fe81d8c9d608a63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d733670372c3c2e8f2c6b16285016959878250e4f159527fe81d8c9d608a63b->enter($__internal_1d733670372c3c2e8f2c6b16285016959878250e4f159527fe81d8c9d608a63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_965f83137d07005b8f6434d84558b1007f13c688fff74f43bf76c45afc3d99a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965f83137d07005b8f6434d84558b1007f13c688fff74f43bf76c45afc3d99a6->enter($__internal_965f83137d07005b8f6434d84558b1007f13c688fff74f43bf76c45afc3d99a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1d733670372c3c2e8f2c6b16285016959878250e4f159527fe81d8c9d608a63b->leave($__internal_1d733670372c3c2e8f2c6b16285016959878250e4f159527fe81d8c9d608a63b_prof);

        
        $__internal_965f83137d07005b8f6434d84558b1007f13c688fff74f43bf76c45afc3d99a6->leave($__internal_965f83137d07005b8f6434d84558b1007f13c688fff74f43bf76c45afc3d99a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
