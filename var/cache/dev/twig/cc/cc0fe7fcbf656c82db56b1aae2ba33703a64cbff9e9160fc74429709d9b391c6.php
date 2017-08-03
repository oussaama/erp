<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8200e5cc10bd70f681276c5497bfabf9459d373aaea8c4422fd9fb6bcbebab45 extends Twig_Template
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
        $__internal_73351be2dd55680c7e9c92d205249cbdf19b47465db071efa7203921ec337600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73351be2dd55680c7e9c92d205249cbdf19b47465db071efa7203921ec337600->enter($__internal_73351be2dd55680c7e9c92d205249cbdf19b47465db071efa7203921ec337600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b7e5b55f0c01dee964fd36ad2248c99f4c4a12242f16c90c2a558bd472bc930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e5b55f0c01dee964fd36ad2248c99f4c4a12242f16c90c2a558bd472bc930f->enter($__internal_b7e5b55f0c01dee964fd36ad2248c99f4c4a12242f16c90c2a558bd472bc930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_73351be2dd55680c7e9c92d205249cbdf19b47465db071efa7203921ec337600->leave($__internal_73351be2dd55680c7e9c92d205249cbdf19b47465db071efa7203921ec337600_prof);

        
        $__internal_b7e5b55f0c01dee964fd36ad2248c99f4c4a12242f16c90c2a558bd472bc930f->leave($__internal_b7e5b55f0c01dee964fd36ad2248c99f4c4a12242f16c90c2a558bd472bc930f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
