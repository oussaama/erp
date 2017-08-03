<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4020434a4ba68f553e50d0ec5d586b80ae5a657a13b6e964299ac23088334a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5755929fd5c55e2808e9ceebfdc635c3863c89d417d50777a92c26108403197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5755929fd5c55e2808e9ceebfdc635c3863c89d417d50777a92c26108403197->enter($__internal_c5755929fd5c55e2808e9ceebfdc635c3863c89d417d50777a92c26108403197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_075c2ba7371fbd75966125590b994e402e7a6c928402736418b0e95acc2d8194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075c2ba7371fbd75966125590b994e402e7a6c928402736418b0e95acc2d8194->enter($__internal_075c2ba7371fbd75966125590b994e402e7a6c928402736418b0e95acc2d8194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5755929fd5c55e2808e9ceebfdc635c3863c89d417d50777a92c26108403197->leave($__internal_c5755929fd5c55e2808e9ceebfdc635c3863c89d417d50777a92c26108403197_prof);

        
        $__internal_075c2ba7371fbd75966125590b994e402e7a6c928402736418b0e95acc2d8194->leave($__internal_075c2ba7371fbd75966125590b994e402e7a6c928402736418b0e95acc2d8194_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01fd5d1cbcf7eea80e53d7b02c6ee5c7629533fe45391958bc4dd8eccf461e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fd5d1cbcf7eea80e53d7b02c6ee5c7629533fe45391958bc4dd8eccf461e0c->enter($__internal_01fd5d1cbcf7eea80e53d7b02c6ee5c7629533fe45391958bc4dd8eccf461e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9bc7483eca967e12f6b44f61437e12439080b4d598379604e6c6dd54e1dee93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bc7483eca967e12f6b44f61437e12439080b4d598379604e6c6dd54e1dee93->enter($__internal_a9bc7483eca967e12f6b44f61437e12439080b4d598379604e6c6dd54e1dee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a9bc7483eca967e12f6b44f61437e12439080b4d598379604e6c6dd54e1dee93->leave($__internal_a9bc7483eca967e12f6b44f61437e12439080b4d598379604e6c6dd54e1dee93_prof);

        
        $__internal_01fd5d1cbcf7eea80e53d7b02c6ee5c7629533fe45391958bc4dd8eccf461e0c->leave($__internal_01fd5d1cbcf7eea80e53d7b02c6ee5c7629533fe45391958bc4dd8eccf461e0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_007d6451b55f213e7e0496f4e330dc591f9a3ec5c0b485fde7cdf3a901628b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007d6451b55f213e7e0496f4e330dc591f9a3ec5c0b485fde7cdf3a901628b24->enter($__internal_007d6451b55f213e7e0496f4e330dc591f9a3ec5c0b485fde7cdf3a901628b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5d34784aa5de0f0776856dd15697e5f485a94f8a8594c7951e2cbde820deac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d34784aa5de0f0776856dd15697e5f485a94f8a8594c7951e2cbde820deac1->enter($__internal_a5d34784aa5de0f0776856dd15697e5f485a94f8a8594c7951e2cbde820deac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a5d34784aa5de0f0776856dd15697e5f485a94f8a8594c7951e2cbde820deac1->leave($__internal_a5d34784aa5de0f0776856dd15697e5f485a94f8a8594c7951e2cbde820deac1_prof);

        
        $__internal_007d6451b55f213e7e0496f4e330dc591f9a3ec5c0b485fde7cdf3a901628b24->leave($__internal_007d6451b55f213e7e0496f4e330dc591f9a3ec5c0b485fde7cdf3a901628b24_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
