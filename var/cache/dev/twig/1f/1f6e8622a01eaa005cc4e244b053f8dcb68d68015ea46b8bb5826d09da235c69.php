<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_bcc7bc5d64660c51d78284bf9a46b75ef9b6eed792f258b8c86d9d561771be08 extends Twig_Template
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
        $__internal_bb08bf93a2e3a470f6833a6364dbde8a2ed325a67ca39bfda72a2b85f089be43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb08bf93a2e3a470f6833a6364dbde8a2ed325a67ca39bfda72a2b85f089be43->enter($__internal_bb08bf93a2e3a470f6833a6364dbde8a2ed325a67ca39bfda72a2b85f089be43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_e8648dcb912ded0b9f9fa8994b51d1cf97b7a6731dd99ddb3073849c35dad7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8648dcb912ded0b9f9fa8994b51d1cf97b7a6731dd99ddb3073849c35dad7cf->enter($__internal_e8648dcb912ded0b9f9fa8994b51d1cf97b7a6731dd99ddb3073849c35dad7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_bb08bf93a2e3a470f6833a6364dbde8a2ed325a67ca39bfda72a2b85f089be43->leave($__internal_bb08bf93a2e3a470f6833a6364dbde8a2ed325a67ca39bfda72a2b85f089be43_prof);

        
        $__internal_e8648dcb912ded0b9f9fa8994b51d1cf97b7a6731dd99ddb3073849c35dad7cf->leave($__internal_e8648dcb912ded0b9f9fa8994b51d1cf97b7a6731dd99ddb3073849c35dad7cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
