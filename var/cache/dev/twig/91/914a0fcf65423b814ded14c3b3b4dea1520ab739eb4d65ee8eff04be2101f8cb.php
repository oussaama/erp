<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9d89712fd955fb190e6c58fec17c94d4bbff618fa42ba53d3f669a92b94c5084 extends Twig_Template
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
        $__internal_af640538be4248719bdb7519e87425617812f801cc9c56418ed73bad9745c5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af640538be4248719bdb7519e87425617812f801cc9c56418ed73bad9745c5b4->enter($__internal_af640538be4248719bdb7519e87425617812f801cc9c56418ed73bad9745c5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4c90061527d28846f251d6646f57aeddc897aede0f754d78ca88d8a7bf00f92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c90061527d28846f251d6646f57aeddc897aede0f754d78ca88d8a7bf00f92b->enter($__internal_4c90061527d28846f251d6646f57aeddc897aede0f754d78ca88d8a7bf00f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_af640538be4248719bdb7519e87425617812f801cc9c56418ed73bad9745c5b4->leave($__internal_af640538be4248719bdb7519e87425617812f801cc9c56418ed73bad9745c5b4_prof);

        
        $__internal_4c90061527d28846f251d6646f57aeddc897aede0f754d78ca88d8a7bf00f92b->leave($__internal_4c90061527d28846f251d6646f57aeddc897aede0f754d78ca88d8a7bf00f92b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
