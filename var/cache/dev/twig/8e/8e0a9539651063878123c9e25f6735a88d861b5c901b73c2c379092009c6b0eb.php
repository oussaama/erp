<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_929b9babd85f3bfa1c33fc461bf9a5313f27f3eaaf5a19011fa97959426a7211 extends Twig_Template
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
        $__internal_11d3cc2ac7269f79cce0700953ba65ee1105334b6ab013f3fcf2cbdcad95e265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d3cc2ac7269f79cce0700953ba65ee1105334b6ab013f3fcf2cbdcad95e265->enter($__internal_11d3cc2ac7269f79cce0700953ba65ee1105334b6ab013f3fcf2cbdcad95e265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4afda27d4071c09206a2ce3b3768e0cdfa227a642a251dabf2e90608b56ecd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afda27d4071c09206a2ce3b3768e0cdfa227a642a251dabf2e90608b56ecd11->enter($__internal_4afda27d4071c09206a2ce3b3768e0cdfa227a642a251dabf2e90608b56ecd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_11d3cc2ac7269f79cce0700953ba65ee1105334b6ab013f3fcf2cbdcad95e265->leave($__internal_11d3cc2ac7269f79cce0700953ba65ee1105334b6ab013f3fcf2cbdcad95e265_prof);

        
        $__internal_4afda27d4071c09206a2ce3b3768e0cdfa227a642a251dabf2e90608b56ecd11->leave($__internal_4afda27d4071c09206a2ce3b3768e0cdfa227a642a251dabf2e90608b56ecd11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
