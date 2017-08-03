<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_692ffbc5bd476673ac8fc20f5ba137f9060955e2c5e687a4f111261c986876e9 extends Twig_Template
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
        $__internal_4ddcb35062c16aff864683e45ed8dfde790333949686a8ccf346ff2bddf8c86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddcb35062c16aff864683e45ed8dfde790333949686a8ccf346ff2bddf8c86e->enter($__internal_4ddcb35062c16aff864683e45ed8dfde790333949686a8ccf346ff2bddf8c86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_39c476f767807790add592097676ca57568d0db77c3884f2a8cdbb63ae96b4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c476f767807790add592097676ca57568d0db77c3884f2a8cdbb63ae96b4fa->enter($__internal_39c476f767807790add592097676ca57568d0db77c3884f2a8cdbb63ae96b4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4ddcb35062c16aff864683e45ed8dfde790333949686a8ccf346ff2bddf8c86e->leave($__internal_4ddcb35062c16aff864683e45ed8dfde790333949686a8ccf346ff2bddf8c86e_prof);

        
        $__internal_39c476f767807790add592097676ca57568d0db77c3884f2a8cdbb63ae96b4fa->leave($__internal_39c476f767807790add592097676ca57568d0db77c3884f2a8cdbb63ae96b4fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
