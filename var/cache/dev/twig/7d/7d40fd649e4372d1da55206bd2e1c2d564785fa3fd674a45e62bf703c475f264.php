<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a841641905840a8a9d39296f1e58a09bf6c72b410160204d659ff58c044ec057 extends Twig_Template
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
        $__internal_3b9621a04c1f7a7053beb38ee17d96f1bbe2f099d552c44befd418044e8c28d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9621a04c1f7a7053beb38ee17d96f1bbe2f099d552c44befd418044e8c28d2->enter($__internal_3b9621a04c1f7a7053beb38ee17d96f1bbe2f099d552c44befd418044e8c28d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c5462f9f4abc3423a495ba684eb04cb1319aa2bbe67ac52ecf8794fd55e852df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5462f9f4abc3423a495ba684eb04cb1319aa2bbe67ac52ecf8794fd55e852df->enter($__internal_c5462f9f4abc3423a495ba684eb04cb1319aa2bbe67ac52ecf8794fd55e852df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3b9621a04c1f7a7053beb38ee17d96f1bbe2f099d552c44befd418044e8c28d2->leave($__internal_3b9621a04c1f7a7053beb38ee17d96f1bbe2f099d552c44befd418044e8c28d2_prof);

        
        $__internal_c5462f9f4abc3423a495ba684eb04cb1319aa2bbe67ac52ecf8794fd55e852df->leave($__internal_c5462f9f4abc3423a495ba684eb04cb1319aa2bbe67ac52ecf8794fd55e852df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
