<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fd1092cadd16d3b905e4625387140c3378943436b22969d60bf131224f94c077 extends Twig_Template
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
        $__internal_72ce9d896daa2f9f36f386bc8260b3f43f9b0e424e2c8e54b7d0dd822f5cbba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ce9d896daa2f9f36f386bc8260b3f43f9b0e424e2c8e54b7d0dd822f5cbba1->enter($__internal_72ce9d896daa2f9f36f386bc8260b3f43f9b0e424e2c8e54b7d0dd822f5cbba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2e50bd220115913f72a32ae3ea239d59a31f2c1249cbd79f0876a20e91d8ff55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e50bd220115913f72a32ae3ea239d59a31f2c1249cbd79f0876a20e91d8ff55->enter($__internal_2e50bd220115913f72a32ae3ea239d59a31f2c1249cbd79f0876a20e91d8ff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_72ce9d896daa2f9f36f386bc8260b3f43f9b0e424e2c8e54b7d0dd822f5cbba1->leave($__internal_72ce9d896daa2f9f36f386bc8260b3f43f9b0e424e2c8e54b7d0dd822f5cbba1_prof);

        
        $__internal_2e50bd220115913f72a32ae3ea239d59a31f2c1249cbd79f0876a20e91d8ff55->leave($__internal_2e50bd220115913f72a32ae3ea239d59a31f2c1249cbd79f0876a20e91d8ff55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
