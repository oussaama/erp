<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_576b25fc94200df1fb60980421019aa5ff729fee2be6c5fde5c1a9578d44800f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f0dcbf9733532651e60c136c4dfa7d587f734bfede926ff91cb672757d728001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0dcbf9733532651e60c136c4dfa7d587f734bfede926ff91cb672757d728001->enter($__internal_f0dcbf9733532651e60c136c4dfa7d587f734bfede926ff91cb672757d728001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2d59a7b54818cdf6ac16111574c660a277409e836cf37e2a0301256eb4b3e7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d59a7b54818cdf6ac16111574c660a277409e836cf37e2a0301256eb4b3e7bd->enter($__internal_2d59a7b54818cdf6ac16111574c660a277409e836cf37e2a0301256eb4b3e7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0dcbf9733532651e60c136c4dfa7d587f734bfede926ff91cb672757d728001->leave($__internal_f0dcbf9733532651e60c136c4dfa7d587f734bfede926ff91cb672757d728001_prof);

        
        $__internal_2d59a7b54818cdf6ac16111574c660a277409e836cf37e2a0301256eb4b3e7bd->leave($__internal_2d59a7b54818cdf6ac16111574c660a277409e836cf37e2a0301256eb4b3e7bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f2803526e2f5c997a034e1b08420117f571445e5d4c162c18abdf251509be20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2803526e2f5c997a034e1b08420117f571445e5d4c162c18abdf251509be20->enter($__internal_4f2803526e2f5c997a034e1b08420117f571445e5d4c162c18abdf251509be20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c723a22fa7a5cf65df5db7661ed4035f65cefd414465a0dd7ee55a01c3f0a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c723a22fa7a5cf65df5db7661ed4035f65cefd414465a0dd7ee55a01c3f0a0f->enter($__internal_9c723a22fa7a5cf65df5db7661ed4035f65cefd414465a0dd7ee55a01c3f0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9c723a22fa7a5cf65df5db7661ed4035f65cefd414465a0dd7ee55a01c3f0a0f->leave($__internal_9c723a22fa7a5cf65df5db7661ed4035f65cefd414465a0dd7ee55a01c3f0a0f_prof);

        
        $__internal_4f2803526e2f5c997a034e1b08420117f571445e5d4c162c18abdf251509be20->leave($__internal_4f2803526e2f5c997a034e1b08420117f571445e5d4c162c18abdf251509be20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
