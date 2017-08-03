<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_70465942a91ea97f7d1f576b42be35732af024c1e4e0259dd3de0e712af3ccd2 extends Twig_Template
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
        $__internal_12cdcde0e5e3d6387a314224503f5f550ebfbaf4d7bd857c6a7b7c15ab78a23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cdcde0e5e3d6387a314224503f5f550ebfbaf4d7bd857c6a7b7c15ab78a23d->enter($__internal_12cdcde0e5e3d6387a314224503f5f550ebfbaf4d7bd857c6a7b7c15ab78a23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2235448ff44bad1bede141bf97132c2b3c72ac069075eb8767ede903dcf82087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2235448ff44bad1bede141bf97132c2b3c72ac069075eb8767ede903dcf82087->enter($__internal_2235448ff44bad1bede141bf97132c2b3c72ac069075eb8767ede903dcf82087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_12cdcde0e5e3d6387a314224503f5f550ebfbaf4d7bd857c6a7b7c15ab78a23d->leave($__internal_12cdcde0e5e3d6387a314224503f5f550ebfbaf4d7bd857c6a7b7c15ab78a23d_prof);

        
        $__internal_2235448ff44bad1bede141bf97132c2b3c72ac069075eb8767ede903dcf82087->leave($__internal_2235448ff44bad1bede141bf97132c2b3c72ac069075eb8767ede903dcf82087_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
