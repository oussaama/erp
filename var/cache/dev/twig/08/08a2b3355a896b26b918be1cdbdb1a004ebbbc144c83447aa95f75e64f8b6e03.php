<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_ee99df75d282d1e7375a79af5a3d1c42376376c0e5c407cb6d7cf5303d6ba2ff extends Twig_Template
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
        $__internal_66bc1f5c08c2857c850df09ff290ddf0e270dfd8f885c0d880e050293c045b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bc1f5c08c2857c850df09ff290ddf0e270dfd8f885c0d880e050293c045b77->enter($__internal_66bc1f5c08c2857c850df09ff290ddf0e270dfd8f885c0d880e050293c045b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_17bcfc6dc81a60c4ded9f66a696fd546a1b0cd7d4e3af631c5a2edceea3fe4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bcfc6dc81a60c4ded9f66a696fd546a1b0cd7d4e3af631c5a2edceea3fe4a6->enter($__internal_17bcfc6dc81a60c4ded9f66a696fd546a1b0cd7d4e3af631c5a2edceea3fe4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_66bc1f5c08c2857c850df09ff290ddf0e270dfd8f885c0d880e050293c045b77->leave($__internal_66bc1f5c08c2857c850df09ff290ddf0e270dfd8f885c0d880e050293c045b77_prof);

        
        $__internal_17bcfc6dc81a60c4ded9f66a696fd546a1b0cd7d4e3af631c5a2edceea3fe4a6->leave($__internal_17bcfc6dc81a60c4ded9f66a696fd546a1b0cd7d4e3af631c5a2edceea3fe4a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
