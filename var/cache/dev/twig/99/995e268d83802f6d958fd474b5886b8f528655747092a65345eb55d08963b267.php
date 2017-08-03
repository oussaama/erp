<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_824d8eeaee7ac070e55c823a15e1ab76bbb5c67d512e263cfb1bdfe219841ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_fc6b9662bee8e2062d4bec6adbf6e99b1c2927a951d849568cfac8748afdc91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6b9662bee8e2062d4bec6adbf6e99b1c2927a951d849568cfac8748afdc91f->enter($__internal_fc6b9662bee8e2062d4bec6adbf6e99b1c2927a951d849568cfac8748afdc91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_a95c2a089dbd812023042041cb71c4b80a91f885c677963de12a820a4779c103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95c2a089dbd812023042041cb71c4b80a91f885c677963de12a820a4779c103->enter($__internal_a95c2a089dbd812023042041cb71c4b80a91f885c677963de12a820a4779c103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6b9662bee8e2062d4bec6adbf6e99b1c2927a951d849568cfac8748afdc91f->leave($__internal_fc6b9662bee8e2062d4bec6adbf6e99b1c2927a951d849568cfac8748afdc91f_prof);

        
        $__internal_a95c2a089dbd812023042041cb71c4b80a91f885c677963de12a820a4779c103->leave($__internal_a95c2a089dbd812023042041cb71c4b80a91f885c677963de12a820a4779c103_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79e08f9cdb57c2ee196f6c640bfd07e0e184c3d0195911923197fe885490c68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e08f9cdb57c2ee196f6c640bfd07e0e184c3d0195911923197fe885490c68c->enter($__internal_79e08f9cdb57c2ee196f6c640bfd07e0e184c3d0195911923197fe885490c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf0fd16c091330c73e97c4fe90fd9fafd759f999ff531839b4d8658ed0b1250f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0fd16c091330c73e97c4fe90fd9fafd759f999ff531839b4d8658ed0b1250f->enter($__internal_cf0fd16c091330c73e97c4fe90fd9fafd759f999ff531839b4d8658ed0b1250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_cf0fd16c091330c73e97c4fe90fd9fafd759f999ff531839b4d8658ed0b1250f->leave($__internal_cf0fd16c091330c73e97c4fe90fd9fafd759f999ff531839b4d8658ed0b1250f_prof);

        
        $__internal_79e08f9cdb57c2ee196f6c640bfd07e0e184c3d0195911923197fe885490c68c->leave($__internal_79e08f9cdb57c2ee196f6c640bfd07e0e184c3d0195911923197fe885490c68c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
