<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_baa6f22e9da784c7f5e00af1ee010561dd9638e2d79495ccaaa608d117dfead5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ec03b3a45a3201065e78b9d4ec1dc860b6644ba523b36f147d62c28aeb75707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec03b3a45a3201065e78b9d4ec1dc860b6644ba523b36f147d62c28aeb75707->enter($__internal_8ec03b3a45a3201065e78b9d4ec1dc860b6644ba523b36f147d62c28aeb75707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_90046a6e3c9a25067bbd7ce9127548dd20a578045d369b8eb25722dafcaa299b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90046a6e3c9a25067bbd7ce9127548dd20a578045d369b8eb25722dafcaa299b->enter($__internal_90046a6e3c9a25067bbd7ce9127548dd20a578045d369b8eb25722dafcaa299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec03b3a45a3201065e78b9d4ec1dc860b6644ba523b36f147d62c28aeb75707->leave($__internal_8ec03b3a45a3201065e78b9d4ec1dc860b6644ba523b36f147d62c28aeb75707_prof);

        
        $__internal_90046a6e3c9a25067bbd7ce9127548dd20a578045d369b8eb25722dafcaa299b->leave($__internal_90046a6e3c9a25067bbd7ce9127548dd20a578045d369b8eb25722dafcaa299b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98e7ce4c575b9d513f79a35b7a67fc042db7c9b478ba7199614e08f0deb512b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e7ce4c575b9d513f79a35b7a67fc042db7c9b478ba7199614e08f0deb512b2->enter($__internal_98e7ce4c575b9d513f79a35b7a67fc042db7c9b478ba7199614e08f0deb512b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a727c17ece4a422d9d0aadc7fc05240ceb7110cf00c8a57bc86ec40ea07d504f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a727c17ece4a422d9d0aadc7fc05240ceb7110cf00c8a57bc86ec40ea07d504f->enter($__internal_a727c17ece4a422d9d0aadc7fc05240ceb7110cf00c8a57bc86ec40ea07d504f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a727c17ece4a422d9d0aadc7fc05240ceb7110cf00c8a57bc86ec40ea07d504f->leave($__internal_a727c17ece4a422d9d0aadc7fc05240ceb7110cf00c8a57bc86ec40ea07d504f_prof);

        
        $__internal_98e7ce4c575b9d513f79a35b7a67fc042db7c9b478ba7199614e08f0deb512b2->leave($__internal_98e7ce4c575b9d513f79a35b7a67fc042db7c9b478ba7199614e08f0deb512b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/erp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
