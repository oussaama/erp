<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7bb07f6e800167dc71cd3206bfdf91df3ac3808e50fdb48633801501161f0ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_080d54f2d79119597dcb0c5a549d0f3ebabd3b15991df52242120550453509a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080d54f2d79119597dcb0c5a549d0f3ebabd3b15991df52242120550453509a2->enter($__internal_080d54f2d79119597dcb0c5a549d0f3ebabd3b15991df52242120550453509a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $__internal_bff4fdf07c23654dabaeef8c45c27f60bb41b1e6b88f4f671d7e830e8cbaf5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff4fdf07c23654dabaeef8c45c27f60bb41b1e6b88f4f671d7e830e8cbaf5f3->enter($__internal_bff4fdf07c23654dabaeef8c45c27f60bb41b1e6b88f4f671d7e830e8cbaf5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080d54f2d79119597dcb0c5a549d0f3ebabd3b15991df52242120550453509a2->leave($__internal_080d54f2d79119597dcb0c5a549d0f3ebabd3b15991df52242120550453509a2_prof);

        
        $__internal_bff4fdf07c23654dabaeef8c45c27f60bb41b1e6b88f4f671d7e830e8cbaf5f3->leave($__internal_bff4fdf07c23654dabaeef8c45c27f60bb41b1e6b88f4f671d7e830e8cbaf5f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf6d6f08eb0814a88123058a9e476ae45becb037b961760003ef8c35eb386de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6d6f08eb0814a88123058a9e476ae45becb037b961760003ef8c35eb386de3->enter($__internal_cf6d6f08eb0814a88123058a9e476ae45becb037b961760003ef8c35eb386de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1176c2a0d77b92bb4a46547788efd12d85e39bc7266448f73c617efcf7b9740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1176c2a0d77b92bb4a46547788efd12d85e39bc7266448f73c617efcf7b9740->enter($__internal_b1176c2a0d77b92bb4a46547788efd12d85e39bc7266448f73c617efcf7b9740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b1176c2a0d77b92bb4a46547788efd12d85e39bc7266448f73c617efcf7b9740->leave($__internal_b1176c2a0d77b92bb4a46547788efd12d85e39bc7266448f73c617efcf7b9740_prof);

        
        $__internal_cf6d6f08eb0814a88123058a9e476ae45becb037b961760003ef8c35eb386de3->leave($__internal_cf6d6f08eb0814a88123058a9e476ae45becb037b961760003ef8c35eb386de3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
