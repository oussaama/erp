<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_10d05785a9524227df7da293053dd42f5d4e28906c55205216ab5331d7a17a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f847df8c2ceccafbe47563b92dbe0ea35e29abe72e7b7332b8ec01ce209c4b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f847df8c2ceccafbe47563b92dbe0ea35e29abe72e7b7332b8ec01ce209c4b12->enter($__internal_f847df8c2ceccafbe47563b92dbe0ea35e29abe72e7b7332b8ec01ce209c4b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $__internal_32fafcba63fdb380106a66563ae019e7398482cbd6943f9fd4eba3f5c07ee83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fafcba63fdb380106a66563ae019e7398482cbd6943f9fd4eba3f5c07ee83e->enter($__internal_32fafcba63fdb380106a66563ae019e7398482cbd6943f9fd4eba3f5c07ee83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f847df8c2ceccafbe47563b92dbe0ea35e29abe72e7b7332b8ec01ce209c4b12->leave($__internal_f847df8c2ceccafbe47563b92dbe0ea35e29abe72e7b7332b8ec01ce209c4b12_prof);

        
        $__internal_32fafcba63fdb380106a66563ae019e7398482cbd6943f9fd4eba3f5c07ee83e->leave($__internal_32fafcba63fdb380106a66563ae019e7398482cbd6943f9fd4eba3f5c07ee83e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a146f87b2d28b64c2d5f7c9fe1433e34f2eeee38219d9778ff5ca910aa2b278d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a146f87b2d28b64c2d5f7c9fe1433e34f2eeee38219d9778ff5ca910aa2b278d->enter($__internal_a146f87b2d28b64c2d5f7c9fe1433e34f2eeee38219d9778ff5ca910aa2b278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee5742fdf587ef003ed3da93fa9f19ef26d09857eb60371e740b886eb433616b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5742fdf587ef003ed3da93fa9f19ef26d09857eb60371e740b886eb433616b->enter($__internal_ee5742fdf587ef003ed3da93fa9f19ef26d09857eb60371e740b886eb433616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ee5742fdf587ef003ed3da93fa9f19ef26d09857eb60371e740b886eb433616b->leave($__internal_ee5742fdf587ef003ed3da93fa9f19ef26d09857eb60371e740b886eb433616b_prof);

        
        $__internal_a146f87b2d28b64c2d5f7c9fe1433e34f2eeee38219d9778ff5ca910aa2b278d->leave($__internal_a146f87b2d28b64c2d5f7c9fe1433e34f2eeee38219d9778ff5ca910aa2b278d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
