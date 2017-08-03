<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_032e57eed8b34fb7ba9cfda79673aed12f80961f4e7c82724de26db12146ebc3 extends Twig_Template
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
        $__internal_8c3d5e54dd1cb668ecb5eabe3cddcf9f10b091f9599c4c2867684b32d60b99ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3d5e54dd1cb668ecb5eabe3cddcf9f10b091f9599c4c2867684b32d60b99ab->enter($__internal_8c3d5e54dd1cb668ecb5eabe3cddcf9f10b091f9599c4c2867684b32d60b99ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d7990b103377a44a67f41ed3500bd70f63cd0e62aa6130cfdeaa49a351fa4d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7990b103377a44a67f41ed3500bd70f63cd0e62aa6130cfdeaa49a351fa4d94->enter($__internal_d7990b103377a44a67f41ed3500bd70f63cd0e62aa6130cfdeaa49a351fa4d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8c3d5e54dd1cb668ecb5eabe3cddcf9f10b091f9599c4c2867684b32d60b99ab->leave($__internal_8c3d5e54dd1cb668ecb5eabe3cddcf9f10b091f9599c4c2867684b32d60b99ab_prof);

        
        $__internal_d7990b103377a44a67f41ed3500bd70f63cd0e62aa6130cfdeaa49a351fa4d94->leave($__internal_d7990b103377a44a67f41ed3500bd70f63cd0e62aa6130cfdeaa49a351fa4d94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
