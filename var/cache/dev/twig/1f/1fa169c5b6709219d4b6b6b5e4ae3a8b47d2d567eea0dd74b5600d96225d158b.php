<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_14bdff51bf7fc676ed735c9cba8ec90f73e54f7c06aa55eafa9ce07d3a6bfe67 extends Twig_Template
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
        $__internal_9d26a1c045d13d8367299e271f6bfecdfd12024b9bf8bad6912ef84ea4adbf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d26a1c045d13d8367299e271f6bfecdfd12024b9bf8bad6912ef84ea4adbf9e->enter($__internal_9d26a1c045d13d8367299e271f6bfecdfd12024b9bf8bad6912ef84ea4adbf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ff9a19c064401c398d3288aa62eaa68d7690cc25e142157f4fa56ad4659b3445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9a19c064401c398d3288aa62eaa68d7690cc25e142157f4fa56ad4659b3445->enter($__internal_ff9a19c064401c398d3288aa62eaa68d7690cc25e142157f4fa56ad4659b3445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9d26a1c045d13d8367299e271f6bfecdfd12024b9bf8bad6912ef84ea4adbf9e->leave($__internal_9d26a1c045d13d8367299e271f6bfecdfd12024b9bf8bad6912ef84ea4adbf9e_prof);

        
        $__internal_ff9a19c064401c398d3288aa62eaa68d7690cc25e142157f4fa56ad4659b3445->leave($__internal_ff9a19c064401c398d3288aa62eaa68d7690cc25e142157f4fa56ad4659b3445_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
