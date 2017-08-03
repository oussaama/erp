<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1121c801b1ab7a153627d890093aa7163d48a30dcbb2aa3d6b49907dc540d5ff extends Twig_Template
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
        $__internal_83feb70a5740a2aa369ef7ec121196a5e2f67fbb4dee33b5a7c49f8400fc91e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83feb70a5740a2aa369ef7ec121196a5e2f67fbb4dee33b5a7c49f8400fc91e3->enter($__internal_83feb70a5740a2aa369ef7ec121196a5e2f67fbb4dee33b5a7c49f8400fc91e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a5bf087696e7da16749c6bfd900b357d16e87d59060631f698e454b8450e87dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bf087696e7da16749c6bfd900b357d16e87d59060631f698e454b8450e87dd->enter($__internal_a5bf087696e7da16749c6bfd900b357d16e87d59060631f698e454b8450e87dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_83feb70a5740a2aa369ef7ec121196a5e2f67fbb4dee33b5a7c49f8400fc91e3->leave($__internal_83feb70a5740a2aa369ef7ec121196a5e2f67fbb4dee33b5a7c49f8400fc91e3_prof);

        
        $__internal_a5bf087696e7da16749c6bfd900b357d16e87d59060631f698e454b8450e87dd->leave($__internal_a5bf087696e7da16749c6bfd900b357d16e87d59060631f698e454b8450e87dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
