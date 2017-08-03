<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f469d730088568cbe2911da31debb8de38c8679f09c3d8dad9b5ef3c8dde0018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_265092e5cee9c660fdc5b327734d124ed408431a13b73a0ed7c8015fb850eaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265092e5cee9c660fdc5b327734d124ed408431a13b73a0ed7c8015fb850eaf4->enter($__internal_265092e5cee9c660fdc5b327734d124ed408431a13b73a0ed7c8015fb850eaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d8c6187764decb09dbb1db4590ceaa8af79891e434eb6525600a9a032b0c327b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c6187764decb09dbb1db4590ceaa8af79891e434eb6525600a9a032b0c327b->enter($__internal_d8c6187764decb09dbb1db4590ceaa8af79891e434eb6525600a9a032b0c327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265092e5cee9c660fdc5b327734d124ed408431a13b73a0ed7c8015fb850eaf4->leave($__internal_265092e5cee9c660fdc5b327734d124ed408431a13b73a0ed7c8015fb850eaf4_prof);

        
        $__internal_d8c6187764decb09dbb1db4590ceaa8af79891e434eb6525600a9a032b0c327b->leave($__internal_d8c6187764decb09dbb1db4590ceaa8af79891e434eb6525600a9a032b0c327b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e92f83da7e64937d5bfe3544315a827e5d867e0b887db0d470b8b4163ef1f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e92f83da7e64937d5bfe3544315a827e5d867e0b887db0d470b8b4163ef1f79->enter($__internal_0e92f83da7e64937d5bfe3544315a827e5d867e0b887db0d470b8b4163ef1f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8900cdb5cc4679a1b6cfc7bf3c614122369497cd4aadb14ba6100408425ecd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8900cdb5cc4679a1b6cfc7bf3c614122369497cd4aadb14ba6100408425ecd40->enter($__internal_8900cdb5cc4679a1b6cfc7bf3c614122369497cd4aadb14ba6100408425ecd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8900cdb5cc4679a1b6cfc7bf3c614122369497cd4aadb14ba6100408425ecd40->leave($__internal_8900cdb5cc4679a1b6cfc7bf3c614122369497cd4aadb14ba6100408425ecd40_prof);

        
        $__internal_0e92f83da7e64937d5bfe3544315a827e5d867e0b887db0d470b8b4163ef1f79->leave($__internal_0e92f83da7e64937d5bfe3544315a827e5d867e0b887db0d470b8b4163ef1f79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
