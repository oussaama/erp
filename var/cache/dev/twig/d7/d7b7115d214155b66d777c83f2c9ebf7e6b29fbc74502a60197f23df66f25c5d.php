<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_490ce5216405764c9a9bc7ee1605c71760e62b7711f2232bac57a153ae233f28 extends Twig_Template
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
        $__internal_882625df5af6f46054a8e0bdd3f974ea58a579d96d3861026925464069582883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882625df5af6f46054a8e0bdd3f974ea58a579d96d3861026925464069582883->enter($__internal_882625df5af6f46054a8e0bdd3f974ea58a579d96d3861026925464069582883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_097eb902cd680e861bfb125040619b3484550edb4eb0658997b91150ad1ef467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097eb902cd680e861bfb125040619b3484550edb4eb0658997b91150ad1ef467->enter($__internal_097eb902cd680e861bfb125040619b3484550edb4eb0658997b91150ad1ef467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_882625df5af6f46054a8e0bdd3f974ea58a579d96d3861026925464069582883->leave($__internal_882625df5af6f46054a8e0bdd3f974ea58a579d96d3861026925464069582883_prof);

        
        $__internal_097eb902cd680e861bfb125040619b3484550edb4eb0658997b91150ad1ef467->leave($__internal_097eb902cd680e861bfb125040619b3484550edb4eb0658997b91150ad1ef467_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
