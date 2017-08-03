<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8acc865605ce6dd5fc51ea2034dd6eb86d7af7fd168d37eed0d53026d6a6f10d extends Twig_Template
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
        $__internal_f371a3ce2586a1eda8b2d166285abdc39f41b36ecbdc106c6141971c9377715c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f371a3ce2586a1eda8b2d166285abdc39f41b36ecbdc106c6141971c9377715c->enter($__internal_f371a3ce2586a1eda8b2d166285abdc39f41b36ecbdc106c6141971c9377715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_78a1188dc53709f2ce6bf8b64c3944d1f7ea6f10a464d71aa35187639a3f2c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a1188dc53709f2ce6bf8b64c3944d1f7ea6f10a464d71aa35187639a3f2c78->enter($__internal_78a1188dc53709f2ce6bf8b64c3944d1f7ea6f10a464d71aa35187639a3f2c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f371a3ce2586a1eda8b2d166285abdc39f41b36ecbdc106c6141971c9377715c->leave($__internal_f371a3ce2586a1eda8b2d166285abdc39f41b36ecbdc106c6141971c9377715c_prof);

        
        $__internal_78a1188dc53709f2ce6bf8b64c3944d1f7ea6f10a464d71aa35187639a3f2c78->leave($__internal_78a1188dc53709f2ce6bf8b64c3944d1f7ea6f10a464d71aa35187639a3f2c78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
