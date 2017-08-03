<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6f38d0c4babad810cc9028ec571072b85e28647b88d1ad8fdc3b410b9fcbf57f extends Twig_Template
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
        $__internal_393a327fd557b47c12ce2d886bdb551bfaeec36c5b8cfaa1b808622759ee2207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393a327fd557b47c12ce2d886bdb551bfaeec36c5b8cfaa1b808622759ee2207->enter($__internal_393a327fd557b47c12ce2d886bdb551bfaeec36c5b8cfaa1b808622759ee2207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_df721583f21547c9ce416b018cf172d9cc16defe902fe677fb5afb7035bf0eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df721583f21547c9ce416b018cf172d9cc16defe902fe677fb5afb7035bf0eb1->enter($__internal_df721583f21547c9ce416b018cf172d9cc16defe902fe677fb5afb7035bf0eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_393a327fd557b47c12ce2d886bdb551bfaeec36c5b8cfaa1b808622759ee2207->leave($__internal_393a327fd557b47c12ce2d886bdb551bfaeec36c5b8cfaa1b808622759ee2207_prof);

        
        $__internal_df721583f21547c9ce416b018cf172d9cc16defe902fe677fb5afb7035bf0eb1->leave($__internal_df721583f21547c9ce416b018cf172d9cc16defe902fe677fb5afb7035bf0eb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
