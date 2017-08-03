<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_afd0f1e9a0408469972e825a5364ca47fb5c6d2a580d479feb901601f4fb6c88 extends Twig_Template
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
        $__internal_4a7c81e117c3f90ae129044563cfafd016d579e5d848974716aefdca0b288307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7c81e117c3f90ae129044563cfafd016d579e5d848974716aefdca0b288307->enter($__internal_4a7c81e117c3f90ae129044563cfafd016d579e5d848974716aefdca0b288307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0f8e7e476548254950f47da2d0323b388a65d38bed8cfd28f9848eb82d58eb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8e7e476548254950f47da2d0323b388a65d38bed8cfd28f9848eb82d58eb2a->enter($__internal_0f8e7e476548254950f47da2d0323b388a65d38bed8cfd28f9848eb82d58eb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4a7c81e117c3f90ae129044563cfafd016d579e5d848974716aefdca0b288307->leave($__internal_4a7c81e117c3f90ae129044563cfafd016d579e5d848974716aefdca0b288307_prof);

        
        $__internal_0f8e7e476548254950f47da2d0323b388a65d38bed8cfd28f9848eb82d58eb2a->leave($__internal_0f8e7e476548254950f47da2d0323b388a65d38bed8cfd28f9848eb82d58eb2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
