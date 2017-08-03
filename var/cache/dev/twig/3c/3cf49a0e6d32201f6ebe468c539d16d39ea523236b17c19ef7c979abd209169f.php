<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_44642dcaa85483304543c03e2cd5e7d34328020139b741dbe79c43e778b8a12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_38fb6f46c86bf6ae53259aab39f853908328bf0809989ce7626fa6d45127babd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fb6f46c86bf6ae53259aab39f853908328bf0809989ce7626fa6d45127babd->enter($__internal_38fb6f46c86bf6ae53259aab39f853908328bf0809989ce7626fa6d45127babd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c7662fe0f797a34c757d51727bb4981f5aa11e636576485d151c6f3555c78eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7662fe0f797a34c757d51727bb4981f5aa11e636576485d151c6f3555c78eb4->enter($__internal_c7662fe0f797a34c757d51727bb4981f5aa11e636576485d151c6f3555c78eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38fb6f46c86bf6ae53259aab39f853908328bf0809989ce7626fa6d45127babd->leave($__internal_38fb6f46c86bf6ae53259aab39f853908328bf0809989ce7626fa6d45127babd_prof);

        
        $__internal_c7662fe0f797a34c757d51727bb4981f5aa11e636576485d151c6f3555c78eb4->leave($__internal_c7662fe0f797a34c757d51727bb4981f5aa11e636576485d151c6f3555c78eb4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad6318c57b9a0ecdfc10db612713217758fafd53a4e8b219a63f77cc589ba19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6318c57b9a0ecdfc10db612713217758fafd53a4e8b219a63f77cc589ba19c->enter($__internal_ad6318c57b9a0ecdfc10db612713217758fafd53a4e8b219a63f77cc589ba19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14e0ab5d027b95532786f79c7706288d4287af9edc80eb8f2ef92bf885bd7a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e0ab5d027b95532786f79c7706288d4287af9edc80eb8f2ef92bf885bd7a33->enter($__internal_14e0ab5d027b95532786f79c7706288d4287af9edc80eb8f2ef92bf885bd7a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_14e0ab5d027b95532786f79c7706288d4287af9edc80eb8f2ef92bf885bd7a33->leave($__internal_14e0ab5d027b95532786f79c7706288d4287af9edc80eb8f2ef92bf885bd7a33_prof);

        
        $__internal_ad6318c57b9a0ecdfc10db612713217758fafd53a4e8b219a63f77cc589ba19c->leave($__internal_ad6318c57b9a0ecdfc10db612713217758fafd53a4e8b219a63f77cc589ba19c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
