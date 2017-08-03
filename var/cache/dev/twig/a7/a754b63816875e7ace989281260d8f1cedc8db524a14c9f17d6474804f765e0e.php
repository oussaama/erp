<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_8a3b265ace287d5ba9ff1701a45616455b9095e615c192c1f085aad648594a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_433991bcc16429bffded9b0e38b5baab8102d074c1f2c890c292031a34c8f8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433991bcc16429bffded9b0e38b5baab8102d074c1f2c890c292031a34c8f8ce->enter($__internal_433991bcc16429bffded9b0e38b5baab8102d074c1f2c890c292031a34c8f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $__internal_19d644164b57c2675ea27c93d9fd7abbadace3d6df5d730783da76ae9809e08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d644164b57c2675ea27c93d9fd7abbadace3d6df5d730783da76ae9809e08b->enter($__internal_19d644164b57c2675ea27c93d9fd7abbadace3d6df5d730783da76ae9809e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433991bcc16429bffded9b0e38b5baab8102d074c1f2c890c292031a34c8f8ce->leave($__internal_433991bcc16429bffded9b0e38b5baab8102d074c1f2c890c292031a34c8f8ce_prof);

        
        $__internal_19d644164b57c2675ea27c93d9fd7abbadace3d6df5d730783da76ae9809e08b->leave($__internal_19d644164b57c2675ea27c93d9fd7abbadace3d6df5d730783da76ae9809e08b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ef74c9e673831918de317dea7fe49e8afd71d2e53c469e8c3cd459b92cc4b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef74c9e673831918de317dea7fe49e8afd71d2e53c469e8c3cd459b92cc4b06->enter($__internal_4ef74c9e673831918de317dea7fe49e8afd71d2e53c469e8c3cd459b92cc4b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82e46ecdc902ed62ced5ff01ceef15b178241e6f22d685d14d1984f88651f6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e46ecdc902ed62ced5ff01ceef15b178241e6f22d685d14d1984f88651f6d0->enter($__internal_82e46ecdc902ed62ced5ff01ceef15b178241e6f22d685d14d1984f88651f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        
        $__internal_82e46ecdc902ed62ced5ff01ceef15b178241e6f22d685d14d1984f88651f6d0->leave($__internal_82e46ecdc902ed62ced5ff01ceef15b178241e6f22d685d14d1984f88651f6d0_prof);

        
        $__internal_4ef74c9e673831918de317dea7fe49e8afd71d2e53c469e8c3cd459b92cc4b06->leave($__internal_4ef74c9e673831918de317dea7fe49e8afd71d2e53c469e8c3cd459b92cc4b06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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

{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
