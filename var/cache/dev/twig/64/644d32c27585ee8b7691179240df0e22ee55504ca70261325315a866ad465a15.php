<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9436db20822c894b70b237ab4fe650d9ae014a0774fb92a51b2e82a69624e579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_02f765d741e8a0d4c9ee2905fc9db7e335992324f852853b23a07c1c5cad079c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f765d741e8a0d4c9ee2905fc9db7e335992324f852853b23a07c1c5cad079c->enter($__internal_02f765d741e8a0d4c9ee2905fc9db7e335992324f852853b23a07c1c5cad079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_b9654bccd7d7dda987dad10448ed01211cdc63cd572a9d6bcbe61dbab4debd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9654bccd7d7dda987dad10448ed01211cdc63cd572a9d6bcbe61dbab4debd46->enter($__internal_b9654bccd7d7dda987dad10448ed01211cdc63cd572a9d6bcbe61dbab4debd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f765d741e8a0d4c9ee2905fc9db7e335992324f852853b23a07c1c5cad079c->leave($__internal_02f765d741e8a0d4c9ee2905fc9db7e335992324f852853b23a07c1c5cad079c_prof);

        
        $__internal_b9654bccd7d7dda987dad10448ed01211cdc63cd572a9d6bcbe61dbab4debd46->leave($__internal_b9654bccd7d7dda987dad10448ed01211cdc63cd572a9d6bcbe61dbab4debd46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e7cb89d91a4a07f06d6a7901bb24f17eaa0c3d23d716a9b4894eab125cefdb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7cb89d91a4a07f06d6a7901bb24f17eaa0c3d23d716a9b4894eab125cefdb0->enter($__internal_4e7cb89d91a4a07f06d6a7901bb24f17eaa0c3d23d716a9b4894eab125cefdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5fce6972290fc17c980dcfce9377d78d9f502e1926c8d462dc02341bafadaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fce6972290fc17c980dcfce9377d78d9f502e1926c8d462dc02341bafadaa2->enter($__internal_b5fce6972290fc17c980dcfce9377d78d9f502e1926c8d462dc02341bafadaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b5fce6972290fc17c980dcfce9377d78d9f502e1926c8d462dc02341bafadaa2->leave($__internal_b5fce6972290fc17c980dcfce9377d78d9f502e1926c8d462dc02341bafadaa2_prof);

        
        $__internal_4e7cb89d91a4a07f06d6a7901bb24f17eaa0c3d23d716a9b4894eab125cefdb0->leave($__internal_4e7cb89d91a4a07f06d6a7901bb24f17eaa0c3d23d716a9b4894eab125cefdb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
