<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e63b98b6e8d82da905155d706ba005009173311cba43c64e8f918f8147e2ac4f extends Twig_Template
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
        $__internal_063ece41b818022810b4d92e3797cf69331a62171e3d6843156e75d3bfd9013a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063ece41b818022810b4d92e3797cf69331a62171e3d6843156e75d3bfd9013a->enter($__internal_063ece41b818022810b4d92e3797cf69331a62171e3d6843156e75d3bfd9013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_efb9d984022bca7b43381a86c085364430ee257938ceb77478eaee42e2e92c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb9d984022bca7b43381a86c085364430ee257938ceb77478eaee42e2e92c85->enter($__internal_efb9d984022bca7b43381a86c085364430ee257938ceb77478eaee42e2e92c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_063ece41b818022810b4d92e3797cf69331a62171e3d6843156e75d3bfd9013a->leave($__internal_063ece41b818022810b4d92e3797cf69331a62171e3d6843156e75d3bfd9013a_prof);

        
        $__internal_efb9d984022bca7b43381a86c085364430ee257938ceb77478eaee42e2e92c85->leave($__internal_efb9d984022bca7b43381a86c085364430ee257938ceb77478eaee42e2e92c85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
