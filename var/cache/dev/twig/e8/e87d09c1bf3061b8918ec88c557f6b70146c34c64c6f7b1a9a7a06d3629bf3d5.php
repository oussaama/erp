<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_520d8acb60fa4ebe11d2242791eb5e385e964f58dc8ab0dcb9e6fafa5b4d3551 extends Twig_Template
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
        $__internal_1a66991a824558b9a12157e16caa30c78849e86e256fbcedc1950b82a05881d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a66991a824558b9a12157e16caa30c78849e86e256fbcedc1950b82a05881d1->enter($__internal_1a66991a824558b9a12157e16caa30c78849e86e256fbcedc1950b82a05881d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fec1f251f40ef7cd582046d3c98e45bc63f01bd8288b43f0b9f4c00c6634d69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec1f251f40ef7cd582046d3c98e45bc63f01bd8288b43f0b9f4c00c6634d69f->enter($__internal_fec1f251f40ef7cd582046d3c98e45bc63f01bd8288b43f0b9f4c00c6634d69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1a66991a824558b9a12157e16caa30c78849e86e256fbcedc1950b82a05881d1->leave($__internal_1a66991a824558b9a12157e16caa30c78849e86e256fbcedc1950b82a05881d1_prof);

        
        $__internal_fec1f251f40ef7cd582046d3c98e45bc63f01bd8288b43f0b9f4c00c6634d69f->leave($__internal_fec1f251f40ef7cd582046d3c98e45bc63f01bd8288b43f0b9f4c00c6634d69f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
