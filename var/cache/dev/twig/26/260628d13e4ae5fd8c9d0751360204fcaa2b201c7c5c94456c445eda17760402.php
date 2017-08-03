<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1791ad776248ce9d3374bde64308c17b4ac2892b943819a86547f49b4800de61 extends Twig_Template
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
        $__internal_5b1f5a22b82b92cb3534a9280432bda380e5f812c99518cc37156e15240331b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1f5a22b82b92cb3534a9280432bda380e5f812c99518cc37156e15240331b6->enter($__internal_5b1f5a22b82b92cb3534a9280432bda380e5f812c99518cc37156e15240331b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ce8d5d8f761dd39e0cbc2b544000e2b8545cb580859d4a9708a028984a023b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8d5d8f761dd39e0cbc2b544000e2b8545cb580859d4a9708a028984a023b6d->enter($__internal_ce8d5d8f761dd39e0cbc2b544000e2b8545cb580859d4a9708a028984a023b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5b1f5a22b82b92cb3534a9280432bda380e5f812c99518cc37156e15240331b6->leave($__internal_5b1f5a22b82b92cb3534a9280432bda380e5f812c99518cc37156e15240331b6_prof);

        
        $__internal_ce8d5d8f761dd39e0cbc2b544000e2b8545cb580859d4a9708a028984a023b6d->leave($__internal_ce8d5d8f761dd39e0cbc2b544000e2b8545cb580859d4a9708a028984a023b6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
