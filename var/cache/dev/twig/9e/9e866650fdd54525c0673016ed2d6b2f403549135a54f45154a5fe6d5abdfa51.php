<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f87edfb43474cd936e58c751640f8cc3ff3aba1c988a0a3a205581a5dbcc4e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3abd8ae2da477df49e6e9c41846892c6fb4ce1219d60523bd8d58591b92ef460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abd8ae2da477df49e6e9c41846892c6fb4ce1219d60523bd8d58591b92ef460->enter($__internal_3abd8ae2da477df49e6e9c41846892c6fb4ce1219d60523bd8d58591b92ef460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_33656e9f9729bb0f3e891ba109a15cb93c83dc9888200c357f53c42211d20782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33656e9f9729bb0f3e891ba109a15cb93c83dc9888200c357f53c42211d20782->enter($__internal_33656e9f9729bb0f3e891ba109a15cb93c83dc9888200c357f53c42211d20782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3abd8ae2da477df49e6e9c41846892c6fb4ce1219d60523bd8d58591b92ef460->leave($__internal_3abd8ae2da477df49e6e9c41846892c6fb4ce1219d60523bd8d58591b92ef460_prof);

        
        $__internal_33656e9f9729bb0f3e891ba109a15cb93c83dc9888200c357f53c42211d20782->leave($__internal_33656e9f9729bb0f3e891ba109a15cb93c83dc9888200c357f53c42211d20782_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d62c1b5b3821d323226a67a9a9d2af3fc43058e557dcd9e004878f9afdb4348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d62c1b5b3821d323226a67a9a9d2af3fc43058e557dcd9e004878f9afdb4348->enter($__internal_6d62c1b5b3821d323226a67a9a9d2af3fc43058e557dcd9e004878f9afdb4348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9be5027cc349fc88cb65c644d7562172789fac733ae69b6e5bd4ed9fa9bec419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be5027cc349fc88cb65c644d7562172789fac733ae69b6e5bd4ed9fa9bec419->enter($__internal_9be5027cc349fc88cb65c644d7562172789fac733ae69b6e5bd4ed9fa9bec419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_9be5027cc349fc88cb65c644d7562172789fac733ae69b6e5bd4ed9fa9bec419->leave($__internal_9be5027cc349fc88cb65c644d7562172789fac733ae69b6e5bd4ed9fa9bec419_prof);

        
        $__internal_6d62c1b5b3821d323226a67a9a9d2af3fc43058e557dcd9e004878f9afdb4348->leave($__internal_6d62c1b5b3821d323226a67a9a9d2af3fc43058e557dcd9e004878f9afdb4348_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
