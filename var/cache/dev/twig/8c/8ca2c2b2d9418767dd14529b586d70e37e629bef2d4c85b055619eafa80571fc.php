<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_57641d7b447944310d53331ee27e7f3bfe4ac7191dd837717e610a28356f3d4f extends Twig_Template
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
        $__internal_2b2c154a982c6d0b0650856d5ff31b47a6d3d2586d627393a5c4271da32de528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2c154a982c6d0b0650856d5ff31b47a6d3d2586d627393a5c4271da32de528->enter($__internal_2b2c154a982c6d0b0650856d5ff31b47a6d3d2586d627393a5c4271da32de528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_552a330dabc457788f1af1f445aba6f94fd97154b998f6bcc02d026aef062a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552a330dabc457788f1af1f445aba6f94fd97154b998f6bcc02d026aef062a56->enter($__internal_552a330dabc457788f1af1f445aba6f94fd97154b998f6bcc02d026aef062a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2b2c154a982c6d0b0650856d5ff31b47a6d3d2586d627393a5c4271da32de528->leave($__internal_2b2c154a982c6d0b0650856d5ff31b47a6d3d2586d627393a5c4271da32de528_prof);

        
        $__internal_552a330dabc457788f1af1f445aba6f94fd97154b998f6bcc02d026aef062a56->leave($__internal_552a330dabc457788f1af1f445aba6f94fd97154b998f6bcc02d026aef062a56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
