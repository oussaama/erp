<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_c9cda5e23ee75065e0deb7f4e39ed78ea841bc9b8d511913a81e165f2c3af575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_65c14671b96d88f6f46fdd63827dc30c91b9ab3677bb5eb59c98057bffd0db4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c14671b96d88f6f46fdd63827dc30c91b9ab3677bb5eb59c98057bffd0db4a->enter($__internal_65c14671b96d88f6f46fdd63827dc30c91b9ab3677bb5eb59c98057bffd0db4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_6a05bc4338b7ca5cabb1cae75325a8a9b33384168af434a7c890a886582bce32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a05bc4338b7ca5cabb1cae75325a8a9b33384168af434a7c890a886582bce32->enter($__internal_6a05bc4338b7ca5cabb1cae75325a8a9b33384168af434a7c890a886582bce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c14671b96d88f6f46fdd63827dc30c91b9ab3677bb5eb59c98057bffd0db4a->leave($__internal_65c14671b96d88f6f46fdd63827dc30c91b9ab3677bb5eb59c98057bffd0db4a_prof);

        
        $__internal_6a05bc4338b7ca5cabb1cae75325a8a9b33384168af434a7c890a886582bce32->leave($__internal_6a05bc4338b7ca5cabb1cae75325a8a9b33384168af434a7c890a886582bce32_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b35ccbd505e04a9a4ae491a51dc02a8e3c493f187294bae5675c2d94fa3d4756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35ccbd505e04a9a4ae491a51dc02a8e3c493f187294bae5675c2d94fa3d4756->enter($__internal_b35ccbd505e04a9a4ae491a51dc02a8e3c493f187294bae5675c2d94fa3d4756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4272005431bf7c51f4a34357638e61e98cc54be808b16debb3d695a1e71480fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4272005431bf7c51f4a34357638e61e98cc54be808b16debb3d695a1e71480fc->enter($__internal_4272005431bf7c51f4a34357638e61e98cc54be808b16debb3d695a1e71480fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4272005431bf7c51f4a34357638e61e98cc54be808b16debb3d695a1e71480fc->leave($__internal_4272005431bf7c51f4a34357638e61e98cc54be808b16debb3d695a1e71480fc_prof);

        
        $__internal_b35ccbd505e04a9a4ae491a51dc02a8e3c493f187294bae5675c2d94fa3d4756->leave($__internal_b35ccbd505e04a9a4ae491a51dc02a8e3c493f187294bae5675c2d94fa3d4756_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/erp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
